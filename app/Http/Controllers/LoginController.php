<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tms_user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
        {
            return view('Authentication.login');
        }

    public function signup()
    {
        return view('Authentication.signup');
    }

    public function add_user(Request $request)
    {
        $validateData = $request->validate(
            [
                'id' => 'sometimes|integer',
                'firstname' => 'required|min:3',
                'lastname' => 'required|min:3',
                'birthdate' => 'required',
                'gender' => 'required',
                'email' => 'required|min:10',
                'phonenumber' => 'required|min:11',
                'password' => 'required|min:8',
                'roomnumber' => 'required'
            ]
            );

            $user = new tms_user;

            $user -> firstname = $request->firstname;
            $user -> lastname = $request->lastname;
            $user -> birthdate = $request->birthdate;
            $user -> gender = $request->gender;
            $user -> email = $request->email;
            $user -> phonenumber = $request->phonenumber;
            $user -> password =Hash::make($request->password);
            $user -> roomnumber = $request->roomnumber;

            $existingUser = tms_user::where('email', $user->email)
                ->orWhere('phonenumber', $user->phonenumber)
                ->orWhere('roomnumber', $user->roomnumber) ->
                first();

            if($existingUser)
            {
                return back()->with('fail', 'Email, Phone Number, or Room Number already taken');
            }
            $save = $user -> save();

            if($save)
            {
                return back()->with('success','New Tenant has been Registered');
            } else {
                return back()->with('fail','Error Occured');
            }
        }
        public function login_user(Request $request)
        {
            $validateData = $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            $user_info = tms_user::where('email', '=', $request->email)->first();

            if ($user_info) {
                if (Hash::check($request->password, $user_info->password)) {
                    $request->session()->put('LoggedUser', $user_info);

                    if ($user_info->is_admin == 1) {
                        return redirect('adminhome');
                    } else {
                        return redirect('userprofile');
                    }
                } else {
                    return back()->with('fail', 'PASSWORD INCORRECT');
                }
            } else {
                return redirect('login');
            }
        }
}
