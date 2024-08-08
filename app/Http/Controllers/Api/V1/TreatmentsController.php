<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Treatments;
use Illuminate\Http\Request;

class TreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $treatments = Treatments::all();
        return response()->json($treatments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $treatment = new Treatments;
        $treatment->pet_id = $request->pet_id;
        $treatment->treatment_name = $request->treatment_name;
        $treatment->treatment_start_date = $request->treatment_start_date;
        $treatment->description = $request->description;
        $treatment->status = $request->status;

        $treatment->save();
        return response()->json($treatment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $treatment = Treatments::find($id);

        if (!$treatment) {
            return response()->json(['error' => 'Treatment not found'], 404);
        }

        return response()->json($treatment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $treatment = Treatments::find($id);

        if (!$treatment) {
            return response()->json(['error' => 'Treatment not found'], 404);
        }

        $treatment->pet_id = $request->pet_id;
        $treatment->treatment_name = $request->treatment_name;
        $treatment->treatment_start_date = $request->treatment_start_date;
        $treatment->description = $request->description;
        $treatment->status = $request->status;

        $treatment->save();
        return response()->json($treatment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $treatment = Treatments::find($id);

        if (!$treatment) {
            return response()->json(['error' => 'Treatment not found'], 404);
        }

        $treatment->delete();
        return response()->json(['message' => 'Treatment deleted successfully']);
    }
}
