<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Display user that has'nt logged-out and redirect to homepage
    public function index(User $user)
      {
        $user= User::find(Auth::user())->whereIn('role', ['Supadmin','Admin','Customer','HRM','Constructor'])->first();
        switch ($user->role) {
            case 'Admin' || 'Supadmin':
                return redirect()->route('admin/home');
                break;

            case 'Customer':
                return redirect()->route('customer/home');
                break;

            case 'HRM':
                return redirect()->route('monitor/home');
                break;

            case 'HRC':
                return redirect()->route('constructor/home');
                break;

            default:
                return redirect()->route('/');
                break;
        }
      }
}
