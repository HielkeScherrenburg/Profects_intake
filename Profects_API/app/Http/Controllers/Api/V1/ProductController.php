<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\StoreProductRequest;
use App\Http\Requests\Api\V1\UpdateProductRequest;
use App\Http\Resources\Api\V1\ProductResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\V1\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $query = Product::query();

        if ($request->filled('sortPrice')) {
            if ($request->query('sortPrice') === 'desc') {
                $query->orderBy('price', 'desc');
            } elseif ($request->query('sortPrice') === 'asc') {
                $query->orderBy('price', 'asc');
            }
        }

        $products = $query->paginate(10);

        return ProductResource::collection($products);
    }

    public function show($id) {

        $product = Product::find($id);

        if ($product) {
            return $product->toResource(ProductResource::class);
        } else {
            return response()->json(['message' => "Product met ID: $id bestaat niet!"], 200);
        }

    }

    public function update(UpdateProductRequest $request, $id) {

        $product =  Product::find($id);

        if ($product) {
            $product->update ([
                'name' => $request->input('name'),
                'price' =>$request->input('price'),
                'description' => $request->input('description'),
                'weight' => $request->input('weight'),
                'category_id' => $request->input('category_id'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        return $product->toResource(ProductResource::class);

        } else {
            return response()->json(['message' => "Product met ID: $id bestaat niet!"], 404);
        }
    }

    public function store(StoreProductRequest $request) {

        $product = Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'description' => $request->input('description', null),
            'weight' => $request->input('weight', null),
            'category_id' => $request['category_id'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $product->toResource(ProductResource::class);
    }

    public function destroy($id) {
        $product = Product::find($id);

        if ($product) {
            $product->delete();
            return response()->json(['message' => "Product met ID: $id succesvol verwijderd!"], 200);
        } else {
            return response()->json(['message' => "Product met ID: $id niet gevonden!"], 404);
        }
    }
}
