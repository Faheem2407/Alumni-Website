<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminRegistration;
use App\Models\SeekPermissionCreateAdmin;
use Redirect;
use Str;

class AdminController extends Controller
{
	function adminLogin(){
		
		return view('auth.admin.login');
	}
	function adminRegister(){
		return view('auth.admin.register');
	}
	
	
	
	
	
	
	//admin registration	
	
	function seekPermissionCreateAdmin(Request $request){
		

		$validator = Validator::make($request->all(),[
			'admin_name'=>'required|max:30|min:3|string',
			'admin_email'=>'required|email|max:50|unique:admin_registrations,admin_email',
			'admin_password'=>'required|min:5',
			'admin_confirm_password'=>'required_with:admin_password|same:admin_password',
			'department'=>'required|in:superadmin,cse,ese,eee,statistics,bangla,english,tps,music,film,philosophy',
		]);
		
		
		if($validator->fails()){
			return Redirect::back()->with('msg',$validator->messages());
		}else{
				
			$admin = new SeekPermissionCreateAdmin;
			$admin->admin_name = $request->admin_name;
			$admin->admin_email = $request->admin_email;
			$admin->admin_password = Hash::make($request->admin_password);
			$admin->admin_confirm_password = Hash::make($request->admin_confirm_password);
			$admin->department = $request->department;
			$admin->save();
			
			return redirect()->route('auth.admin.login')->with('msg','Request sent successfully for admin creation!');
		
		}
		
	}
	
	
	

	
	
	

	
	public function LoginAdmin(Request $request){
		
		
		$a = $request->admin_email;
		$b = $request->admin_password;
		$c = $request->department;
				
		$d = AdminRegistration::where('admin_email',$a)->get();
		$admins = SeekPermissionCreateAdmin::all();
		
		if(count($d)){
			$e = $d[0]->admin_password;
			if(Hash::check($b,$e)){
				if($d[0]->department === $c){
					return view("admin.department.$c",['admins'=>$admins]);
				}else{
					return redirect()->route('auth.admin.login')->with('msg','Wrong department selection');
				}
			}else{
				return redirect()->route('auth.admin.login')->with('msg','Invalid password'); 
			}
		}
		
		return redirect()->route('auth.admin.login')->with('msg','Invalid Credentials'); 
		
	}
	
		
	
	public function PermissionCancel(Request $request){
		SeekPermissionCreateAdmin::where('id',$request->id)->delete();
		$admins = SeekPermissionCreateAdmin::all();
		return view('admin.department.superadmin',['admins'=>$admins]);
	}
	
	
	
	
	
	public function approved(Request $request){
			
		$app = new AdminRegistration;
		$app->admin_name = $request->admin_name;
		$app->admin_email = $request->admin_email;
		$app->admin_password = $request->admin_password;
		$app->admin_confirm_password = $request->admin_confirm_password;
		$app->department = $request->department;
			
		$app->save();
			
		SeekPermissionCreateAdmin::where('id',$request->id)->delete();
		$admins = SeekPermissionCreateAdmin::all();
		return view('admin.department.superadmin',['admins'=>$admins]);
		
	}	
	
}


























