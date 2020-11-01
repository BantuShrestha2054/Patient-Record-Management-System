<?php

namespace App\Http\Controllers\Practise;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PractiseController extends Controller
{
    public function index()
    {
    	return view('practise.index');
    }
}
