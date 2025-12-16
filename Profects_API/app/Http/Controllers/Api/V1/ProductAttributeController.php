<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AttachAttribute\AttachAttributeRequest;
use App\Http\Resources\Api\V1\ProductResource;
use App\Models\V1\Product;
use App\Models\V1\Attribute;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function attach(Product $product, AttachAttributeRequest $request)
    {
        $product->attributes()->syncWithoutDetaching([$request->attribute_id]);
        return $product->toResource(ProductResource::class);
    }

    public function detach(Product $product, Attribute $attribute)
    {
        $product->attributes()->detach($attribute->id);
        return $product->toResource(ProductResource::class);
    }
}
