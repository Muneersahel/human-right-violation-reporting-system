<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\User;
use App\Models\Voice;
use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoiceController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {   
        $user = User::find(Auth::user()->id);
        $center = Center::orderBy('name','asc')->pluck('name','code')->all();
        switch ($user->role) {
            case 'Supadmin':
                $voices = DB::table('voices')
                    ->join('users', 'users.id', '=' , 'voices.user_id')
                    // ->join('status', 'status.status', '=', 'voices.voice_status')->get();
                    ->where([['voice_center', '=', 'HQ'], ['voice_status', '=', '7'],])
                    ->select('*','voices.id as voice_id')
                    ->orderBy('received_date', 'asc')->paginate(10);
                    // dd($voices);
                return view('voice.index',compact('user', 'voices','center'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;

            case 'HRMS':
                $sms = DB::table('sms')->where('sms_center', $user->center_code)->where('sms_status', 6)->orderBy('received_date', 'asc')->paginate(10);
                return view('monitor.index',compact('user','sms'))->with('i', (request()->input('page', 1) - 1) * 10);
                break;
        }
    }

    //Show the form for creating a new resource.
    public function create()
    {
        return view('voice.create');
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {   
        $extension = $request->victim_voice->getClientOriginalExtension();
        if ($extension == 'mp3') {
                $this -> validate($request, [
                'victim_voice' => 'required|max:1024'
                // 'victim_voice' => 'required|mimes:mpeg,mpga,mp3,wav|max:10240'
            ]);
        }

         else {
            return redirect()->back()->with('failure', 'Enter a valid file with extension .mp3. Start Recording..'); 
        }
        
        $user = User::find(Auth::user()->id);
        $user_name = $user->first_name.'_'.$user->middle_name.'_'.$user->last_name.'.';

        if($request->hasFile('victim_voice') && $request->file('victim_voice')->isvalid()){
            $voice = $request->victim_voice->getClientOriginalExtension();
            $file_name = $user_name.$voice;
            // return response($file_name);
            $request->victim_voice->storeAs('public\voices', $file_name );
        }

        $voice = Voice::create([
            'user_id'=> $user->id,
            'victim_voice' => $file_name
        ]);

        Session::flash('success','LHRC thanks you for the voice incident report and looks forward for welcoming you.
            Our staff will do everything they can to process your incident efficiently as soon as possible.');
        return redirect()->intended( route('show-incident'));
    }

    //Display the specified resource.
    public function show(Voice $voice)
    {
        //
    }

    //Show the form for editing the specified resource.
    public function edit(Voice $voice)
    {
        //
    }

    //Update the specified resource in storage.
    public function update(Request $request, Voice $voice, $id)
    {
        $this->validate($request, [
            'voice_center'=>'required|string'
        ]);
        
        $voice = DB::table('voices')->where('id', $id)->update([
            'voice_center'=> $request->input('voice_center'),
            'voice_status'=> '8'
        ]);
        
        Session:: flash('success','Your voice center assignment has successfully');
        return redirect()->intended( route('voice-management'));
    }

    //Remove the specified resource from storage.
    public function destroy($id)
    {
        $voice = Voice::findOrFail($id)->delete();
        Session()->flash('success', 'Victim voice deleted successfully');
        return redirect()->back();
    }
}
