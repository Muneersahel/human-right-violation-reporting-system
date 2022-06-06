<?php

namespace App\Http\Controllers;

use Input;
use Session;
use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    // Display a listing of the centers resources.
    public function index()
    {   
        $centers = DB::table('centers')->orderBy('name', 'asc')->paginate(10);
        // $json_string =  json_encode($centers);
        // $json_array =  json_decode($json_string, true);
        // // return $json_array;
        // return view('center.show')->with('json_array', $json_array );
        // return json_encode($centers['4'], JSON_PRETTY_PRINT);
        // $view = view('center.show1', ['center' => $centers])->render();
        // return  response()->json_decode(['center' => $centers]);
        return view('center.index',compact('centers'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Creating a new center resource.
    public function create()
    {
        return view('center.create');
    }

    // Store a newly created center resource in storage.
    public function store(Request $request)
    {
        $this -> validate($request, [
            'code' => 'required|alpha|unique:centers,code',
            'name' => 'required|unique:centers,name',
            'director' => 'required|unique:centers,director',
            'address' => 'required|string',
            'mobile_no' => 'required|unique:centers,mobile_no|digits:12',
            'fax_no' => 'required|unique:centers,fax_no|digits:12',
            'email' => 'required|string|email|max:255|unique:centers,email',
            'region' => 'required|string',
            'district' => 'required|string',
            'ward' => 'required|string',
            'street' => 'required|string',
            'remarks' => 'required|string|max:150',
        ]);

        $center = Center::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'director' => $request->input('director'),
            'address' => $request->input('address'),
            'mobile_no' => $request->input('mobile_no'),
            'fax_no' => $request->input('fax_no'),
            'email' => $request->input('email'),
            'region' => $request->input('region'),
            'district' => $request->input('district'),
            'ward' => $request->input('ward'),
            'street' => $request->input('street'),
            'remarks' => $request->input('remarks'),
        ]);
        
        Session()->flash('success','New center created successfully');
        return redirect()->intended( route('center-management'));

    }


    // Display the specified center resource.
    public function show(Request $request, Center $center)
    {   
        // $center = Center::all();
        // $center = DB::table('centers')->orderBy('name', 'asc')->paginate(10);

        // $center = Center::where('id', $request->id)->first();
        // $id = (int)$request->id;
        $id = (int)preg_replace('/\D/','',$request->id);
        $center = DB::table('centers')->where('id', $id)->first();
            if ($request->ajax()) {
                // $json_string = json_encode($center,JSON_PRETTY_PRINT);
                // $json_array = json_decode($json_string, true);
                // return $center;
                return view('center.show')->with('center', json_encode($center));
               
               // return view('center.show', compact('json_string'));
                // return view('center.show', ['json_array' => $json_array ]);
            }

        // return json_encode($center);
    
        // return view('center.show1', compact('center'));
        // return response()->json(['Data' => \App\Models\CountryModel::all()]);
        //  return json_encode($center);
        // $json = json_encode($center);
        // $json = json_encode(['Center' => $center]);
        // return $json_string;
        // ddd($center);
        //  $center = 'this is a test';
        //  $data = 'this is a test';
        // return view('center.show1')->with([$center]);
        // dd(json_encode($center));
        // return view('center.show', $json_string);
        // return view('center.show')->with('json', $json);
        // return view('center.show')->with('center', json_decode($center, true));
        // return view('center.show')->with('center', $center->getData()->Data);
        
        // if ($request->ajax()) {
        //     return json_encode($center,JSON_PRETTY_PRINT);
        // }

        // if ($center) {
        //     $view = view('center.show', ['center' => $center])->render();
        //     return json_encode(['center' => $center, 'view'=> $view]);
        //  }

        // return view('center.show')->with(compact('centers'))->render();
        // $view = view('center.show')->with(compact('center'))->render();
        // return response()->json_encode(['success' => true, 'view' => $view]);

        // return ddd([$center]);
        // return $center->toJson(JSON_PRETTY_PRINT);
        // return response()->json_encode($center);
        // return json($center);
        // $json =  JSON.stringify($center);
        // return $json;
        // return json_encode($center, JSON_PRETTY_PRINT);
        // return view('center.show')->with('center', json_encode($center,true));
        // view('your-view')->with('leads', json_decode($leads, true));
        // return view('center.show', ['center' => $center]);
        // return view('center.show', compact('data'));
    }

    // Show the form for editing the specified staff.
    public function edit(Center $center, $id)
    {
        $center = Center::find($id);
        return view('center.edit', compact('center'));
    }

   // Update the specified center in storage.
    public function update(Request $request, Center $center,$id)
    {
        $this -> validate($request, [
            'code' => 'required|alpha|unique:centers,code,'.$id,
            'name' => 'required|unique:centers,name,'.$id,
            'director' => 'required|unique:centers,director,'.$id,
            'address' => 'required|string',
            'mobile_no' => 'required|digits:12|unique:centers,mobile_no,'.$id,
            'fax_no' => 'required|digits:12|unique:centers,fax_no,'.$id,
            'email' => 'required|string|email|max:255|unique:centers,email,'.$id,
            'region' => 'required|string',
            'district' => 'required|string',
            'ward' => 'required|string',
            'street' => 'required|string',
            'remarks' => 'required|string|max:150',
        ]);

            $center = Center::find($id);// editing of center with $id
            $center->code = $request->input('code');
            $center->name = $request->input('name');
            $center->director = $request->input('director');
            $center->address = $request->input('address');
            $center->mobile_no = $request->input('mobile_no');
            $center->fax_no = $request->input('fax_no');
            $center->email = $request->input('email');
            $center->region = $request->input('region');
            $center->district = $request->input('district');
            $center->ward = $request->input('ward');
            $center->street = $request->input('street');
            $center->remarks = $request->input('remarks');
            $center->update();

            Session()->flash('success','Center updated successfully');
            return redirect()->intended( route('center-management'));
    }

    // Remove the specified center resource from storage.
    public function destroy(Center $center,$id)
    {
        $center = Center::findOrFail($id)->delete();
        Session::flash('success', 'The center deleted successfully');
        return redirect()->intended( route('center-management'));

    }
}