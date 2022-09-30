<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\CategoryResource;
     
class CategoryController extends Controller
{
    public function index()
    {
        // $data=Http::get("http://localhost:8000/api/auth/category/1");
        // return $data->response()->body();
        // return Http::get("http://localhost:8000/api/auth/category");
         $category=Category::all();
        return response()->json([CategoryResource::collection($category),]);
    }

    public function store(Request $request)
    {
      
     $categories=Category::create([
            'name'=> $request->name,
            'desc'=> $request->desc,
            
           ]);

            new CategoryResource($categories);
            return response()->json([
                'message' => 'Successfully created Category!'
            ], 201);


    }

    public function show($id)
    {
       $categories= Category::find($id);
         return new CategoryResource($categories);
    }

    public function update(Request $request,$id)
    {
      
     $categories=Category::find($id)->update([
            'name'=> $request->name,
            'desc'=> $request->desc,
         
           ]); 

            new CategoryResource($categories);
            return response()->json([
                'message' => 'Successfully Updated an Category!'
            ], 201);
    }

    
    public function destroy($id)
    {
     $categories=Category::find($id)->delete();
        return response(null,204);
    }
    
}
