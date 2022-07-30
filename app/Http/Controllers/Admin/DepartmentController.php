<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments=Department::all();
        return view('store.departments.index',compact('departments'));
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
