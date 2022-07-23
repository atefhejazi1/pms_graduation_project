<?php

namespace App\Http\Controllers;

use App\Models\brands;
use App\Http\Requests\StorebrandsRequest;
use App\Http\Requests\UpdatebrandsRequest;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::paginate(10);

        return view('brands.AllBrands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brands.AddBrand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:brands|max:70',
            'description' => 'required',
        ], [
            "name.required" => "The Company Brand Name is Required.",
            "name.unique" => "The Company Brand Name Must Be Non repeated.",
            "description.required" => "The Company Brand Description is Required.",
        ]);

        $brands = new  brands;
        $brands->name = $request->name;
        $brands->description = $request->description;
        $brands->save();

        return redirect('brand/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show(brands $brands)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = brands::where('id', $id)->first();

        return view('brands.editBrand', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebrandsRequest  $request
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:70',
            'description' => 'required',
        ], [
            "name.required" => "The Company Brand Name is Required.",
            "name.unique" => "The Company Brand Name Must Be Non repeated.",
            "description.required" => "The Company Brand Description is Required.",
        ]);


        $brand = brands::find($request->dept_id);

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->save();

        return redirect('brand/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = brands::find($id);

        $brand->delete();

        return redirect('brand/all');
    }
}
