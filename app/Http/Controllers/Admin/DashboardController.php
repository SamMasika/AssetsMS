<?php

namespace  App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Asset;
use App\Models\Staff;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $assets=Asset::all();
        $staffAssigned=Staff::join('assets','staffs.id','=','assets.staff_id')
        ->where('staff_id','!=',NULL)
        ->get();
        $staff=Staff::all();
        $assetsAs=Asset::where('staff_id','!=',NULL)->get();
        $assetsuAs=Asset::where('staff_id','=',NULL)->get();
        $usedAssets=Asset::where('status','=','used')->get();
        $repaired=Asset::where('status','=','repaired')->get();
        $new=Asset::where('status','=','new')->get();
        $broken=Asset::where('status','=','broken')->get();
        $users=User::crossjoin('roles')
        ->where('roles.name','super-admin')
        ->first(['users.name']);
        $user=User::where('id',Auth::id())->first();
        $roles = Role::join('model_has_roles','model_has_roles.role_id' , '=', 'roles.id')
        ->where('model_has_roles.role_id', Auth::id())
        ->first(['roles.name',]);
        // $assets=Asset::all();
        return view('store.dashboard',compact('assets','staff','assetsAs',
        'assetsuAs','usedAssets','users','repaired','new','broken','staffAssigned','user','roles'));
    }

}
