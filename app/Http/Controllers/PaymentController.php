<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\User;
use App\Models\State;
use App\Models\Survey;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    
    // Display a listing of the resource.
    public function index()
    {   
        $user = User::find(auth()->user()->id);
        $payments = Payment::paginate(10)->all();
        return view('payment.index', compact('user','payments'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function index1()
    {   
        $user = User::find(auth()->user()->id);
        $application = Application::where('user_id', $user->id)->where('application_state', 2)->first();
        $payment = DB::table('applications')
            ->join('users', 'users.id', '=' , 'applications.user_id')
            ->join('payments', 'payments.mobile_no', '=','users.mobile_no')
            ->where('users.id', '=', $user->id)
            ->whereIn('applications.application_state', [3,4])->first();
        return view('payment.index1', compact('application','payment'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('payment.create');
    }

    public function create1()
    {   
        $user = User::find(auth()->user()->id);
        $application = Application::where('user_id', $user->id)->where('application_state', 2)->first();
        $payment = Payment::where('mobile_no', $user->mobile_no)->first();
        return view('payment.create1',compact('application','payment'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request, Payment $payment)
    {
        $this -> validate($request, [
            'transaction_id' => 'required',
            'amount' => 'required|numeric',
            'name' => 'required',
            'mobile_no' => 'required|digits:12',
        ]);
            $user = User::find(auth()->user()->id);
            $application = Application::where('user_id', $user->id)->where('application_state', 2)->first();
            $payment = Payment::where('mobile_no', $user->mobile_no)->first();

            $amount = $request->input('amount');
            $transid = $request->input('transaction_id');
            $mobile = $request->input('mobile_no');
            $cost = $application->service_line_cost;
            $paid = $payment->amount;

            if (($amount >= $cost) && ($paid >= $cost) && ($paid >= $amount) ) {
                if ($transid == $payment->transaction_id) {
                    if ($mobile == $payment->mobile_no) {
                        DB::beginTransaction();
                            $confirm = Payment::find($payment->id);
                            $confirm->mobile_no = $mobile;
                            $confirm->transaction_id = $transid;
                            $confirm->name = $request->input('name');
                            $confirm->amount = $amount;
                            $confirm->update();

                            $app = Application::find($application->id);
                            $app->application_state = '3';
                            $app->update();
                        DB::commit();
                    } else {
                        return back()->with('failure', 'We can not find payment with that mobile number.');
                    }
                    
                } else {
                    return back()->with('failure', 'We can not find payment with that transactionID.');
                }
                
            } else {
                return back()->with('failure', 'We have either entered less amount or not paid yet.');
            }

            Session::flash('success','Your payment has successfully confirmed.');
            return redirect()->intended( route('show-payment'));
    }

     // Store a newly created resource in storage.
    public function store2(Request $request)
    {
        $this -> validate($request, [
            'transaction_id' => 'required',
            'amount' => 'required|numeric',
            'name' => 'required',
            'mobile_no' => 'required|digits:12|unique:payments,mobile_no',
        ]);

        $payment = Payment::create([
            'transaction_id' => $request->input('transaction_id'),
            'amount' => $request->input('amount'),
            'name' => $request->input('name'),
            'mobile_no' => $request->input('mobile_no'),
        ]);

        Session::flash('success','Your survey has sent successfully.');
        return redirect()->intended( route('index-payment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'transaction_id' => 'required',
            'amount' => 'required|numeric',
            'name' => 'required',
            'mobile_no' => 'required|digits:12|unique:payments,mobile_no',
            // 'payment_date' => 'required',
        ]);

           DB::beginTransaction();

           $payment = Payment::create([
                'transaction_id' => $request->input('transaction_id'),
                'amount' => $request->input('amount'),
                'name' => $request->input('name'),
                'mobile_no' => $request->input('mobile_no'),
                // 'payment_date' => $request->input('payment_date'),
           ]);

            $mobile = $request->input('mobile_no');
            $application = DB::table('applications')
                ->join('users', 'users.id', '=' , 'applications.user_id')
                ->where('applications.application_state',2)
                ->where('users.mobile_no', $mobile)
                ->select('*','applications.id as application_id')
                ->first();
                // ->update(['applications.application_state'=>3]);

            if (($application->service_line_cost)== ($request->input('amount'))) {
                $application = Application::find($application->application_id);
                $application->application_state = '3';
                $application->update();
            } 
            else {
                Session::flash('failure','Your amount is insiffient.');
                return redirect()->back();
            }
            
            DB::commit();
            Session::flash('success','Your survey has sent successfully.');
            return redirect()->intended( route('index-payment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
