<?php

namespace App\Http\Controllers\Admin;

// use Barryvdh\DomPDF\PDF;
use PDF;
use App\Models\Department;
use App\Models\IssuedAsset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments=Department::all();
        return view('store.departments.index',compact('departments'));
    }

    public function show($id)
    {
        $depart=Department::find($id);
    $department=IssuedAsset::join('departments','departments.id','=','issued_assets.depart_id')
                                     ->join('users','departments.id','=','users.depart_id')
                                   -> where('issued_assets.depart_id',$id)
                                   -> where('issued_assets.status',1)
                                   ->count();
    $issued=IssuedAsset::with('user')->with('asset')->where('depart_id',$id)->where('status',1)->get();
       return view('store.departments.view',compact('depart','issued'));
    }
   
    public function downloadPDF()
    {
        $departments=Department::all();
        return $pdf->download('departments.pdf');  
    }
    public function store(Request $request)
    {
        $departments = Department::create($request->all());
         return redirect()->back()->with('success','Department added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $departments=Department::find($id)->update($request->all());
        return redirect()->back()->with('success','Department updated successfully!');
    }

    public function destroy($id)
    {
        $departments=Department::find($id);
        $departments->delete();
        return redirect()->back()->with('error','Department deleted successfully!');
       
    }
}
