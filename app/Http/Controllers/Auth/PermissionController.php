<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
  
            $permissions=Permission::all();
            return view('auth.permissions.index',compact('permissions'));
        
    }

    public function create()
    {
        
        return view('auth.permissions.create');

    }

    public function store(request $request)
    {
            $permission = Permission::create(['name' => $request->name,'description'=>$request->description]);
            return redirect('/permissions-list')->with('success',"Permission Created successfully!");
    }

    
    public function edit($id)
    {
        $permissions=Permission::find($id);
    return view('auth.permissions.edit',compact('permissions'));
    }
    public function update(Request $request, $id)
    {
        
        $permission = Permission::find($id);
        $permission->update(['name' => $request->name,'description'=>$request->description]);
 
        return redirect('/permissions-list')->with('success',"Permission Updated successfully!");
    }

    public function destroy($id)
    {
    Permission::find($id)->delete();
    return redirect()->back()
    ->with('success','Permission deleted successfully');
    }
}
