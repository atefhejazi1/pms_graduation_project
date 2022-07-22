<?php

namespace App\Http\Controllers;

use App\Models\partner;
use App\Http\Requests\StorepartnerRequest;
use App\Http\Requests\UpdatepartnerRequest;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = partner::paginate(10);

        return view('partners.allPartners', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.addPartner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->partnerPhoto->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        $path = 'images/partners';

        $request->partnerPhoto->move($path, $file_name);

        $partner = new partner();
        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->partnerPhoto = $file_name;
        $partner->save();

        return redirect('partner/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = partner::where('id', $id)->first();
        return view('partners.editPartner', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepartnerRequest  $request
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $partner = partner::find($request->partner_id);

        $file_extension  = '';
        $file_name  = '';

        if ($request->partnerPhoto) {
            $file_extension = $request->partnerPhoto->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/partners';

            $request->partnerPhoto->move($path, $file_name);
        }


        $partner->name = $request->name;
        $partner->description = $request->description;
        $partner->partnerPhoto = $file_name;
        $partner->save();

        return redirect('partner/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = partner::find($id);

        $partner->delete();

        return redirect('partner/all');
    }
}
