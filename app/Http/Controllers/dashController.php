<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\department;
use App\Models\offer;
use App\Models\service;
use Illuminate\Http\Request;

class dashController extends Controller
{
    public function getNumberOfRows()
    {
        $departmentsRows = count(Department::get());
        $departments = Department::paginate(3);
        $blogsRows = count(blog::get());
        $servicesRows = count(service::get());
        $offersRows = count(offer::get());

        return view('dashboard',
            compact('departmentsRows', 'blogsRows', 'servicesRows', 'offersRows' , 'departments'));
    }
}
