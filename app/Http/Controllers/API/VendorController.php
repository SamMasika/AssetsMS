<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
         $data=Department::all();
        return response()->json([DepartmentResource::collection($data),]);
    }

    public function store(Request $request)
    {
      
      $departments=Department::create([
            'name'=> $request->name,
            
           ]);

            new DepartmentResource($departments);
            return response()->json([
                'message' => 'Successfully created Department!'
            ], 201);


    }

    public function show($id)
    {
        $departments= Department::find($id);
        return new DepartmentResource($departments);
    }

    public function update(Request $request,$id)
    {
      
      $departments=Department::find($id)->update([
            'name'=> $request->name,
         
           ]); 

            new DepartmentResource($departments);
            return response()->json([
                'message' => 'Successfully Updated an Department!'
            ], 201);
    }

    
    public function destroy($id)
    {
      $departments=Department::find($id)->delete();
        return response(null,204);
    }
}
