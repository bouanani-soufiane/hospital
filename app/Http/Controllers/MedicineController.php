<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequest;
use App\ImageUpload;
use App\Models\Medicine;
use App\Models\Speciality;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::latest()->get();
        $specialities = Speciality::latest()->get();

        return view('admin.medicines',compact('medicines','specialities'));

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
    public function store(MedicineRequest $request)
    {

        $medicine = Medicine::create($request->validated());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicineRequest $request)
    {
//        dd($request);

        Medicine::where('id', $request->validated()['id'])
            ->update([
                'name' => $request->validated()['name'],
                'speciality_id' => $request->validated()['speciality_id']
            ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->back();
    }
}
