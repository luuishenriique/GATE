<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $services = DB::select('select * from services where user_id = :id order by :item' , ['id' => Auth::user()->id] ['item'] => );

        // return view('dashboard', ['services' => $services]);
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
            'equipment_id' => 'required',
            'status_id' => 'required',
            'description' => 'required ',
        ]);

        Service::create([
            'equipment_id' => $request->equipment_id,
            'user_id' => Auth::user()->id,
            'status_id' => $request->status_id,
            'description' => $request->description,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return view('service_detail',['service'=>$service]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function close(Service $service)
    {
        //
        // return view('close_service',['service'=>$service]);
        $service->update([
            'status_id' => 3,
        ]);

        return view('support');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function showAttend(Service $service)
    {
        //
        return view('attend_service',['service'=>$service]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function newAttend(Service $service)
    {
        //
        return view('new_attend',['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //  
        return view('update',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->update([
            'equipment_id' => $request->equipment_id,
            'description' => $request->description,
        ]);

        if (Auth::user()->is_support == 0) {
            return view('dashboard');
        } else {
            return view('support');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        if (Auth::user()->is_support == 0) {
            return view('dashboard');
        } else {
            return view('support');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function attend(Service $service)
    {
        // dd("pesquisando por " . $request->input);

        // $search = Service::where('description', 'LIKE', '%' . $request->input . '%')->get();

        // return view('support',['search', $search]);

        $service->update([
            'support_id' => Auth::user()->id,
            'status_id' => 2,
        ]);

        return view('support');
    }
}
