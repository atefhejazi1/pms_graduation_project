<?php

namespace App\Http\Controllers;

use App\Models\offer;
use App\Http\Requests\StoreofferRequest;
use App\Http\Requests\UpdateofferRequest;
use Illuminate\Http\Request;

class OfferController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:offers-list|offers-all', ['only' => ['index']]);
        $this->middleware('permission:offers-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:offers-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:offers-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = offer::paginate(10);

        return view('offers.allOffers', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offers.addOffer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreofferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = new  offer;
        $offer->name = $request->name;
        $offer->description = $request->description;
        $offer->save();

        return redirect('offer/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = offer::where('id', $id)->first();

        return view('offers.editOffer', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateofferRequest  $request
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $offer = offer::find($request->offer_id);

        $offer->name = $request->name;
        $offer->description = $request->description;
        $offer->save();

        return redirect('offer/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = offer::find($id);

        $offer->delete();

        return redirect('offer/all');
    }
}
