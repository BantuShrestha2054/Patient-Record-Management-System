<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product ;
use App\ProductCategory;
class ProductController extends Controller
{
      public function index(){
    	$data = Product::paginate(5);  //get()
 
    	return view('dashboard.products.index',compact('data'));
    } 

     public function create()
    {	$data=ProductCategory::get();
    	return view('dashboard.products.create',compact('data'));

    }
    public function edit($id){
        $data =Product::find($id);
        $category=ProductCategory::get();


    	return view('dashboard.products.edit',compact('data','category'));
    }

    public function store(Request $request){
        $image='';
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $image='images/'.$name;
        }
        Product::create([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('admin.products');
    }

    public function update(Request $request, $id)
    {
        $image=$request->image_url;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $name=$file->getClientOriginalName();
            $file->move('images',$name);
            $image='images/'.$name;
        }

         Product::find($id)->update([
            'name'=>$request->name,
            'image'=>$image,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'category_id'=>$request->category_id
            
        ]);
        return redirect()->route('admin.products');

    }
    public function destroy($id)
    {
        $data = Product::find($id);

        $data->delete();

            
        
        return redirect()->route('admin.products');        

    }
}
