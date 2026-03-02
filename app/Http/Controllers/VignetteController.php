<?php

namespace App\Http\Controllers;

use App\Http\Requests\VignetteRequest;
use App\Models\Vignette;
use Illuminate\Http\Request;

class VignetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "vignettes" => Vignette::with("vehicles")->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VignetteRequest $request, Vignette $vignette)
    {
        $vignette->fill($request->all());
        $vignette->save();

        return response()->json([
            "message" => "Vignette created successfully",
            "vignette" => $vignette
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vignette $vignette)
    {
        return response()->json([
            "vignette" => $vignette
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VignetteRequest $request, Vignette $vignette)
    {
        $vignette->update($request->all());

        return response()->json([
            "message" => "Vignette updated successfully",
            "vignette" => $vignette
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vignette $vignette)
    {
        $vignette->delete();
        return response()->json([
            "message" => "Vignette deleted successfully"
        ]);
    }
}
