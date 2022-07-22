<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\brands;
use App\Models\contact;
use App\Models\department;
use App\Models\offer;
use App\Models\partner;
use App\Models\service;
use App\Models\User;
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
        $usersRows = count(User::get());
        $contactRows = count(contact::get());
        $brandsRows = count(brands::get());
        $partnersRows = count(partner::get());

        return view(
            'dashboard',
            compact(
                'departmentsRows',
                'blogsRows',
                'servicesRows',
                'offersRows',
                'departments',
                'usersRows',
                'contactRows',
                'brandsRows',
                'partnersRows'
            )
        );
    }
}
