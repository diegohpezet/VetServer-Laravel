<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Owners;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owners::all();
        return response()->json($owners);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $owner = new Owners;

        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->phone = $request->phone;
        $owner->address_city = $request->address_city;
        $owner->address_street = $request->address_street;
        $owner->address_number = $request->address_number;

        $owner->save();
        return response()->json($owner);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owner = Owners::find($id);

        if (!$owner) {
            return response()->json(['error' => 'Owner not found'], 404);
        }

        return response()->json($owner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner = Owners::find($id);

        if (!$owner) {
            return response()->json(['error' => 'Owner not found'], 404);
        }

        $owner->name = $request->name;
        $owner->email = $request->email;
        $owner->phone = $request->phone;
        $owner->address_city = $request->address_city;
        $owner->address_street = $request->address_street;
        $owner->address_number = $request->address_number;

        $owner->save();
        return response()->json($owner);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $owner = Owners::find($id);

        if (!$owner) {
            return response()->json(['error' => 'Owner not found'], 404);
        }

        $owner->delete();
        return response()->json(['message' => 'Owner deleted successfully']);
    }
}
