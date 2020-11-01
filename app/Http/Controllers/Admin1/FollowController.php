<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Follow;
use App\Patient;
class FollowController extends Controller
{
    public function index()
    {
    	$data=Follow::paginate(5);
    	return view('dash.follow.index',compact('data'));
    }
    public function create()
    {
        $data= Patient::get();
    	return view('dash.follow.create',compact('data'));
    }
    public function store(Request $request)
    {
        $message="Follow up Created Successfully";
        $this->validate($request,[
            
            'date'=>'date_format:Y-m-d|after:today',
            
        ]);
        
    	Follow::create([
    		'date'=>$request->date,
    		'patient_id'=>$request->patient_id

    	]);
        return redirect()->route('admin1.follow')->with('status',$message);
    }
    public function edit($id)
    {
        $data=Follow::find($id);
        $patient=Patient::get();
        return view('dash.follow.edit',compact('data','patient'));

    }
    public function update(Request $request,$id)
    {
        $message="Follow up Updated Successfully";
         $this->validate($request,[
            
            'date'=>'date_format:Y-m-d|after:today'

        ]);
        Follow::find($id)->update([
        'date'=>$request->date,
        'patient_id'=>$request->patient_id
        ]);
        return redirect()->route('admin1.follow')->with('status',$message);

    }

    public function destroy($id)
    {
        $message="Follow up Deleted Successfully";
        $data=Follow::find($id);
        $data->delete();
        return redirect()->route('admin1.follow')->with('status',$message);
    }

}