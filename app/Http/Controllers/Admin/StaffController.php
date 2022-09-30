<?php

namespace App\Http\Controllers\Admin;

use App\Models\Info;
use App\Models\Asset;
use App\Models\Staff;
use App\Models\Department;
use App\Models\IssuedAsset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        $staffs=Staff::all();
        $departments=Department::all();
        $assets=Asset::all();
         $stafAs=IssuedAsset::with('staff')->with('asset')->where('status','1')->get();
        return view('store.staffs.index',compact('staffs','departments','assets','stafAs'));
    }
   
    public function store(Request $request)
    {
        $staffs = Staff::create($request->all());
        return redirect()->back()->with('success','Staff added successfully!');
    }
        
    public function update(Request $request, $id)
    {
        $staffs=Staff::find($id)->update($request->all());
        return redirect()->back()->with('success','Staff updated successfully!');
    }
                           

    public function destroy($id)
    {
        $staffs=Staff::find($id);
        $staffs->delete();
        return redirect()->back()->with('error','Staff deleted successfully!');
       
    }    
    
    public function view($id)
    {
        $staffs=Staff::find($id);
       $stafAs = IssuedAsset::select('*')
       ->where('staff_id',$id)
       ->where('status',1)
       ->orderBy('created_at', 'desc')
       ->get()
       ->unique('assets_id');
       $currently = Info::select('*')
       ->where('staff_id',$id)
    //    ->where('status',1)
       ->orderBy('created_at', 'desc')
       ->get()
       ->unique('assets_id');
        $asset=Info::with('staff')->with('asset')
       ->where('staff_id',$id)
       ->get('infos.assets_id');
        return view('store.staffs.details',compact('staffs','stafAs','asset'));
    }

    public function history($id)
    {
        $staffs=Staff::find($id); 
        $history = Info::select('*')
        ->where('staff_id',$id)
        ->orderBy('created_at', 'desc')
        ->get()
        ->unique('assets_id');
        return view('store.staffs.history',compact('history','staffs'));
    }
}
