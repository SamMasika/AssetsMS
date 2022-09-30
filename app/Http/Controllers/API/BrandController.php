<?php

namespace App\Http\Controllers\API;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;

class BrandController extends Controller
{
    public function index()
    {
         $brand=Brand::all();
        return response()->json([BrandResource::collection($brand),]);
    }

    public function store(Request $request)
    {
      
     $brand=Brand::create([
            'name'=> $request->name,
            'desc'=> $request->desc,
           ]);

            new BrandResource($brand);
            return response()->json([
                'message' => 'Successfully created Brand!'
            ], 201);
    }

    public function show($id)
    {
        if( $brand= Brand::where('id',$id)->exists()){

            return new BrandResource($brand);
        }else{
            return response()->json(['message'=>'Brand not found'],404);
        }
    }

    public function update(Request $request,$id)
    {
      
     $brand=Brand::find($id)->update([
            'name'=> $request->name,
            'desc'=> $request->desc,
         
           ]); 

            new BrandResource($brand);
            return response()->json([
                'message' => 'Successfully Updated an Brand!'
            ], 201);
    }

    
    public function destroy($id)
    {
     $brand=Brand::find($id)->delete();
        return response(null,204);
    }
}
