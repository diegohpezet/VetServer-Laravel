<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = Pets::all();
        return response()->json($pets);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pet = new Pets;
        $pet->name = $request->name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->color = $request->color;
        $pet->weight = $request->weight;
        $pet->gender = $request->gender;
        $pet->owner_id = $request->owner_id;

        $pet->save();
        return response()->json($pet);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = Pets::find($id);

        if (!$pet) {
            return response()->json(['error' => 'Pet not found'], 404);
        }

        return response()->json($pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = Pets::find($id);

        if (!$pet) {
            return response()->json(['error' => 'Pet not found'], 404);
        }

        $pet->name = $request->name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->age = $request->age;
        $pet->color = $request->color;
        $pet->weight = $request->weight;
        $pet->gender = $request->gender;

        $pet->save();
        return response()->json($pet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pet = Pets::find($id);

        if (!$pet) {
            return response()->json(['error' => 'Pet not found'], 404);
        }

        $pet->delete();
        return response()->json(['message' => 'Pet deleted successfully']);
    }
}
