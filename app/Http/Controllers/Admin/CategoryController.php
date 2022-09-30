<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
class CategoryController extends Controller
{
  
    public function index()
    {
    //     $http =new \GuzzleHttp\Client;
    //    $data= $http->get("http://localhost:8000/api/auth/category/1");
    //     $result= json_decode((string)$data->getBody(),true);
//  return Http::dd()->get("http://localhost:8000/api/auth/category");
        // return dd($data);
        // $categories=Category::all();
        // return view('store.category.index',compact('categories'));
    }

  
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        $categories=new Category;
        $categories->name=$request->name;
        $categories->desc=$request->desc;
        $categories->save();

        return redirect()->back()->with('success','Category added successfully!');

    }

  
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
       
    }

   
    public function update(Request $request, $id)
    {
        $categories=Category::find($id);
        $categories->name=$request->name;
        $categories->desc=$request->desc;
        $categories->save(); 
        
        return redirect()->back()->with('success','Category updated successfully!');
    }

   
    public function destroy($id)
    {
        $categories=Category::find($id);
        $categories->delete();

        return redirect()->back()->with('error','Category deleted successfully!');
       
    }
}
