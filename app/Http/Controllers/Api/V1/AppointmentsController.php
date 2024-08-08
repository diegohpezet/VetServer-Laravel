<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
   /**
    * Display a listing of the resource.
    */
    public function index()
    {
       $appointments = Appointments::all();
       return response()->json($appointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $appointment = new Appointments;

       $appointment->pet_id = $request->pet_id;
       $appointment->appointment_datetime = $request->appointment_datetime;
       $appointment->description = $request->description;
       $appointment->status = $request->status;

       $appointment->save();
       return response()->json($appointment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $appointment = Appointments::find($id);

       if (!$appointment) {
           return response()->json(['error' => 'Appointment not found'], 404);
       }

       return response()->json($appointment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $appointment = Appointments::find($id);

       if (!$appointment) {
           return response()->json(['error' => 'Appointment not found'], 404);
       }

       $appointment->appointment_datetime = $request->appointment_datetime;
       $appointment->description = $request->description;
       $appointment->status = $request->status;

       $appointment->save();
       return response()->json($appointment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $appointment = Appointments::find($id);

       if (!$appointment) {
           return response()->json(['error' => 'Appointment not found'], 404);
       }

       $appointment->delete();
       return response()->json(['message' => 'Appointment deleted successfully']);
    }
}