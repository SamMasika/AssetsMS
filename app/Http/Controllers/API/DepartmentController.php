<?php

namespace App\Http\Controllers\API;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentResource;

class DepartmentController extends Controller
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
       if(Department::where('id',$id)->exists()){
           return new DepartmentResource($departments);
       } else{
        return response()->json([
            'message' => 'Department not Found!'
        ], 404);
       }
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
