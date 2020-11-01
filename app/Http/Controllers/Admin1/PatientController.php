<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Department;

class PatientController extends Controller
{
    public function index(Request $request)
    {
    	$data = Patient::paginate(6);
    	
    	return view('dash.patient.index',compact('data'));

    }

    public function show($id)
       {
           $patient =Patient::find($id);
           return view('dash.patient.show', compact('patient'));
       }

    public function create()
    {
    	$data=Department::get();
    	return view('dash.patient.create',compact('data'));
    }
	public function store(Request $request)
	{
		$message="Patient Created Successfully";


		Patient::create([
    		'name'=>$request->name,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'department_id'=>$request->department_id
    
    	]);

		$this->validate($request,[
			'name'=>'required',
			'phone'=>'required|min:10|max:10',
			'dob'=>'date_format:Y-m-d|before:today'
		]);
		
         return redirect()->route('admin1.patient')->with('status',$message);

	}

	public function edit($id)
	{	
		$data=Patient::find($id);
		$department=department::get();
		return view('dash.patient.edit',compact('data','department'));
	}

	public function update(Request $request,$id)
	{	 $message="Patient Updated Successfully";


		$this->validate($request,[
			'name'=>'required',
			'phone'=>'required|min:10|max:10',
			'dob'=>'date_format:Y-m-d|before:today'
		]);
		
		Patient::find($id)->update([
			'name'=>$request->name,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'department_id'=>$request->department_id
		]);

		return redirect()->route('admin1.patient')->with('status',$message);
	}

	public function destroy($id)
	{	$message="Patient Delete Successfully";
		$data=Patient::find($id);
		$data->delete();

		return redirect()->route('admin1.patient')->with('status',$message);
	}
}
