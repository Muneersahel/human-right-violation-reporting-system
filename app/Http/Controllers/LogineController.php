<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogineController extends Controller
{
    //Handle a login request // $role = array(['Supadmin', 'Admin']);
    public function login(Request $request)
    {
        if(Auth:: attempt(['email'=> $request->email, 'password'=> $request->password], true)){

            $user = User::where('email', $request->email)->first();
            
            if($user->role == "Supadmin" || $user->role =="Admin"){
                Session::flash('success','You have successfully logged in.');
                return redirect()->route('admin/home')->with(compact('user'));
            }

            else if($user->role == "Customer"){
                return redirect()->route('customer/home')->with(compact('user'));
            }

            else if($user->role == "HRC"){
                return redirect()->route('constructor/home')->with(compact('user'));
            }

            else if($user->role == "HRM"){
                return redirect()->route('monitor/home')->with(compact('user'));
            }

            else {
                return redirect()->route('login');
            }
        }

        else {
            Session::flash('failure','Invalid email or password match our records.');
            return redirect()->back()->withInput($request->only('email','password'));
        }
    }
}
