<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\SeekPermissionCreateMember;
use Illuminate\Http\Request;
use Validator;
use Redirect;

class MemberController extends Controller
{
    public function seekPermissionCreateMember(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:30|min:3|string',
            'fname' => 'required|max:30|min:3|string',
            'mname' => 'required|max:30|min:3|string',
            'phone' => 'required|max:11|min:11|string',
            'email' => 'required|email|max:50|unique:seek_permission_create_members,email',
            'department' => 'required|in:cse,ese,eee,statistics,bangla,english,tps,music,film,philosophy',
            'session' => 'required|string',
            'address' => 'required|string',
            'job' => 'required|string',
            'blood' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'password' => 'required|min:5',
            'confirm_password' => 'required_with:password|same:password',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->with('msg',$validator->messages());
        }

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/members'), $imageName);
            $imagePath = 'images/members/'.$imageName;
        } else {
			//handle when no image is uploaded
            $imagePath = null; // or provide a default image path
        }

        $member = new SeekPermissionCreateMember;
        $member->name = $request->name;
        $member->fname = $request->fname;
        $member->mname = $request->mname;
        $member->phone = $request->phone;
        $member->email = $request->email;
        $member->department = $request->department;
        $member->session = $request->session;
        $member->address = $request->address;
        $member->job = $request->job;
        $member->blood = $request->blood;
        $member->image = $imagePath;
        $member->password = Hash::make($request->password);
        $member->confirm_password = Hash::make($request->confirm_password);
        $member->save();

        return redirect()->route('auth.login')->with('msg', 'Request sent successfully for member creation!');
    }
}





