<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\V1\Attribute;
use App\Http\Resources\Api\V1\AttributeResource;
use App\Http\Requests\Api\V1\Attribute\StoreAttributeRequest;
use App\Http\Requests\Api\V1\Attribute\UpdateAttributeRequest;

class AttributeController extends Controller
{
    public function index() {
        $attributes = Attribute::paginate(10);
        return AttributeResource::collection($attributes);
    }

    public function show($id) {
        $attribute = Attribute::find($id);

        if ($attribute) {
            return new AttributeResource($attribute);
        } else {
            return response()->json(['message' => "Attribute met ID: $id bestaat niet!"], 404);
        }
    }

    public function update(UpdateAttributeRequest $request, $id) {
        $attribute = Attribute::find($id);

        if (!$attribute) {
            return response()->json(['message' => "Attribute met ID: $id bestaat niet!"], 404);
        }

        $updated = false;

        if ($request->has('name')) {
            $attribute->name = $request->name;
            $updated = true;
        }

        if ($request->has('value')) {
            $attribute->value = $request->value;
            $updated = true;
        }

        if ($updated) {
            $attribute->updated_at = now();
            $attribute->save();
        }

        return new AttributeResource($attribute);
    }

    public function store(StoreAttributeRequest $request) {
        $attribute = Attribute::create([
            'name' => $request->input('name'),
            'value' => $request->input('value'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return new AttributeResource($attribute);
    }

    public function destroy($id) {
        $attribute = Attribute::find($id);

        if ($attribute) {
            $attribute->delete();
            return response()->json(['message' => "Attribute met ID: $id succesvol verwijderd!"], 200);
        } else {
            return response()->json(['message' => "Attribute met ID: $id niet gevonden!"], 404);
        }
    }
}
