<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'tomb_id' => 'required',
            'description' => 'required',
            'model' => 'required',
            'manufacturer' => 'required',
        ]);

        Equipment::create([
            'name' => $request->name,
            'support_id' => Auth::user()->id,
            'tomb_id' => $request->tomb_id,
            'description' => $request->description,
            'model' => $request->model,
            'manufacturer' => $request->manufacturer,
            'status' => 0,
        ]);

        return redirect('dashboard/support');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
        return view('equipment_detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
        return view('update_equipment',['equipment'=>$equipment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //Requests

        //Validations 
        $equipment->update([
            'name' => $request->name,
            'support_id' => Auth::user()->id,
            'tomb_id' => $request->tomb_id,
            'description' => $request->description,
            'model' => $request->model,
            'manufacturer' => $request->manufacturer,
        ]);

        $msg = "Equipamento alterado com sucesso!";

        return view('equipments_list',['msg'=>$msg]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        $teste = Service::where('equipment_id', $equipment)->get();

        $equipment->delete();
        return view('equipments_list');
    }
}
