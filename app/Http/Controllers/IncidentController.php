<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\State;
use App\Models\Center;
use App\Models\Customer;
use App\Models\Incident;
use App\Models\Suspect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IncidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    
    // Display a listing of incident(s) to Admin H'Center.
    public function index()
    {   
        $monitor= User::find(auth()->user()->id);
        $incident = DB::table('incidents')
            ->join('users', 'users.id', '=' , 'incidents.user_id')
            ->join('suspects', 'suspects.incident_id', 'incidents.id')
            ->where('incidents.nearest_center', '=', $monitor->center_code)
            ->where('incidents.incident_status', '=','1')
            ->select('*','incidents.id as incident_id','incidents.created_at as reported_date')
            ->orderBy('incidents.created_at', 'desc')->paginate(10);
        return view('incident.index', compact('incident', 'monitor'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    //Show the Center dropDown use this json_encode
    public function getCenters(Request $request)
    {
        $centers = Center::where('district', $request->district)->pluck('name','code');
        if (isset($centers)) {
            return response()->json($centers);
        } 
        else {
            return false;
        }
    }

    // Displaying the center districts to ajax array
    public function district(Center $distname){
       $distname = Center::orderBy('name','asc')->distinct()->pluck('district'); 
       return response()->json($distname);
    }

    // Displaying the center districts to ajax array
    public function getId(Center $ids){
        $ids = Center::orderBy('name','asc')->distinct()->pluck('id'); 
        return response()->json($ids);
    }

    // Show the form for creating a new incident resource.
    public function create(Center $centers)
    {  
        $dist = Center::orderBy('name','asc')->distinct()->pluck('district');
        return view('incident.create', compact('dist'));
    }

    // Store a newly created incident resource in storage.
    public function store(Request $request, User $user, Incident $incident, Suspect $suspect)
    {
        $this -> validate($request, [
            'incident_source' => 'required',
            'issue_type' => 'required',
            'right_violated' => 'required',
            'special_group' => 'required',
            'region' => 'required',
            'district' => 'required',
            'nearest_center' => 'required|present',
            'ward' => 'required',
            'street' => 'required',
            'photos' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:512',
            'video' => 'required|mimes:mp4,x-flv,x-mpegURL,MP2T,3gpp,quicktime,x-msvideo,x-ms-wmv,mpga,wav|max:1024',
            'date_time'=>'required|before_or_equal:now',
            'name' => 'required|regex:/^[a-zA-z\s]*$/|max:30',
            'gender' => 'required',
            'age' => 'required|numeric|regex:/^[1-9]\d*$/',
            'tribe'=>'required',
            'religion'=>'required',
            'merital_status' => 'required',
            'incident_remarks'=>'required|string|max:250',
            'suspect_remarks' => 'required|string|max:250'
        ]);
            $reporting_time = Carbon::now();
            $user = User::find(Auth::user()->id);
            $region = $request->input('region');
            $district = $request->input('district');
            $incident_number = "LHRC/".strtoupper(substr($region, 0,3))."/".strtoupper(substr($district, 0,3))."/".$user->id."/".$reporting_time->format('Hi');
            
            if($request->hasFile('photos') && $request->file('photos')->isvalid()){
                $photo = $request->photos->getClientOriginalName();
                $request->photos->storeAs('public\photos', $photo );

                if($request->hasFile('video') && $request->file('video')->isvalid()){
                    $video = $request->video->getClientOriginalName();
                    $request->video->storeAs('public\videos', $video );
                }
            }

            DB::beginTransaction();
            $incident = Incident::create([
                'user_id'=> $user->id,
                'incident_number' => $incident_number,
                'incident_source' => $request->input('incident_source'),
                'issue_type' => $request->input('issue_type'),
                'right_violated' => $request->input('right_violated'),
                'special_group' => $request->input('special_group'),
                'region' => $request->input('region'),
                'district' => $request->input('district'),
                'nearest_center' => $request->input('nearest_center'),
                'ward' => $request->input('ward'),
                'street' => $request->input('street'),
                'photos' => $photo,
                'video' => $video,
                'date_time'=> $request->input('date_time'),
                'incident_remarks'=>$request->input('incident_remarks')
            ]);

            $incident = Incident::latest()->first()->id;
            $suspect = Suspect::create([
                // 'user_id'=> $user->id,
                'incident_id' => $incident,
                'name' => $request->input('name'),
                'gender' => $request->input('gender'),
                'age' => $request->input('age'),
                'tribe' => $request->input('tribe'),
                'religion' => $request->input('religion'),
                'merital_status' => $request->input('merital_status'),
                'suspect_remarks' => $request->input('suspect_remarks'),
            ]);
            DB::commit();

            Session::flash('success','LHRC thanks you for the incident report and looks forward for welcoming you.
            Our staff will do everything they can to process your incident efficiently as soon as possible.');
            return redirect()->intended( route('show-incident'));
    }

    // Display the specified customer's incident status.
    public function show(Incident $incident, User $user)
    {   
        $reported = Incident::where('user_id', $user->id)->get();
        $user = User::find(Auth::user()->id);
        $incident = DB::table('incidents')
            ->join('users', 'users.id', '=' , 'incidents.user_id')
            ->join('status', 'status.status', '=', 'incidents.incident_status')
            ->join('suspects', 'suspects.incident_id', '=', 'incidents.id')
            ->where('users.id', '=', $user->id)
            ->whereIn('incidents.incident_status', ['1','2','3','4'])
            ->select('*','incidents.id as incident_id','incidents.created_at as reported_date')
            ->orderBy('incidents.created_at', 'desc')
            ->paginate(10);
        return view('incident.show', ["incident"=>$incident, "reported"=>$reported])->with('i', (request()->input('page', 1) - 1) * 10); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function edit(Incident $incident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incident $incident)
    {
        //
    }

    // Remove the specified incident from storage.
    public function destroy(Incident $incident,$id)
    {
        $incident = Incident::findOrFail($id)->delete();
        Session()->flash('success', 'Incident deleted successfully');
        return redirect()->back();
    }
}
