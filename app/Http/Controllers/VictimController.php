<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Carbon\Carbon;
use App\Models\Sms;
use App\Models\User;
Use App\Models\Center;
use App\Models\Incident;
use App\Models\Suspect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VictimController extends Controller
{   
    public function __constructor()
    {
        $this->middleware('auth')->except('logout');
    }

    // Display a listing of the resource.
    public function index()
    {
       //
    }

    //Show the form for creating a new resource.
    public function create(Sms $sms,$id)
    {  
        $sms = Sms::find($id);
        $monitor= User::find(auth()->user()->id);
        $center = Center::where('code', $monitor->center_code)->first();
        return view('victim.create', compact('sms','center'));
    }

    //Store a newly created resource in storage.
    public function store(Request $request, User $user, Sms $sms,$id, Incident $incident, Suspect $suspect)
    {   
        // $validated = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);
        $this -> validate($request, [
            
            // validation for victim registration
            'first_name' => 'required|alpha|max:20',
            'middle_name' => 'required|alpha|max:20',
            'last_name' => 'required|alpha|max:20',
            'email' => 'required|string|email|max:255|unique:users,email',
            // 'mobile_no' => 'required|unique:users,mobile_no|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12',
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
            
            //validation for incident report
            'incident_source' => 'required',
            'issue_type' => 'required',
            'right_violated' => 'required',
            'special_group' => 'required',
            'incident_region' => 'required',
            'incident_district' => 'required',
            // 'nearest_center' => 'required|present',
            'incident_ward' => 'required|string',
            'incident_street' => 'required|string',
            'photos' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:512',
            'video' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv,mpga,wav|max:1024',
            'date_time'=>'required|before_or_equal:now',
            'name' => 'required|regex:/^[a-zA-z\s]*$/|max:30',
            'age' => 'required|numeric|regex:/^[1-9]\d*$/',
            'suspect_gender' => 'required',
            'suspect_tribe'=>'required',
            'suspect_religion'=>'required',
            'status' => 'required',
            'incident_remarks'=>'required|string|max:250',
            'suspect_remarks' => 'required|string|max:250'
        ]);

        if($request->hasFile('user_image') && $request->file('user_image')->isvalid()){
            $image_name= $request->user_image->getClientOriginalName();
            $request->user_image->storeAs('public\images', $image_name );

            if($request->hasFile('photos') && $request->file('photos')->isvalid()){
                $photo= $request->photos->getClientOriginalName();
                $request->photos->storeAs('public\photos', $photo );

                if($request->hasFile('video') && $request->file('video')->isvalid()){
                    $video= $request->video->getClientOriginalName();
                    $request->video->storeAs('public\videos', $video );
                }
            }
        }

        DB::beginTransaction();
        $sms = Sms::find($id);
        $user =  User::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'mobile_no' => $sms->mobile_no,
            'gender' => $request->old(input('gender')),
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

        $reporting_time = Carbon::now();
        $monitor = User::find(Auth::user()->id);
        $user = User::latest()->first();
        $region = $request->input('region');
        $district = $request->input('district');
        $incident_number="LHRC/".strtoupper(substr($region, 0,3))."/".strtoupper(substr($district, 0,3))."/".$user->id."/".$reporting_time->format('Hi');
        
        $incident = Incident::create([
            'user_id'=> $user->id,
            'incident_number' => $incident_number,
            'incident_source' => $request->input('incident_source'),
            'issue_type' => $request->input('issue_type'),
            'right_violated' => $request->input('right_violated'),
            'special_group' => $request->input('special_group'),
            'region' => $request->input('incident_region'),
            'district' => $request->input('incident_district'),
            'nearest_center' => $monitor->center_code,
            'ward' => $request->input('incident_ward'),
            'street' => $request->input('incident_street'),
            'photos' => $photo,
            'video' => $video,
            'date_time'=> $request->input('date_time'),
            'incident_remarks'=>$request->input('incident_remarks')
        ]);

        $incident = Incident::latest()->first()->id;
        $suspect = Suspect::create([
            'incident_id' => $incident,
            'name' => $request->input('name'),
            'gender' => $request->input('suspect_gender'),
            'age' => $request->input('age'),
            'tribe' => $request->input('suspect_tribe'),
            'religion' => $request->input('suspect_religion'),
            'merital_status' => $request->input('status'),
            'suspect_remarks' => $request->input('suspect_remarks'),
        ]);
        DB::commit();

        Session:: flash('success','You have registered the victim and report the incident successfully');
        return redirect()->intended(route('monitor-sms'));
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Victim $Victim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Victim  $Victim
     * @return \Illuminate\Http\Response
     */
    public function edit(Victim $Victim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Victim  $Victim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Victim $Victim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Victim  $Victim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Victim $Victim)
    {
        //
    }
}
