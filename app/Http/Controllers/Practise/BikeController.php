<?php

namespace App\Http\Controllers\Practise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bike;
class BikeController extends Controller
{

    public function index()
    {
    	$data=Bike::paginate(10);
    	return view('practise.bike.index',compact('data'));
    }
  
}
