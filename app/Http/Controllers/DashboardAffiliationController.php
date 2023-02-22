<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAffiliationController extends Controller
{
    public function show(){
        return view('auth.dashboardAffiliation');
    }
}
