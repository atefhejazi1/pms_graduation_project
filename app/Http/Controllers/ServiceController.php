<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Http\Requests\StoreserviceRequest;
use App\Http\Requests\UpdateserviceRequest;
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
        $services = Service::paginate(10);

        return view('services.allServices', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = service::all();
        return view('services.addService', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreserviceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension  = '';
        $file_name  = '';

        if ($request->servicePhoto) {
            $file_extension = $request->servicePhoto->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;

            $path = 'images/services';

            $request->servicePhoto->move($path, $file_name);
        }

        $service = new service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->servicePhoto = $file_name;

        $service->save();

        return redirect('service/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = service::where('id', $id)->first();
        return view('services.editService', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceRequest  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $service = service::find($request->service_id);

        $file_extension  = '';
        $file_name  = '';

        if ($request->servicePhoto) {
            $file_extension = $request->servicePhoto->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/services';

            $request->servicePhoto->move($path, $file_name);
        }


        $service->name = $request->name;
        $service->description = $request->description;
        $service->servicePhoto = $file_name;
        $service->save();

        return redirect('service/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::find($id);

        $service->delete();

        return redirect('service/all');
    }
}
