<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialityRequest;
use App\ImageUpload;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::latest()->get();

        return view('admin.specialities',compact('specialities'));

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
    public function store(SpecialityRequest $request)
    {

        $speciality = Speciality::create($request->validated());
        $this->storeImg($speciality, $request->file('image'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialityRequest $request)
    {
        $speciality = Speciality::findOrFail($request->validated()['id']);
        $speciality->update($request->validated());
        $this->updateImg($speciality, $request->file('image'));
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        $speciality->delete();
        return redirect()->back();
    }
}
