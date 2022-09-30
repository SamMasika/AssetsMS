<?php

namespace  App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Apply;
use App\Models\Asset;
use App\Models\Staff;
use App\Models\Maombi;
use App\Models\Disposal;
use App\Models\Maintainance;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $assets=Asset::all();
        $staffAssigned=User::join('assets','users.id','=','assets.user_id')
        ->where('user_id','!=',NULL)
        ->get();
       
        $assetsAs=Asset::where('user_id','!=',NULL)->get();
        $assetsuAs=Asset::where('user_id','=',NULL)->where('status','!=','disposed')->where('status','!=','broken')->get();
        $usedAssets=Asset::where('status','=','used')->get();
        $repaired=Asset::where('status','=','repaired')->get();
        $new=Asset::where('status','=','new')->get();
        $broken=Maintainance::where('condtn','broken')->orderby('created_at','asc')->get();
        $disposed=Disposal::orderby('created_at','asc')->get();
        //pending
        $user_id = Auth::user()->id;
        if(Auth::user()->hasRole('super-admin')){
            $pending=Maombi::where('status','0')->count(); 
            $pending_un=Apply::where('status','0')->count(); 
            $sum= $pending+$pending_un;
        }
       elseif(Auth::user()->hasRole('storekeeper')){
        $pending=Maombi::where('status','0')->count(); 
        $pending_un=Apply::where('status','0')->count(); 
            $sum= $pending+$pending_un;
       }
       elseif(Auth::user()->hasRole('Maintainance officer')){
        $pending=Maombi::where('status','0')->count(); 
            $pending_un=Apply::where('status','0')->count(); 
        $sum= $pending+$pending_un;
   }
        else{
            $pending=Maombi::where('user_id','=',$user_id)
            ->where('status','0')->count();
            $pending_un=Apply::where('user_id','=',$user_id)->where('status','0')
            ->count();
            $sum= $pending+$pending_un;
        } 
        //Approved
        if(Auth::user()->hasRole('super-admin')){
            $approved=Maombi::where('status','1')->count(); 
            $approved_un=Apply::where('status','1')->count(); 
            $jumla= $approved+$approved_un;
        }
       elseif(Auth::user()->hasRole('storekeeper')){
        $approved=Maombi::where('status','1')->count(); 
        $approved_un=Apply::where('status','1')->count(); 
            $jumla= $approved+$approved_un;
       }
       elseif(Auth::user()->hasRole('Maintainance officer')){
        $approved=Maombi::where('status','1')->count(); 
            $approved_un=Apply::where('status','1')->count(); 
        $jumla= $approved+$approved_un;
   }
        else{
            $approved=Maombi::where('user_id','=',$user_id)
            ->where('status','1')->count();
            $approved_un=Apply::where('user_id','=',$user_id)->where('status','1')
            ->count();
            $jumla= $approved+$approved_un;
        } 
        //Rejected
        if(Auth::user()->hasRole('super-admin')){
            $rejected=Maombi::where('status','2')->count(); 
            $rejected_un=Apply::where('status','2')->count(); 
            $total= $rejected+$rejected_un;
        }
       elseif(Auth::user()->hasRole('storekeeper')){
        $rejected=Maombi::where('status','2')->count(); 
        $rejected_un=Apply::where('status','2')->count(); 
            $total= $rejected+$rejected_un;
       }
       elseif(Auth::user()->hasRole('Maintainance officer')){
        $rejected=Maombi::where('status','2')->count(); 
            $rejected_un=Apply::where('status','2')->count(); 
        $total= $rejected+$rejected_un;
   }
        else{
            $rejected=Maombi::where('user_id','=',$user_id)
            ->where('status','2')->count();
            $rejected_un=Apply::where('user_id','=',$user_id)->where('status','2')
            ->count();
            $total= $rejected+$rejected_un;
        } 
        $users=User::crossjoin('roles')
        ->where('roles.name','super-admin')
        ->first(['users.name']);
        $user=User::where('id',Auth::id())->first();
        $roles = Role::crossjoin('model_has_roles','model_has_roles.role_id' , '=', 'roles.id')
        ->where('model_has_roles.model_id', Auth::id())
        ->first(['roles.name',]);
        return view('store.dashboard',compact('assets','assetsAs','jumla','total',
        'assetsuAs','usedAssets','users','repaired','new','broken','staffAssigned','user','roles','disposed','sum'));
    }

}
