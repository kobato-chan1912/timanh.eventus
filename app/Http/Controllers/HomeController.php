<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $jobs = Job::where("is_on_timanh", 1)->get();
        $showImage = false;
        return view("homepage.index", compact('jobs', 'showImage'));
    }
}
