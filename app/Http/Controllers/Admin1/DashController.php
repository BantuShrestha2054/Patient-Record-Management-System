<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
      
    public function index()
    {
    	return view('dash.index');
    }
}
