<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultationRequest;
use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\consultation_medicine;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(ConsultationRequest $request)
    {
//        dd($request->validated());
        $consultation = Consultation::create($request->validated());
        foreach($request->medicine_id as $medicine){
            $consultation_medicines = new consultation_medicine();
            $consultation_medicines->consultation_id = $consultation->id;
            $consultation_medicines->medicine_id = $medicine;
            $consultation_medicines->save();
        }

        $appointment = Appointment::findOrFail($request->appointment_id);
        $appointment->isConsulted = 1;
        $appointment->save();
        return redirect()->back()->with('Consultation_success','Successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
