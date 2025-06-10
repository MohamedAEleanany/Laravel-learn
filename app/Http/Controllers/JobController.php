<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
   function index()
   {
    $jobarray = Job::all();
    return view('job/index' ,["JobData" => $jobarray]);
   }
}
