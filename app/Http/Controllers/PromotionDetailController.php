<?php

namespace App\Http\Controllers;


Use App\promotionDetail;
use Illuminate\Http\Request;

class PromotionDetailController extends Controller
{
    //

    public function index()
    {
        return promotionDetail::all();
    }

    public function show(promocion $promotionDetail)
    {
        return $promotionDetail;
    }

    public function store(Request $request)
    {
        $promotionDetail = promotionDetail::create($request->all());

        return response()->json($promocion, 201);
    }

    public function update(Request $request, promocion $promotionDetail)
    {
        $promotionDetail->update($request->all());

        return response()->json($promotionDetail, 200);
    }

    public function delete(promotionDetail $promotionDetail)
    {
        $promotionDetail->delete();

        return response()->json(null, 204);
    }
}
