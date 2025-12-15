<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Category\StoreCategoryRequest;
use App\Http\Requests\Api\V1\Category\UpdateCategoryRequest;
use App\Http\Resources\Api\V1\CategoryResource;
use App\Models\V1\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {

        $categories = Category::paginate(10);

        return CategoryResource::collection($categories);
    }

    public function show($id) {

        $category = Category::find($id);

        if ($category) {
            return $category->toResource(CategoryResource::class);
        } else {
            return response()->json(['message' => "Categorie met ID: $id bestaat niet!"], 404);
        }
    }

    public function update(UpdateCategoryRequest $request, $id) {

        $category =  Category::find($id);

        if ($category) {
            $category->update ([
                'name' => $request->input('name'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return $category->toResource(CategoryResource::class);
        } else {
            return response()->json(['message' => "Categorie met ID: $id bestaat niet!"], 404);
        }
    }

    public function store(StoreCategoryRequest $request) {

        $category = Category::create([
            'name' => $request->input('name'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $category->toResource(CategoryResource::class);
    }

    public function destroy($id) {
        $category = Category::find($id);

        if ($category) {
            $category->delete();
            return response()->json(['message' => "Categorie met ID: $id succesvol verwijderd!"], 200);
        } else {
            return response()->json(['message' => "Categorie met ID: $id niet gevonden!"], 404);
        }
    }
}
