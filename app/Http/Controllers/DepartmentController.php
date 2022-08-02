<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:departments-list|departments-all', ['only' => ['index']]);
        $this->middleware('permission:departments-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:departments-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:departments-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::paginate(10);

        return view('departments.allDepartments', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.addDepartment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:departments|max:70',
            'description' => 'required',
        ], [
            "name.required" => "The Department Name is Required.",
            "name.unique" => "The Department Name Must Be Non repeated.",
            "name.unique" => "The Department Name Must Be Less Than 70 Letter.",
            "description.required" => "The Department Description is Required.",
        ]);




        $department = new  Department;
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();

        return redirect('department/all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::where('id', $id)->first();

        return view('departments.editDepartment', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedepartmentRequest  $request
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:departments|max:70',
            'description' => 'required',
        ], [
            "name.required" => "The Department Name is Required.",
            "name.unique" => "Department Name Already Added.",
            "name.unique" => "The Department Name Must Be Less Than 70 Letter.",
            "description.required" => "The Department Description is Required.",
        ]);


        $department = Department::find($request->dept_id);

        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();

        return redirect('department/all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);

        $department->delete();

        return redirect('department/all');
    }
}
