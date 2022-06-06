<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\User;
use App\Models\Customer;
use App\Models\Incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{   
    public function __constructor()
    {
        $this->middleware('auth')->except('logout');
    }

    // Display a listing of the resource.
    public function index()
    {
        $user = User::find(Auth::user()->id);
        switch ($user->role) {
            case 'Supadmin':
                $customer = DB::table('users')->whereNotIn('role', ['Supadmin', 'Customer'])->orderBy('first_name', 'asc')->paginate(10);
                return view('admin.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;

            case 'Admin':
                $customers = DB::table('users')->join('applications', function($join) {
                $join->on('users.id', '=' ,'applications.user_id'); })->where('users.role', '=' , 'Customer')->where('applications.nearest_office', '=', $user->center_code)
                ->select('*','applications.id as application_id','applications.created_at as application_date')
                ->orderBy('applications.created_at', 'desc')->paginate(10);
                return view('customer.index',compact('customers','user'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;
        }
    }

    public function home()
    {
        $user = User::find(Auth::user()->id);
        $reported = Incident::where('user_id', $user->id)->get();
        return view('customer.home', compact('user','reported'));
    }

    //Show the form for creating a new resource.
    public function create()
    {  
        return view('customer.create');
    }

    //Store a newly created resource in storage.
    public function store(Request $request, User $user, Customer $customer)
    {
        $this -> validate($request, [
            'first_name' => 'required|alpha|max:20',
            'middle_name' => 'required|alpha|max:20',
            'last_name' => 'required|alpha|max:20',
            'email' => 'required|string|email|max:255|unique:users,email',
            'mobile_no' => 'required|unique:users,mobile_no|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',
            'gender' => 'required',
            'birth_date' => 'required|date|before:today',
            'tribe'=>'required',
            'religion'=>'required',
            'merital_status' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'user_image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:1024',
            'location_remarks' => 'required|string|max:250',
        ]);

        if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
            $image_name= $request->user_image->getClientOriginalName();
            $request->user_image->storeAs('public\images', $image_name );
        }

        $user =  User::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile_no' => $request->input('mobile_no'),
            'gender' => $request->input('gender'),
            'birth_date' => $request->input('birth_date'),
            'tribe' => $request->input('tribe'),
            'religion' => $request->input('religion'),
            'merital_status' => $request->input('merital_status'),
            'region' => $request->input('region'),
            'district' => $request->input('district'),
            'ward' => $request->input('ward'),
            'street' => $request->input('street'),
            'password' => Hash::make($request->input('password')),
            'location_remarks' => $request->input('location_remarks'),
            'user_image'=> $image_name
        ]);

        Session:: flash('success','You have successfully registered. Please Login');
        return redirect()->intended(route('login'))->withInput($request->only('email','password'));
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
