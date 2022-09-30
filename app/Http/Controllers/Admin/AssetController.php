<?php
namespace App\Http\Controllers\Admin;
use PDF;
use Carbon\Carbon;
use App\Models\Info;
use App\Models\User;
use App\Models\Apply;
use App\Models\Asset;
use App\Models\Maombi;
use App\Models\Repair;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Disposal;
use App\Models\Unassign;
use App\Models\Department;
use App\Models\Depression;
use App\Models\IssuedAsset;
use App\Models\Maintainance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Picqer\Barcode\BarcodeGeneratorJPG;
use Picqer\Barcode\BarcodeGeneratorHTML;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AssetController extends Controller
{
   
    public function index()
    {
        $assets=Asset::where('status','!=','disposed')->where('status','!=','broken')->get();
            $currentTime = Carbon::now();
      foreach($assets as $asset){
          $created=$asset->created_at;
          $rep_id=$asset->id;
          $purchace_date=$asset->purchace_date;
          $status=$asset->status;
         $uta=$asset->uta;
          $savage=$asset->savage;
          $price=$asset->p_price;
        //    $totalDuration = $currentTime-> $purchace_date;
             $total= $currentTime->diffInMinutes($created);
           $dv=(($price-$savage)/ ($uta ));

           
                     $netValue=$price- $dv;
                        
   
        
    }

        $vendors=Vendor::all();
        $users=User::all();
        return view('store.assets.index',compact('assets','vendors','users', ));
    }

    public function depreciation()
    {
        $assets=Asset::all();
        $currentTime = Carbon::now();
      foreach($assets as $asset){
          $created=$asset->created_at;
          $rep_id=$asset->id;
          $status=$asset->status;
         $uta=$asset->uta;
          $savage=$asset->savage;
          $price=$asset->p_price;
        $totalDuration =$currentTime->addMinutes($uta);
         $total= $totalDuration->diffInMinutes($created);
        //    $dv=(($price-$savage)/ ($total ));
    //  $ct=$currentTime->addMinutes(1);
    //    if($ct){

    //       $netValue=$price- $dv;
    //                $dep=new Depression;
    //               $dep->assets_id=$rep_id;
    //               $dep->dep_value= $netValue;
    //               $dep->duration=$ct;
    //               $dep->save(); 

    //    }

          if($total> $uta){
               $disposal=new Disposal;
               $disposal->assets_id= $rep_id;
               $disposal->condtn_m="disposed";
               $disposal->save(); 
   
           //   $asset->status='disposed';
           //   $asset->update();
             
          }
      }
    }

    public function createPDF() {
        $data = Asset::all();
        $pdf = PDF::loadView('store.assets.pdf', compact('data'))->setOptions(['defaultFont' => 'monospace']);
        return $pdf->download('pdf_file.pdf');
      }

    public function electronics()
    {
        $electronics=Asset::where('category','electronic')->where('status','!=','disposed')->where('status','!=','broken')->get();
        return view('store.assets.electronics',compact('electronics'));
    }

    public function furnitures()
    {
        $furnitures=Asset::where('category','furniture')->where('status','!=','disposed')->where('status','!=','broken')->get();
        return view('store.assets.furnitures',compact('furnitures'));
    }

    public function buildings()
    {
        $buildings=Asset::where('category','building')->where('status','!=','disposed')->where('status','!=','broken')->get();
        return view('store.assets.buildings',compact('buildings'));
    }

    public function vehicles()
    {
        $vehicles=Asset::where('category','vehicles')->where('status','!=','disposed')->where('status','!=','broken')->get();
        return view('store.assets.vehicles',compact('vehicles'));
    }

    public function others()
    {
        $others=Asset::where('category','others')->where('status','!=','disposed')->where('status','!=','broken')->get();
        return view('store.assets.others',compact('others'));
    }

    public function downloadPDF()
    {
        $assets=Asset::all();
        $brands=Brand::all();
        $categories=Category::all();
        $vendors=Vendor::all();
        $users=User::all();
      
        $pdf=PDF::loadview('store.assets.index',compact('assets','brands','categories','vendors','users','departments'));
        return $pdf->download('assets.pdf');  
    }

   
    public function store(Request $request)
    {
        $assets=new Asset();
        $asset_code=rand('106890124','100000000');
        $redcolor='255,0,0';
        $barcodes=QrCode::size(100)->generate($asset_code);
      
        $assets->name=$request->name;
        $assets->category=$request->category;
        $assets->vendor_id=$request->vendor_id;
        $assets->user_id=$request->user_id;
        $assets->asset_code=$asset_code;
        $assets->status=$request->status;
        $assets->uta=$request->uta;
        $assets->p_price=$request->p_price;
        $assets->serial_code=$request->serial_code;
        $assets->plate_no=$request->plate_no;
        $assets->barcodes= $barcodes;
        $assets->save();
        return redirect()->back()->with ('success',"Asset added successfully!");
    }

    public function show($id)
    {
        $assets=Asset::find($id);
     $lasts = Info::select('*')
       ->where('assets_id',$id)
       ->orderBy('created_at', 'desc')
       ->get()
       ->unique('user_id');
        return view('store.assets.view',compact('assets','lasts'));
    }

    public function update(Request $request, $id)
    {
        $assets=Asset::find($id);

        $asset_code=rand('106890124','100000000');
        $redcolor='255,0,0';
        $barcodes=QrCode::size(100)->generate($asset_code);

        $assets->name=$request->name;
        $assets->user_id=$request->user_id;
        $assets->category=$request->category;
        $assets->status=$request->status;
        $assets->serial_code=$request->serial_code;
        $assets->plate_no=$request->plate_no;
        $assets->update();
        return redirect()->back()->with ('success',"Asset updated successfully!");
    }

   
    public function destroy($id)
    {
        $assets=Asset::find($id);
        $assets->delete();
        return redirect()->back()->with('success',"Asset has been deleted successfully!");
    }

    public function assignview($id)
    {
        $assets=Asset::find($id);
      $staffs=User::all(); 
      $request=Apply::where('assets_id',$id)->first();
     return view('store.assets.assign',compact('staffs','assets','request'));  
    }
    
    public function assetAssign(Request $request,$id)
    {
        $asset=Asset::find($id);
        $apply=Apply::where('assets_id',$id)->first();
       $staffs=IssuedAsset::with('user')->where('assets_id',$id)->first();
        if($asset)
        {
            $asset->user_id = $request->user_id;
            $asset->status = $request->status;
            $asset->flug = '3';
        }
       if($asset->update()){
           $modelAss=new IssuedAsset();
           $modelAss->user_id=$request->user_id;
           $modelAss->assets_id= $id;
           $modelAss->depart_id= $apply->depart_id;
           $modelAss->status= 1;
           $modelAss->condtn=$asset->status;
           $modelAss->save();
       }
       if($asset->update()){
       $apply->status='3';
        $apply->update();
       }
        return redirect('/assets-list')->with('success','Asset Assigned successfully!');
    }


    public function unassignview($id)
    {
        $assets=Asset::find($id);
      $staff=User::with('asset')->get(); 
     return view('store.assets.unassign',compact('assets','staff'));  
    }

    public function assetunAssign(Request $request ,$id)
    {
        $asset=Asset::find($id);
    $asset_name= $asset->name;
       $issued=IssuedAsset::where('assets_id',$id)->latest()->first();
      $issued_i=IssuedAsset::where('assets_id',$id)->where('status',1)->latest()->first();
        if($asset){
            $asset->user_id = NULL;
            $asset->status =$request->status;
            $asset->flug ='0';
            if($asset->update())
            {
                $asset_un=Asset::where('id',$id)->first();
                $asset_un->request_type=0;
                $asset_un->update();
            }
            if($asset->update())

            {
                $curi=new IssuedAsset;
                $curi->assets_id = $id;
                $curi->user_id= $issued->user_id; 
                $curi->depart_id= $issued->depart_id; 
                $curi->condtn= $asset->status; 
                $curi->status=0; 
                $curi->save();
            }
            if($asset->update())

            {
                $curi_i= $issued_i;
                $curi_i->delete();
            }
            if($asset->update())
            {
                
                $infos = new Info;
                $infos->assets_id = $id;
                $infos->user_id= $issued->user_id; 
                $infos->depart_id= $issued->depart_id; 
               $infos->condtn= $asset->status; 
                $infos->status=0; 
                $infos->status_i=$issued->status; 
                $infos->assigned=$issued->created_at; 
                $infos->condtn_i=$issued->condtn; 
                $infos->reason=$request->reason; 
                $infos->save(); 
             }
             if($asset->update())
             {
                 if($asset->status=='broken')
                 {
                    $maintain=new Maintainance;
                    $maintain->assets_id= $id;
                    $maintain->condtn= $asset->status;
                    $maintain->returned_at= $asset->created_at;
                    $maintain->save();
                 }
             }
             if($asset->update()){
                if($asset->request_type==0){

                    $request=Apply::where('assets_id',$id)->first();
                     $request->delete();
                }
             else{
                    $ombi=Maombi::where('asset_name', $asset_name)->first();
                     $ombi->delete();
                    }
                }
        }
        return redirect('/assets-list')->with('success','Asset returned successfully!');
    }

    public function workshop()
    {
        $maintains=Maintainance::all();
        return view('store.assets.mantain',compact('maintains'));
    }

    
    public function repair(Request $request,$id)
    {
        $repair=Maintainance::find($id);
        $rep_id=$repair->assets_id;
        $maintains=Asset::where('id',$rep_id)->first();
        if( $repair)
        { 
            $repair->condtn=$request->condtn;
            if( $repair->update())
            {
                if( $repair->condtn=='disposed'){
                    $disposal=new Disposal;
                    $disposal->assets_id= $rep_id;
                    $disposal->condtn_m="disposed";
                    $disposal->save(); 

                    $disp=$maintains; 
                    $disp->status=$repair->condtn;
                    $disp->update();
                    if($disp->update())
                    {
                       $repair->delete();
                    }
                }elseif($repair->condtn=='repaired'){
                   $history=new Repair;
                 $history->assets_id= $rep_id;
                  $history->condtn_m="broken";
                 $history->save();

                 $repaired=$maintains;
                 $repaired->status=$repair->condtn;
                 $repaired->update();

                 if($repaired->update())
                 {
                    $repair->delete();
                 }
                }
              
            }
          
            return redirect('/assets-list')->with('success','Asset repaired successfully!');
        }
    }
    public function repairedRecords()
    {
        $repairs=Repair::orderBy('created_at','desc')->get()->unique('assets_id');
        return view('store.assets.repaired',compact('repairs'));
    }

    public function placeorder(Request $request,$id)
    {
        $asset=Asset::find($id);
        $user_id=Auth::user()->id;
        if($asset){
            $apply=new Apply;
            $apply->assets_id=$asset->id;
            $apply->user_id= $user_id;
            $apply->status=0;
            $apply->save();
            return redirect()->back()->with('success','Asset Requested Successfully!');
        }
    }

    public function disposal()
    {
        $disposal=Disposal::all();
        return view('store.assets.disposed',compact('disposal'));
    }

    public function destroyDisp($id)
    {
        $disp=Disposal::find($id);
        $disp_id=$disp->assets_id;
       $asset=Asset::where('id', $disp_id)->first();
       $asset->delete();
       return redirect()->back()->with('success','Asset Deleted Successfully!');
    }

    public function dispose(Request $request,$id)
    {
        $assets=Asset::all();
        $currentTime = Carbon::now();
        $created=$assets->created_at;
        $totalDuration =$currentTime->diffInMinutes($created);
        dd($totalDuration);
        if(  $totalDuration>5)
        $disposal=new Disposal;
        $disposal->assets_id= $rep_id;
        $disposal->condtn_m="disposed";
        $disposal->save(); 
    }
  
}


