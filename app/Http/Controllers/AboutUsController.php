<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Http\Requests\StoreaboutUsRequest;
use App\Http\Requests\UpdateaboutUsRequest;
use App\Models\blog;
use App\Models\department;
use App\Models\service;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:about-list|about-all', ['only' => ['index']]);
        $this->middleware('permission:about-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:about-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:about-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUsData = aboutUs::paginate(10);

        return view('about.aboutUsData', compact('aboutUsData'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.addAboutUsData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->aboutPhoto->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        $path = 'images/about';

        $request->aboutPhoto->move($path, $file_name);

        $about = new aboutUs();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->aboutPhoto = $file_name;

        $about->save();

        return redirect('about/data');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutUsData = aboutUs::where('id', $id)->first();
        $departments = department::all();
        $services = service::all();
        $blogs = blog::all();
        return view('about.aboutUsPage', compact('aboutUsData', 'departments', 'services', 'blogs'));
    }

    public function edit($id)
    {
        $about = aboutUs::where('id', $id)->first();
        return view('about.editAboutUsData', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutRequest  $request
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $about = aboutUs::find($request->about_id);

        $file_extension  = '';
        $file_name  = '';

        if ($request->aboutPhoto) {
            $file_extension = $request->aboutPhoto->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/about';

            $request->aboutPhoto->move($path, $file_name);
        }


        $about->title = $request->title;
        $about->description = $request->description;
        $about->aboutPhoto = $file_name;
        $about->save();

        return redirect('about/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = aboutUs::find($id);

        $about->delete();

        return redirect('about/data');
    }
}
