<?php

namespace App\Http\Controllers\Admin;

use App\Models\Asset;
use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $staffs=Staff::all();
        $departments=Department::all();
        $assets=Asset::all();
        return view('store.staffs.index',compact('staffs','departments','assets'));
    }
   
    public function store(Request $request)
    {
        $staffs = Staff::create($request->all());
        return redirect()->back()->with('success','Staff added successfully!');
    }
        
    public function update(Request $request, $id)
    {
        $staffs=Staff::find($id)->update($request->all());
        // $staffs->fname=$request->fname;
        // $staffs->lname=$request->lname;
        // $staffs->email=$request->email;
        // $staffs->phone=$request->phone;
        // $staffs->depart_id=$request->depart_id;
        // $staffs->save(); 
        
        return redirect()->back()->with('success','Staff updated successfully!');
    }
        

                        
                            
                        
   

// public function assignview($id)
//     {
//         $staffs=Staff::find($id);
//       $assets=Asset::all(); 
//      return view('store.staffs.assign',compact('staffs','assets'));  
//     }
     

    // public function checkstaff($id)
    // {
    //    return $staffs=Staff::select('staffs.assets_id')
    //     ->exists();
    // }

    public function destroy($id)
    {
        $staffs=Staff::find($id);
        $staffs->delete();

        return redirect()->back()->with('error','Staff deleted successfully!');
       
    }     

   
}
