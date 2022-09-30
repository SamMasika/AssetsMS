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
        $vendors = Vendor::create($request->all());

        return redirect()->back()->with('success','Vendor added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $vendors=Vendor::find($id)->update($request->all());
        return redirect()->back()->with('success','Vendor updated successfully!');
        
    }

    public function destroy($id)
    {
        $vendors=Vendor::find($id);
        $vendors->delete();

        return redirect()->back()->with('error','Vendor deleted successfully!');
       
    }    
}
