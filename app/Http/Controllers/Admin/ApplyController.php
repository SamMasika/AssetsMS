<?php
namespace App\Http\Controllers\Admin;
use App\Models\Apply;
use App\Models\Asset;
use App\Models\Maombi;
use App\Models\Category;
use App\Models\Department;
use App\Models\IssuedAsset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ApplyController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        if(Auth::user()->hasRole('super-admin')){
            $requ=Apply::all();
            $categories=Category::all();
        }
       elseif(Auth::user()->hasRole('storekeeper')){
            $requ=Apply::all();
            $categories=Category::all();

       }
       elseif(Auth::user()->hasRole('Maintainance officer')){
        $requ=Apply::all();
        $categories=Category::all();

   }
        else{
            $requ=Apply::where('user_id','=',$user_id)
            ->get();
            $categories=Category::all();

            
        }
       
        return view('store.orders.index',compact('requ','categories'));
    }

    public function create($id)
    {
        $asset=Asset::find($id);
        $departments=Department::all();
        return view('store.orders.create',compact('asset','departments'));
    }

    public function placeorder(Request $request,$id)
    {
        $asset=Asset::find($id);
        $user_id=Auth::user()->id;
        $depart_id=Auth::user()->depart_id;
        if($asset)
        {
            $apply=new Apply;
            $apply->assets_id=$asset->id;
            $apply->user_id= $user_id;
          $apply->depart_id= $depart_id;
            $apply->status='0';
            $apply->save();
            if( $apply->save())
            {
                $asset->flug='1';
                $asset->update();
            }
            return redirect('/apply-list')->with('success','Asset Requested Successfully!');
        }
    }

    public function show($id)
    {
        $asset=Apply::where('id',$id)->first();

        return view('store.orders.view',compact('asset'));
    }

    public function approve(Request $request,$id)
    {
       $apply=Apply::find($id);
        $asset_id=$apply->assets_id;
     $assets=Asset::where('id',$asset_id)->first();
     if($apply){
         $apply->status=$request->status;
         $apply->update();
     
            if($apply->status=='1')
            {

                $assets->flug='2';
                $assets->update();    
            }
            if($apply->status=='2')
            {

                $assets->flug='0';
                $assets->update();    
            } 
      
     }
       return redirect('/apply-list')->with('success','Request updated successfully!');
    }


    public function reject(Request $request,$id)
    {
       $apply=Apply::find($id);
        $asset_id=$apply->assets_id;
     $assets=Asset::where('id',$asset_id)->first();
     if($apply){
         $apply->status=$request->status;
         $apply->remark=$request->remark;
         $apply->update();
     
            if($apply->status=='1')
            {

                $assets->flug='2';
                $assets->update();    
            }
            if($apply->status=='2')
            {

                $assets->flug='0';
                $assets->update();    
            } 
      
     }
       return redirect('/apply-list')->with('success','Request Rejected successfully!');
    }

    public function unavailable(Request $request)
    {
        $user_id=Auth::user()->id;
        $depart_id=Auth::user()->depart_id;
        $unavailable=new Maombi;
        $unavailable->asset_name=$request->asset_name;  
        $unavailable->user_id= $user_id; 
        $unavailable->depart_id= $depart_id; 
        $unavailable->category=$request->category;
        $unavailable->specification=$request->specification;
        $unavailable->save();  
        return redirect('/request-list')->with ('success',"Asset Requested successfully!");
    }

    public function maombi()
    {

        $user_id = Auth::user()->id;
        if(Auth::user()->hasRole('super-admin')){
            $maombi=Maombi::all();  
        }
       elseif(Auth::user()->hasRole('storekeeper')){
            $maombi=Maombi::all();
       }
       elseif(Auth::user()->hasRole('Maintainance officer')){
        $maombi=Maombi::all();
   }
        else{
            $maombi=Maombi::where('user_id','=',$user_id)
            ->get();
        } 
        return view('store.requests.maombi',compact('maombi'));
    }

    public function maombiApp($id)
    {
        $maombi=Maombi::where('id',$id)->first();
     
        return view('store.orders.maombi_approval',compact('maombi'));
    }

    
    public function maombiApprove(Request $request,$id)
    {
       $maombi=Maombi::find($id);
       $maombi->status='1';
       if( $maombi->update())
      {
        if($maombi->category=='electronic')
        {

            $assets=new Asset();
            $asset_code=rand('106890124','100000000');
            $redcolor='255,0,0';
            $barcodes=QrCode::size(100)->generate($asset_code);
          
            $assets->name=$maombi->asset_name;
            $assets->category=$maombi->category;
            $assets->asset_code=$asset_code;
            $assets->user_id= $maombi->user_id;
            $assets->status='new';
            $assets->flug='3';
            $assets->uta=5;
            $assets->request_type=1;
            $assets->barcodes= $barcodes;
            $assets->save();
        }
        if($maombi->category=='furniture')
        {

            $assets=new Asset();
            $asset_code=rand('106890124','100000000');
            $redcolor='255,0,0';
            $barcodes=QrCode::size(100)->generate($asset_code);
          
            $assets->name=$maombi->asset_name;
            $assets->category=$maombi->category;
            $assets->asset_code=$asset_code;
            $assets->user_id= $maombi->user_id;
            $assets->status='new';
            $assets->flug='3';
            $assets->uta=10;
            $assets->request_type=1;
            $assets->barcodes= $barcodes;
            $assets->save();
        }
        if($maombi->category=='building')
        {

            $assets=new Asset();
            $asset_code=rand('106890124','100000000');
            $redcolor='255,0,0';
            $barcodes=QrCode::size(100)->generate($asset_code);
          
            $assets->name=$maombi->asset_name;
            $assets->category=$maombi->category;
            $assets->asset_code=$asset_code;
            $assets->user_id= $maombi->user_id;
            $assets->status='new';
            $assets->flug='3';
            $assets->uta=20;
            $assets->request_type=1;
            $assets->barcodes= $barcodes;
            $assets->save();
        }
        if($maombi->category=='vehicles')
        {

            $assets=new Asset();
            $asset_code=rand('106890124','100000000');
            $redcolor='255,0,0';
            $barcodes=QrCode::size(100)->generate($asset_code);
          
            $assets->name=$maombi->asset_name;
            $assets->category=$maombi->category;
            $assets->asset_code=$asset_code;
            $assets->user_id= $maombi->user_id;
            $assets->status='new';
            $assets->flug='3';
            $assets->uta=10;
            $assets->request_type=1;
            $assets->barcodes= $barcodes;
            $assets->save();
        }
        if($maombi->category=='others')
        {

            $assets=new Asset();
            $asset_code=rand('106890124','100000000');
            $redcolor='255,0,0';
            $barcodes=QrCode::size(100)->generate($asset_code);
          
            $assets->name=$maombi->asset_name;
            $assets->category=$maombi->category;
            $assets->asset_code=$asset_code;
            $assets->user_id= $maombi->user_id;
            $assets->status='new';
            $assets->flug='3';
            $assets->uta=20;
            $assets->request_type=1;
            $assets->barcodes= $barcodes;
            $assets->save();
        }
        if( $assets->save()){
            $modelAss=new IssuedAsset();
            $modelAss->user_id= $assets->user_id;
            $modelAss->assets_id= $assets->id;
            $modelAss-> depart_id=$maombi->depart_id;
            $modelAss->status= 1;
            $modelAss->condtn=$assets->status;
            $modelAss->save();
        }
        return redirect()->back()->with ('success',"Asset added successfully!");
      }
       return redirect('/apply-list')->with('success','Request updated successfully!');
    }


    public function rejectMaombi(Request $request,$id)
    {
       $apply=Maombi::find($id);
      
         $apply->status=$request->status;
         $apply->remark=$request->remark;
         $apply->update();
       return redirect('/request-list')->with('success','Request Rejected successfully!');
    }

    public function destroy($id)
    {
        $apply=Apply::find($id);
        $apply->delete();
        return redirect()->back()->with('success','Request deleted successfully!');  
    }    

    public function destroyMaombi($id)
    {
        $apply=Maombi::find($id);
        $apply->delete();
        return redirect()->back()->with('success','Request deleted successfully!');
       
    }    
}
