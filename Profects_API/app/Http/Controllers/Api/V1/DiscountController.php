<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Discount\StoreDiscountRequest;
use App\Http\Requests\Api\V1\Discount\UpdateDiscountRequest;
use App\Http\Resources\Api\V1\DiscountResource;
use App\Models\V1\Discount;

class DiscountController extends Controller
{
    public function index() {

        $discounts = Discount::paginate(10);

        return DiscountResource::collection($discounts);
    }

    public function show($id) {

        $discount = Discount::find($id);

        if ($discount) {
            return $discount->toResource(DiscountResource::class);
        } else {
            return response()->json(['message' => "Discount met ID: $id bestaat niet!"], 404);
        }
    }

    public function update(UpdateDiscountRequest $request, $id) {

        $discount = Discount::find($id);

        if ($discount) {
            $updateData = $request->only(['amount', 'discount', 'start_date', 'end_date']);

            if ($request->has('amount')) {
                $updateData['discount'] = null;
            }

            if ($request->has('discount')) {
                $updateData['amount'] = null;
            }

            $discount->update($updateData);

            return $discount->toResource(DiscountResource::class);
        } else {
            return response()->json(['message' => "Discount met ID: $id bestaat niet!"], 404);
        }
    }

    public function store(StoreDiscountRequest $request) {

        $discount = Discount::create([
            'amount' => $request->input('amount'),
            'discount' => $request->input('discount'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $discount->toResource(DiscountResource::class);
    }

    public function destroy($id) {
        $discount = Discount::find($id);

        if ($discount) {
            $discount->delete();
            return response()->json(['message' => "Discount met ID: $id succesvol verwijderd!"], 200);
        } else {
            return response()->json(['message' => "Discount met ID: $id niet gevonden!"], 404);
        }
    }
}
