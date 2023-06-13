<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use Carbon\Carbon;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::latest()->paginate(6);
        $currentTime = Carbon::now()->subDays(1);
        // $expiredMedicines = Medicine::whereDate('date_of_expiration' , '<' , $currentTime->addDays(1))->get();
        // dd($clientsToNotif);
        return view('pages.admin.medicine.index', compact('medicines', 'currentTime'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function preview()
    {
        $medicines = Medicine::latest()->get();
        $currentTime = Carbon::now()->subDays(1);
        // $expiredMedicines = Medicine::whereDate('date_of_expiration' , '<' , $currentTime->addDays(1))->get();
        // dd($clientsToNotif);
        return view('pages.admin.medicine.medicine-preview', compact('medicines', 'currentTime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedicineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicineRequest $request)
    {
        //
        $formFields = $request->validate([
            'medicine_name' => 'required|unique:medicines',
            'medicine_quantity' => ['required'],
            'medicine_cost' => 'required',
            'date_of_acquisition' => 'required',
            'date_of_expiration' => 'required',
        ]);
         Medicine::create($formFields);

        return redirect('/medicine')->with('success-message', 'Medicine Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicineRequest  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        //
          $formFields = $request->validate([
            'medicine_name' => 'required',
            'medicine_quantity' => ['required'],
            'medicine_cost' => 'required',
            'date_of_acquisition' => 'required',
            'date_of_expiration' => 'required',
        ]);

        $medicine->update($formFields);

        return redirect('/medicine')->with('success-message', 'Medicine Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
             $medicine->delete();
        return redirect('/medicine')->with('danger-message', 'Deleted Successfully');
    }
}
