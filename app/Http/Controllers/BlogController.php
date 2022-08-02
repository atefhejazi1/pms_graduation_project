<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;
use App\Models\department;
use App\Models\service;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:blogs-list|blogs-all', ['only' => ['index']]);
        $this->middleware('permission:blogs-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:blogs-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:blogs-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);

        return view('blogs.allBlogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = department::all();
        return view('blogs.addBlog', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreblogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->blogPhoto->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        $path = 'images/blogs';

        $request->blogPhoto->move($path, $file_name);

        $blog = new Blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->blogPhoto = $file_name;
        $blog->id_dept = $request->id_dept;

        $blog->save();

        return redirect('blog/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blog::where('id', $id)->first();
        $departments = department::all();
        $services = service::all();
        $blogs = blog::all();
        return view('blogs.singleBlog', compact('blog', 'departments','services' , 'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::where('id', $id)->first();
        $departments = department::all();
        return view('blogs.editBlog', compact('blog', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogRequest  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = blog::find($request->blog_id);

        $file_extension  = '';
        $file_name  = '';

        if ($request->blogPhoto) {
            $file_extension = $request->blogPhoto->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
            $path = 'images/blogs';

            $request->blogPhoto->move($path, $file_name);
        }


        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->blogPhoto = $file_name;
        $blog->id_dept = $request->id_dept;
        $blog->save();

        return redirect('blog/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blog::find($id);

        $blog->delete();

        return redirect('blog/all');
    }
}
