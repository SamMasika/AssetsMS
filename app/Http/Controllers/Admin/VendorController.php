<?php

namespace App\Http\Controllers\Admin;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index()
    {
        $vendors=Vendor::all();
        return view('store.vendors.index',compact('vendors'));
    }
   
    public function store(Request $request)
    {
        $vendors=new Vendor;
        $vendors->name=$request->name;
        $vendors->email=$request->email;
        $vendors->phone=$request->phone;
        $vendors->save();

        return redirect()->back()->with('success','Vendor added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $vendors=Vendor::find($id);
        $vendors->name=$request->name;
        $vendors->email=$request->email;
        $vendors->phone=$request->phone;
        $vendors->save(); 
        
        return redirect()->back()->with('success','Vendor updated successfully!');
    }

    public function destroy($id)
    {
        $vendors=Vendor::find($id);
        $vendors->delete();

        return redirect()->back()->with('error','Vendor deleted successfully!');
       
    }    
}
