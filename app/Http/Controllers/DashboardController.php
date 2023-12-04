<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
//        return view("tables-datatable");
        return view("admin.dashboard");
    }
}
