<?php

namespace App\Http\Controllers;

Use App\promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    //

    public function index()
    {
        return promocion::all();
    }

    public function show(promocion $promocion)
    {
        return $promocion;
    }

    public function store(Request $request)
    {
        $promocion = promocion::create($request->all());

        return response()->json($promocion, 201);
    }

    public function update(Request $request, promocion $promocion)
    {
        $promocion->update($request->all());

        return response()->json($promocion, 200);
    }

    public function delete(promocion $promocion)
    {
        $promocion->delete();

        return response()->json(null, 204);
    }
}
