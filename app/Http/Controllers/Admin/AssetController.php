<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Asset;
use App\Models\Brand;
use App\Models\Staff;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\IssuedAsset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorHTML;

class AssetController extends Controller
{
   
    public function index()
    {
        $assets=Asset::all();
        $brands=Brand::all();
        $categories=Category::all();
        $vendors=Vendor::all();
        $users=User::all();
        return view('store.assets.index',compact('assets','brands','categories','vendors','users'));
    }

   
    public function store(Request $request)
    {
        $assets=new Asset();
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move ('back/assets/images',$filename);
            $assets->image=$filename;

             
                // $folderPath = "back/assets/images";
                
                // $base64Image = explode(";base64,", $request->image);
                // $explodeImage = explode("image/", $base64Image[0]);
                // $imageType = $explodeImage[1];
                // $image_base64 = base64_decode($base64Image[1]);
                // $file = $folderPath . uniqid() . '. '.$image_base64;
                // $filename= file_put_contents($file, $image_base64);
                // $assets->image=  $filename;
    
            
           
        }
        $asset_code=rand('106890124','100000000');
        $redcolor='255,0,0';
        $generator=new BarcodeGeneratorHTML();
        $barcodes=$generator->getBarcode($asset_code, 
        $generator::TYPE_STANDARD_2_5, 2, 60);

        // $assets->image = $img_url;
        $assets->name=$request->name;
        $assets->cate_id=$request->cate_id;
        $assets->vendor_id=$request->vendor_id;
        $assets->brand_id=$request->brand_id;
        $assets->user_id=$request->user_id;
        $assets->asset_code=$asset_code;
        $assets->status=$request->status;
        $assets->flug=$request->input('flug')==true?'1':'0';
        $assets->barcodes= $barcodes;
        $assets->save();
        return redirect()->back()->with ('success',"Asset added successfully!");
    }

    public function show($id)
    {
        $assets=Asset::find($id);
        $staffs = Staff::join('issued_assets','issued_assets.staff_id' , '=', 'staffs.id')
              ->where('issued_assets.assets_id',$id)
              ->where('issued_assets.status',1)
              ->get(['staffs.fname',]);
         $lastassigned = Staff::join('issued_assets','issued_assets.staff_id' , '=', 'staffs.id')
              ->where('issued_assets.assets_id',$id)
              ->where('issued_assets.status',0)
            //   ->latest('issued_assets.created_at')
              ->get(['staffs.fname','issued_assets.id','issued_assets.created_at','staffs.lname','issued_assets.updated_at']);
            // return  $lastassigned;
        return view('store.assets.view',compact('assets','staffs','lastassigned'));
    }

    public function tracking()
    {
        $assets=Asset::find($id);
        $lastassigned = Staff::join('issued_assets','issued_assets.staff_id' , '=', 'staffs.id')
              ->where('issued_assets.assets_id',$id)
              ->where('issued_assets.status',0)
              ->latest('issued_assets.created_at')
              ->get(['staffs.fname','issued_assets.id']);
        return view('store.assets.view',compact('assets','lastassigned'));
    }

    public function update(Request $request, $id)
    {
        $assets=Asset::find($id);
        // if($request->hasFile('image'))
        // {
        //     $file=$request->file('image');
        //     $ext=$file->getClientOriginalExtension();
        //     $filename=time().'.'.$ext;
        //     $file->move ('back/assets/images',$filename);
        //     $assets->image=$filename;
        // }

        if ($request->image) {
            $folderPath = "back/assets/images";
            
            $base64Image = explode(";base64,", $request->image);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $file = $folderPath . uniqid() . '. '.$image_base64;
           $filename= file_put_contents($file, $image_base64);
            $assets->image=  $filename;

        }

        $asset_code=rand('106890124','100000000');
        $redcolor='255,0,0';
        $generator=new BarcodeGeneratorHTML();
        $barcodes=$generator->getBarcode($asset_code, 
        $generator::TYPE_STANDARD_2_5, 2, 60);

        $assets->name=$request->name;
        // $assets->cate_id=$request->cate_id;
        // $assets->vendor_id=$request->vendor_id;
        // $assets->brand_id=$request->brand_id;
        // $assets->user_id=$request->user_id;
        $assets->staff_id=$request->staff_id;
        $assets->asset_code=$asset_code;
        $assets->status=$request->status;
        $assets->flug=$request->input('flug')==true?'1':'0';
        $assets->barcodes= $barcodes;
        $assets->update();
        return redirect()->back()->with ('success',"Asset updated successfully!");
    }

   
    public function destroy($id)
    {
        $assets=Asset::find($id);
        $assets->delete();
        return redirect()->back()->with('error',"Asset has been deleted successfully!");
    }

    public function assignview($id)
    {
        $assets=Asset::find($id);
      $staffs=Staff::all(); 
     return view('store.assets.assign',compact('staffs','assets'));  
    }

    public function assetAssign(Request $request,$id)
    {
        $modelAss=new IssuedAsset();
         $asset=Asset::find($id);
        // var_dump($id);
        $modelAss->staff_id=$request->staff_id;
        $modelAss->assets_id= $id;
        $modelAss->status= 1;
        $modelAss->save();

        $asset->staff_id = $request->staff_id;
        $asset->update();
        return redirect('/assets-list')->with('success','Asset Assigned successfully!');
    }

    public function assetunAssign($id)
    {
        $asset=Asset::find($id);
        $issued=IssuedAsset::where('assets_id',$id)->update(['status' => 0]);
        // $issued->status=0;
        // $issued->update();
        $asset->staff_id = NULL;
        $asset->update();
        return redirect('/assets-list')->with('error','Asset Unassigned successfully!');
    }
}
