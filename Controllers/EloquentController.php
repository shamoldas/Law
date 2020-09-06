<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Customer;

class EloquentController extends Controller
{
    //
    public function Home()
    {
    	$companies = Company::all();
        return view('eloquent.welcome',compact('companies'));
    }
}
