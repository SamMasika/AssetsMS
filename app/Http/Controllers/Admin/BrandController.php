<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brands=Brand::all();
        return view('store.brand.index',compact('brands'));
    }
   
    public function store(Request $request)
    {
        $brands=new Brand;
        $brands->name=$request->name;
        $brands->save();

        return redirect()->back()->with('success','Brand added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $brands=Brand::find($id);
        $brands->name=$request->name;
        $brands->save(); 
        
        return redirect()->back()->with('success','Brand updated successfully!');
    }

    public function destroy($id)
    {
        $brands=Brand::find($id);
        $brands->delete();

        return redirect()->back()->with('error','Brand deleted successfully!');
       
    }
}
