<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    // Display a listing of the staffs.
    public function index()
    {   
        $user = User::find(Auth::user()->id);
        switch ($user->role) {
            case 'Supadmin':
                $users = DB::table('users')->whereNotIn('role', ['Supadmin', 'Customer'])->orderBy('first_name', 'asc')->paginate(10);
                return view('admin.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;

            case 'Admin':
                $users = DB::table('users')->whereNotIn('role', ['Admin', 'Customer'])->where('center_code', '=',$user->center_code)->orderBy('first_name', 'asc')->paginate(10);
                return view('monitor.index',compact('users','user'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;
        }
    }

    //Display a redirecting to admin home of the resource.
    public function home()
    {   
        $user = User::find(Auth::user()->id);
        switch ($user->role) {
            case 'Supadmin':
                return view('admin.home');
                break;

            case 'Admin':
                return view('monitor.home');
                break;
        }
    }

    //Show the form for creating a new staff resource.
    public function create()
    {
        $user = User::find(Auth::user()->id);
        $center = Center::orderBy('name','asc')->pluck('name','code')->all();
        switch ($user->role) {
            case 'Supadmin':
                return view('admin.create',compact('center'));
                break;

            case 'Admin':
                return view('monitor.create', compact('user'));
                break;
        }
    }

    // Store a newly created staff in storage/database.
    public function store(Request $request)
    {
        $this -> validate($request, [
            'first_name' => 'required|alpha|max:30',
            'middle_name' => 'required|alpha|max:30',
            'last_name' => 'required|alpha|max:30',
            'birth_date' => 'required|date|before:today',
            'gender' => 'required',
            'role' => 'required',
            'center_code'=>'required',
            'tribe'=>'required',
            'religion'=>'required',
            'merital_status' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'reg_no'=>'required|unique:users,reg_no',
            'mobile_no' => 'required|unique:users|digits:12',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'user_image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:1024',
            'location_remarks' => 'required|string|max:250'
        ]);

        if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
            $image_name= $request->user_image->getClientOriginalName();
            $request->user_image->storeAs('public\images', $image_name );
        }
            $user = User::create([
                'first_name' => $request->input('first_name'),
                'middle_name' => $request->input('middle_name'),
                'last_name' => $request->input('last_name'),
                'birth_date' => $request->input('birth_date'),
                'gender' => $request->input('gender'),
                'role' => $request->input('role'),
                'center_code' => $request->input('center_code'),
                'reg_no' => $request->input('reg_no'),
                'tribe' => $request->input('tribe'),
                'religion' => $request->input('religion'),
                'merital_status' => $request->input('merital_status'),
                'region' => $request->input('region'),
                'district' => $request->input('district'),
                'ward' => $request->input('ward'),
                'street' => $request->input('street'),
                'mobile_no' => $request->input('mobile_no'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'location_remarks' => $request->input('location_remarks'),
                'user_image'=> $image_name
            ]);

            Session()->flash('success','New Staff created successfully');
            return redirect()->intended( route('staff-management'));

    }

    // Display the specified staff information.
    public function show($id)
    {
        $users = User::find($id)->first();
        return view('admin.show', compact('users'));
    }
       
    //Show the form for editing the specified staff.
    public function edit(User $user, $id)
    {   
        $user = User::find($id);
        $admin = User::find(Auth::user()->id);
        $center = Center::orderBy('name','asc')->pluck('name','code')->all();
        // $title = DB::table('users')->lists('role'); //repaced to pluck

        switch ($admin->role) {
            case 'Supadmin':
                return view('admin.edit', compact('user','center'));
                break;

            case 'Admin':
                return view('monitor.edit', compact('user'));
                break;
        }
    }

    // Update the specified staff in storage.
    public function update(Request $request, User $user,$id)
    {
        $this -> validate($request, [
            'first_name' => 'required|alpha|max:30',
            'middle_name' => 'required|alpha|max:30',
            'last_name' => 'required|alpha|max:30',
            'birth_date' => 'required|date|before:today',
            'gender' => 'required',
            'role' => 'required',
            'tribe'=>'required',
            'religion'=>'required',
            'merital_status' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'center_code'=>'required',
            'reg_no'=>'required|unique:users,reg_no,'.$id,
            'mobile_no' => 'required|digits:12|unique:users,mobile_no,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'required|string|min:8|confirmed',
            'user_image'=>'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:1024,'.$id,
        ]);

            if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
                $image_name= $request->user_image->getClientOriginalName();
                $request->user_image->storeAs('public\images', $image_name );
            }

            // $user = User::find($id);
            // $user->first_name = $request->input('first_name');
            // $user->middle_name = $request->input('middle_name');
            // $user->last_name = $request->input('last_name');
            // $user->birth_date = $request->input('birth_date');
            // $user->gender = $request->input('gender');
            // $user->role = $request->input('role');
            // $user->center_code = $request->input('center_code');
            // $user->reg_no = $request->input('reg_no');
            // $user->mobile_no = $request->input('mobile_no');
            // $user->email = $request->input('email');
            // $user->password = Hash::make($request->input('password'));
            // $user->user_image = $image_name;
            // $user->update();

            //user = User::where('id', $id)->update([]) //Elequent
            $user = DB::table('users')->where('id', $id)->update([
                'first_name' => $request->input('first_name'),
                'middle_name' => $request->input('middle_name'),
                'last_name' => $request->input('last_name'),
                'birth_date' => $request->input('birth_date'),
                'gender' => $request->input('gender'),
                'role' => $request->input('role'),
                'center_code' => $request->input('center_code'),
                'reg_no' => $request->input('reg_no'),
                'tribe' => $request->input('tribe'),
                'religion' => $request->input('religion'),
                'merital_status' => $request->input('merital_status'),
                'region' => $request->input('region'),
                'district' => $request->input('district'),
                'ward' => $request->input('ward'),
                'street' => $request->input('street'),
                'mobile_no' => $request->input('mobile_no'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                // 'location_remarks' => $request->input('location_remarks'),
                'user_image'=> $image_name
            ]);

            Session()->flash('success','Staff updated successfully');
            return redirect()->intended( route('staff-management'));
    }

    //Show the form for editing the specified admin.
    public function editAdmin(User $user, $id)
    {
        $user = User::find(Auth::user()->id);
        switch ($user->role) {
            case 'Supadmin':
                return view('admin.create');
                break;

            case 'Admin':
                return view('monitor.edit', compact('user'));
                break;
        }
    }

    //Update the specified admin in storage.
    public function updateAdmin(Request $request, User $user,$id)
    {

        $this -> validate($request, [
            'mobile_no' => 'required|digits:12|unique:users,mobile_no,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|string|min:8|confirmed',
            'user_image'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:1024,'.$id,
        ]);

        if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
            $image_name= $request->user_image->getClientOriginalName();
            $request->user_image->storeAs('public\images', $image_name );
            }

            $user = User::find($id);
            $user->mobile_no = $request->input('mobile_no');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->user_image = $image_name;
            $user->update();

            Session()->flash('success', 'You have been updated successfully');
            return redirect()->intended( route('staff-management'));
    }

    //Remove the specified staff from storage/database.
    public function destroy(User $user,$id)
    {
        $user = User::findOrFail($id)->delete();
        Session()->flash('success', 'Staff deleted successfully');
        return redirect()->back();
    }
}
