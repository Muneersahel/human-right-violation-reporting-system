<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Survey;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Application;
use App\Models\Installation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    // Display a incoming suryed application
    public function index()
    {
       $constructor = User::find(Auth::user()->id);
       $application = DB::table('applications')->join('users', function($join) {
       $join->on('applications.user_id', '=' , 'users.id'); })->where('applications.nearest_office', '=', $constructor->center_code)->where('applications.application_state', '=','3')
           ->select('*','applications.id as application_id','applications.created_at as application_date')
           ->orderBy('applications.created_at', 'desc')->paginate(10);
        return view('construct.index', compact('application','constructor'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Display a redirecting to home of the resource.
    public function home()
    {
      $user = User::find(Auth::user()->id);
      return view('construct.home',compact('user'));
    }

    // Show the form for creating a construcr-applicatioon resource.
    public function create(User $user, Application $application ,$id)
    {
        $application = Application::find($id);
        $user = User::find(Auth::user()->id);
        return view('construct.create', ["application"=>$application, "user"=>$user]);

    }

    // Store a newly created resource in storage.
    public function store(Request $request, User $user, Application $application,$id, Survey $survey, Installation $installation )
    {
        $this -> validate($request, [
            'service_installed' => 'required',
            'meter_number' => 'required|numeric|unique:installations,meter_number',
            'meter_digits' => 'required|numeric|unique:installations,meter_digits',
            'meter_size' => 'required|numeric',
            'meter_latitude' => 'required|numeric',
            'meter_longitude' => 'required|numeric',
            'meter_consuption' => 'required',
            'meter_sequence_no' => 'required|numeric|unique:installations,meter_sequence_no',
            'initial_reading'=>'required|numeric',
            'meter_installer' => 'required|string|max:30',
            'approval_name' => 'required|string|max:30',
            'installation_remarks' => 'bail|required|max: 150'
        ]);
        
        $application = Application::find($id);
        $survey = Survey::find($application->id);
        
        DB::beginTransaction();
        $installation = Installation::create([
            'survey_id'=>$survey->id,
            'application_id'=> $application->id,
            'service_installed' => $request->input('service_installed'),
            'meter_sequence_no' => $request->input('meter_sequence_no'),
            'meter_number' => $request->input('meter_number'),
            'meter_digits' => $request->input('meter_digits'),
            'meter_size' => $request->input('meter_size'),
            'meter_latitude' => $request->input('meter_latitude'),
            'meter_longitude' => $request->input('meter_longitude'),
            'meter_consuption' => $request->input('meter_consuption'),
            'initial_reading' => $request->input('initial_reading'),
            'meter_installer' => $request->input('meter_installer'),
            'approval_name' => $request->input('approval_name'),
            'installation_remarks' => $request->input('installation_remarks')
        ]);

        $application = Application::find($id);
            $application->application_state = '4';
            $application->update();
        DB::commit();

        Session::flash('success','Your installation data has sent successfully.');
        return redirect()->intended( route('constructor-index'));
    }

    // Display the specified payed applications to constructor 
    public function show($id)
    {
        $application = Application::find($id);
        $user = User::find($application->user_id);
        $survey = Survey::where('application_id', '=', $application->id)->first();
        $customer = Customer::where('user_id', '=', $user->id)->first();
        $payment = Payment::where('mobile_no', '=', $user->mobile_no)->first();
        return view('construct.show', ["application"=>$application, "user"=>$user, "customer"=>$customer, "survey"=>$survey, "payment"=>$payment]);
    }

    // Show the form for editing the specified staff.
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('construct.edit', compact('user'));
    }

    // Update the specified stadd in storage.
    public function update(Request $request, User $user,$id)
    {
        $this -> validate($request, [
            'mobile_no' => 'required|digits:12|unique:users,mobile_no,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|string|min:8|confirmed',
            'user_image'=>'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:1024,'.$id,
        ]);

         if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
             $image_name= $request->user_image->getClientOriginalName();
             $request->user_image->storeAs('public\images\image', $image_name );
             }
 
             $user = User::find($id);
             $user->mobile_no = $request->input('mobile_no');
             $user->email = $request->input('email');
             $user->password = Hash::make($request->input('password'));
             $user->user_image = $image_name;
             $user->update();
             
            Session()->flash('success','You have successfully updated');
            return redirect()->intended( route('constructor/home'));
    }

    // Download  customer site sketch layout
    public function download($id)
    {
        $application = Application::find($id);
        $survey = Survey::where('application_id', $application->id)->firstOrFail();
        // $file_path = public_path()."/storage/sketch/".$survey->site_layout;
        $file_path = public_path('storage/sketch/'.$survey->site_layout);
        return response()->download($file_path);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        //
    }
}
