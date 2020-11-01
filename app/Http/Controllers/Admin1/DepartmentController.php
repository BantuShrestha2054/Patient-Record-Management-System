<?php

namespace App\Http\Controllers\Admin1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department ;
use App\Patient;
class DepartmentController extends Controller
{
    public function index(){
    	$data = Department::paginate(6);  //get()
 
    	return view('dash.department.index',compact('data'));
    } 

    public function create()
    {
    	return view('dash.department.create');
    }
    public function store(Request $request )
    {    $message="Department Created Successfully";
    	Department::create([
    		'name'=>$request->name,
            'description'=>$request->description
    	]);
         return redirect()->route('admin1.department')->with('status',$message);
    }

    public function edit($id)
    {
        $data=Department::find($id);
        return view('dash.department.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {    $message="Department Updated Successfully";
        Department::find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description
        
    ]);
    
        return redirect()->route('admin1.department')->with('status',$message);
    }
    public function destroy($id)
    {   
        
        $message="Department already used.";
        if (!Patient::where('department_id',$id)->exists())
         {
        $data=Department::find($id);
        $data->delete();
        $message="Department Successfully deleted";
        }
        return redirect()->route('admin1.department')->with('status',$message);
    }
}

