<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    function __construct()

    {

        $this->middleware('permission:view userslist|delete-user|edit-user|view-user', ['only' => ['index','show',]]);
         $this->middleware('permission:create-user', ['only' => ['create','store']]);
       $this->middleware('permission:edit-user', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);

    }
    public function index($id=NULL)
    {
        // $product = Product::with('projects')->where('user_id', Auth::id())->firstOrFail();
        $users=$id?User::find($id):User::all();
        
        // $roles=Role::find($id);
     $roles = Role::join('model_has_roles','model_has_roles.role_id' , '=', 'roles.id')
        ->where('model_has_roles.role_id',$id)
        ->get(['roles.name',]);
        //  return response()->json($roles, 200);
        return view('auth.users.index',compact('users','roles'));
    }


    public function store( Request $request) 
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'lname' => 'required',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|confirmed',
         
        // ]);
    
      $users=new User();
      $users->name=$request->name;
      $users->lname=$request->lname;
      $users->email=$request->email;
      $users->password=bcrypt($request->password);
      $users->phone=$request->phone;
    //   $users->role_id=$request->role_id;
      $users->save();
        return redirect()->back()
            ->with('success',"User created successfully.");
    }

    public function update()
    {
        $users->User::find($id);
        $users->name=$request->name;
        $users->lname=$request->lname;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->phone=$request->phone;
        $users->update();
        return redirect()->back()
            ->with('success',"User Updated successfully.");
    }
    Public function view($id)
    {
        $users=User::find($id);
        $roles = Role::join('model_has_roles','model_has_roles.role_id' , '=', 'roles.id')
        ->where('model_has_roles.role_id',$id)
        ->get(['roles.name',]);
        return view('auth.users.view',compact('roles','users'));
    }

    public function assignview($id)
    {
        $users = User::find($id);
        $roles = Role::get();
        $userRole = DB::table('model_has_roles')
        ->where('model_has_roles.model_id', $id)
        ->pluck('model_has_roles.role_id','model_has_roles.role_id')
        ->all();
        return view('auth.users.assign',compact('users','roles','userRole'));
        // return   $userRole;
    }

     public function assignRole(Request $request,$id)
    {
         $user=User::find($id);
            DB::table('model_has_roles')->where('model_id',$id)->delete();
            $user->assignRole($request->role);
            return redirect('/users-list')->with('success', 'Role assigned.');   
    }

   
    public function destroy($id)
    {
        $user=User::find($id);
        if ($user->hasRole('super-admin')) {
            return back()->with('message', 'you are superAdmin.');
        }
        $user->delete();
return back()->with('message', 'User deleted.');
    }  
}
