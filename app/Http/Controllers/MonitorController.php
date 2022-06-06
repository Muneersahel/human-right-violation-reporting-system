<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\Sms;
use App\Models\User;
use App\Models\Voice;
use App\Models\Validate;
use App\Models\Suspect;
use App\Models\incident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MonitorController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    
   // passing data with Eloquent Builder && DB facade
   public function index()
   { 
        $user= User::find(auth()->user()->id);
        $sms = DB::table('sms')
            ->leftJoin('users', 'users.mobile_no', '=' , 'sms.mobile_no')
            ->where('users.mobile_no', null)
            ->where('sms_center', $user->center_code)->where('sms_status', 6)->select('sms.*','sms.id as idsms')
            ->orderBy('sms.received_date', 'asc')->paginate(10);
        return view('monitor.index',compact('user','sms'))->with('i', (request()->input('page', 1) - 1) * 10);
   }

   // Display a redirecting to monitor home.
   public function home()
   {
        $user = User::find(Auth::user()->id);
        return view('monitor.home', compact('user'));
   }

   // Show the form for creating a incident-applicatioon resource.
   public function create(User $user, incident $incident ,$id)
   {
       $incident = Incident::find($id);
       $user = User::find(Auth::user()->id);
       return view('monitor.create', ["incident"=>$incident, "user"=>$user]);
   }

   // Store a newly created resource in storage.
   public function store(Request $request, User $user, Incident $incident,$id, Validate $validate)
   {    
       $this -> validate($request, [
            'assistance_required' => 'required',
            'follow_up' => 'required',
            'way_findings' => 'required',
            'way_forward' => 'required|string',
            'validation_status' => 'required|string',
            'operation' => 'required',
            // 'monitor_name' => 'required|string|max:30',
            'validation_remarks' => 'bail|required|max: 150'
        ]);

        $incident = Incident::find($id);
        $user = User::where('id', $incident->user_id)->first();

        DB::beginTransaction();
        $validate = Validate::create([
            'user_id'=>$user->id,
            'incident_id'=> $incident->id,
            'assistance_required' => $request->input('assistance_required'),
            'follow_up' => $request->input('follow_up'),
            'way_findings' => $request->input('way_findings'),
            'way_forward' => $request->input('way_forward'),
            'validation_status' => $request->input('validation_status'),
            // 'operation' => $request->input('operation'),
            // 'monitoror_name' => $request->input('monitoror_name'),
            'validation_remarks' => $request->input('validation_remarks')
        ]);
        
        // $incident = DB::table('incidents')->where('id', $id)->update('incident_status', '2');
        $incident = Incident::find($id);
            if (($request->input('validation_status'))==="Valid"){
                $incident->incident_status = '2';
            }

            else {
                $incident->incident_status = '3';
            }

        $incident->update();
        DB::commit();

        Session::flash('success','Your validation has sent successfully.');
        return redirect()->intended( route('monitor-index'));
   }

   // Download victims photos
   public function photos($id)
   {
       $incident = Incident::find($id);
       $photo = Incident::where('id', $incident->id)->firstOrFail();
       $file_path = public_path('storage/photos/'.$photo->photos);
       return response()->download($file_path);
   }

    // Download victims videos
    public function videos($id)
    {
        $incident = Incident::find($id);
        $video = Incident::where('id', $incident->id)->firstOrFail();
        $file_path = public_path('storage/videos/'.$video->video);
        return response()->download($file_path);
    }

    // Download victims voices
    public function voices($id)
    {
        $voice = Voice::find($id);
        $voice = Voice::where('id', $voice->id)->firstOrFail();
        $file_path = public_path('storage/voices/'.$voice->victim_voice);
        return response()->download($file_path);
    }

   // Display the specified customer incident details
   public function show($id)
   {    
       $auth = User::find(auth()->user()->id);
       $incident = incident::find($id);
       $user = User::find($incident->user_id);
       $suspect = Suspect::where('incident_id', '=', $incident->id)->first();
       return view('monitor.show', ["incident"=>$incident, "user"=>$user, "suspect"=>$suspect]);
   }

   // Show the form for editing the specified staff.
   public function edit(User $user, $id)
   {
       $user = User::find($id);
       return view('monitor.edit', compact('user'));
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
           return redirect()->intended( route('monitor/home'));
   }

   // Remove the specified resource from storage.
   public function destroy(Incident $incident)
   {
       //
   }
}

