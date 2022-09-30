<?php

namespace App\Http\Controllers\API;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AssetResource;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AssetsController extends Controller
{
    public function index()
    {
        $data = Asset::with('user')->with('category')->with('vendor')->latest()->get();
        if($data){

            return response()->json([AssetResource::collection($data),200]);
        }
       
    }

    public function store(Request $request)
    {
        $asset_code=rand('106890124','100000000');
        $barcodes=QrCode::size(100)->generate($asset_code);
        $assets=Asset::create([
            'name'=> $request->name,
            'status'=> $request->status,
            'cate_id'=>$request->cate_id,
            'vendor_id'=>$request->vendor_id,
            'brand_id'=>$request->brand_id,
            'user_id'=>$request->user_id,
            'asset_code'=>$asset_code, 
            'serial_code'=>$request->serial_code,
            'barcodes'=> $barcodes
           ]);

            new AssetResource($assets);
            return response()->json([
                'message' => 'Successfully created an Asset!'
            ], 201);


    }

    public function show($id)
    {
        $assets= Asset::find($id);
        return new AssetResource($assets);
    }
    public function update(Request $request,$id)
    {
        $asset_code=rand('106890124','100000000');
        $barcodes=QrCode::size(100)->generate($asset_code);
        $assets=Asset::find($id)->update([
            'name'=> $request->name,
            'status'=> $request->status,
            'cate_id'=>$request->cate_id,
            'vendor_id'=>$request->vendor_id,
            'brand_id'=>$request->brand_id,
            'user_id'=>$request->user_id,
            'asset_code'=>$asset_code, 
            'serial_code'=>$request->serial_code,
            'barcodes'=> $barcodes
           ]); 

            new AssetResource($assets);
            return response()->json([
                'message' => 'Successfully Updated an Asset!'
            ], 201);
    }

    
    public function destroy($id)
    {
        $assets=Asset::find($id)->delete();
        new AssetResource($assets);
        return response(null,204);
    }

}
