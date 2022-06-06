<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\Sms;
use App\Models\User;
use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmsController extends Controller
{
    //Display a listing of the resource.
    public function index(Sms $sms)
    {
        $user = User::find(Auth::user()->id);
        $center = Center::orderBy('name','asc')->pluck('name','code')->all();
        switch ($user->role) {
            case 'Supadmin':
                $sms = DB::table('sms')->where([['sms_center', '=', 'HQ'], ['sms_status', '=', '5'],])->orderBy('received_date', 'asc')->paginate(10);
                return view('sms.index',compact('user', 'sms','center'))->with('i', (request()->input('page', 1) - 1) * 10);
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
        return view('sms.create');
    }

    //Store a newly created resource in storage.
    public function store(Request $request, User $id)
    {
        $this -> validate($request, [

            'sms'=>'required|string',
        ]);

        $user= User::find(auth()->user()->id);
        $sms = Sms::create([
            'mobile_no'=>$user->mobile_no,
            'sms'=>$request->input('sms')
        ]);

        Session:: flash('success','Your sms has sent successfully');
        return redirect()->intended( route('show-incident'));
    }

    //Display the specified resource.
    public function show($id)
    {
        $sms = Sms::find($id)->first();
        return view('sms.show', compact('sms'));
    }

    //Show the form for editing the specified resource.
    public function edit(Sms $sms, $id)
    {
        $sms = Sms::find($id);
        $center = Center::orderBy('name','asc')->pluck('name','code')->all();
        return view('sms.edit', compact('sms', 'center'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, Sms $sms, $id)
    {
        $this->validate($request, [
            'sms_center'=>'required|string'
        ]);
        
        $sms = DB::table('sms')->where('id', $id)->update([
            'sms_center'=> $request->input('sms_center'),
            'sms_status'=> '6'
        ]);
        
        Session:: flash('success','Your sms assignment has successfully');
        return redirect()->intended( route('sms-management'));
    }

    //Remove the specified resource from storage.
    public function destroy($id)
    {
        $sms = Sms::findOrFail($id)->delete();
        Session()->flash('success', 'Sms deleted successfully');
        return redirect()->back();
    }
}
