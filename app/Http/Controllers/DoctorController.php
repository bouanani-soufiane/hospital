<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Comment;
use App\Models\Doctor;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('doctor.index');

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        $enumOptions = collect(DB::select("SHOW COLUMNS FROM appointments WHERE Field = 'shift_work'"))
            ->pluck('Type')
            ->first();

        preg_match("/^enum\('(.*)'\)$/", $enumOptions, $matches);

        $enumValues = explode("','", $matches[1]);

        $available_work_shift = Appointment::where('doctor_id', $doctor->id)
            ->pluck('shift_work');

        $comments = Comment::where('doctor_id', $doctor->id)
            ->latest()->get();


        $avg_rate = Rate::where('doctor_id', $doctor->id)
            ->avg('nbr_stars');


        return view('doctor.profile', compact('doctor', 'enumValues','available_work_shift','comments','avg_rate'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
