<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\polling;
use App\Models\Code;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Models\grouppicture;
use App\Http\Requests\DataRequest;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($ps_code)
    {
        $search = DB::table('polling_station')
            ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
            ->select('polling_station.polling_station_name', 'Code.EA_NAME')
            ->where('polling_station.ps_code', 'like', '%' . $ps_code . '%')
            ->get();



        $pollers = Data::where('ps_code', $ps_code)->get();

        return view('user.list')->with('pollers', $pollers)->with('ps_code', $ps_code)->with('search', $search);
        ///  return view('user.message')->with('pollers', $pollers)->with('ps_code', $ps_code)->with('search', $search);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ps_code)
    {
        $check = Data::where('ps_code', $ps_code)->get();

        if (count($check) > 0) {
            return redirect()->route('form.index', $ps_code);
        }


        $data = DB::table('polling_station')
            ->select('polling_station.*')->where('ps_code', '=', $ps_code)->first();

        return view('user.form1', compact('data'));
        // return view('user.forms')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {


        $g_image = time() . '-' . $request->file('g_image')->getClientOriginalName() . '.' . $request->file('g_image')->extension();
        $request->file('g_image')->move(public_path('assets/images/profiles/'), $g_image);


        $images = $request->file('image');

        $c_image = time() . '-' . $images[0]->getClientOriginalName() . '.' . $images[0]->extension();
        $images[0]->move(public_path('assets/images/profiles/'), $c_image);

        $s_image = time() . '-' . $images[1]->getClientOriginalName() . '.' . $images[1]->extension();
        $images[1]->move(public_path('assets/images/profiles/'), $s_image);

        $o_image = time() . '-' . $images[2]->getClientOriginalName() . '.' . $images[2]->extension();
        $images[2]->move(public_path('assets/images/profiles/'), $o_image);

        $w_image = time() . '-' . $images[3]->getClientOriginalName() . '.' . $images[3]->extension();
        $images[3]->move(public_path('assets/images/profiles/'), $w_image);

        $y_image = time() . '-' . $images[4]->getClientOriginalName() . '.' . $images[4]->extension();
        $images[4]->move(public_path('assets/images/profiles/'), $y_image);



        //Chairman 
        $poller = new Data();
        $poller->name = $request->name;
        $poller->position = $request->position;
        $poller->gender = $request->gender;
        $poller->ps_code = $request->ps_code;
        $poller->phone = $request->phone;
        $poller->email = $request->email;
        $poller->voter_id = $request->voter_id;
        $poller->pic = $c_image;
        $poller->dob = $request->dob;

        //Secretary
        $s_poller = new Data();
        $s_poller->name = $request->s_name;
        $s_poller->position = $request->s_position;
        $s_poller->gender = $request->s_gender;
        $s_poller->ps_code = $request->ps_code;
        $s_poller->phone = $request->s_phone;
        $s_poller->email = $request->s_email;
        $s_poller->voter_id = $request->s_voter_id;
        $s_poller->pic = $s_image;
        $s_poller->dob = $request->s_dob;

        //Organizer Data
        $o_poller = new Data();
        $o_poller->name = $request->o_name;
        $o_poller->position = $request->o_position;
        $o_poller->gender = $request->o_gender;
        $o_poller->ps_code = $request->ps_code;
        $o_poller->phone = $request->o_phone;
        $o_poller->email = $request->o_email;
        $o_poller->voter_id = $request->o_voter_id;
        $o_poller->pic = $o_image;
        $o_poller->dob = $request->o_dob;

        //Women's Organizer
        $w_poller = new Data();
        $w_poller->name = $request->w_name;
        $w_poller->position = $request->w_position;
        $w_poller->gender = $request->w_gender;
        $w_poller->ps_code = $request->ps_code;
        $w_poller->phone = $request->w_phone;
        $w_poller->email = $request->w_email;
        $w_poller->voter_id = $request->w_voter_id;
        $w_poller->pic = $w_image;
        $w_poller->dob = $request->w_dob;

        //Youth Organizer
        $y_poller = new Data();
        $y_poller->name = $request->y_name;
        $y_poller->position = $request->y_position;
        $y_poller->gender = $request->y_gender;
        $y_poller->ps_code = $request->ps_code;
        $y_poller->phone = $request->y_phone;
        $y_poller->email = $request->y_email;
        $y_poller->voter_id = $request->y_voter_id;
        $y_poller->pic = $y_image;
        $y_poller->dob = $request->y_dob;

        //Group image
        $group = new grouppicture();
        $group->ps_id = $request->ps_code;
        $group->picture = $g_image;


        //Save the data in database
        $poller->save();
        $w_poller->save();
        $s_poller->save();
        $y_poller->save();
        $o_poller->save();
        $group->save();

        return redirect()->route('form.index', $request->ps_code);
    }

    //Function to convert from html to  PDF 
    public function createPDF($ps_code)
    {

        // retreive records from  data table
        $search = DB::table('polling_station')
            ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
            ->select('polling_station.polling_station_name', 'Code.EA_NAME')
            ->where('polling_station.ps_code', 'like', '%' . $ps_code . '%')
            ->get();

        $pollers = Data::where('ps_code', $ps_code)->get();
        $pdf = PDF::loadView('user.trial', compact('pollers', 'search'));

        return $pdf->stream('user.trial', array('Attachment' => false));
    }



    //Function to convert from html to  excel 
    public function createcsv($ps_code)
    {
        // retreive all records from db
        $data = Data::where('ps_code', $ps_code)->get();
        return Excel::download(new UsersExport($ps_code), 'trial.xlsx');
    }






    // Update Holder's Information

    public function updateform(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'nullable|email|max:255',
            'dob' => 'required',
            'gender' => 'required',
            'voter_id' => 'required|regex:/^\d{10}$/',
            'phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/'
        ]);
        $data = Data::where('id', $id)->firstOrFail();

        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            //Delete old image from storage
            $imagePath = "/assets/images/profiles/" . $data->pic;

            if (\File::exists(public_path($imagePath))) {
                \File::delete(public_path($imagePath));
            }

            //upload new image 
            $image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path('assets/images/profiles/'), $image);
            $data->pic = $image;
        }


        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->dob = $request->dob;
        $data->email = $request->email;
        $data->voter_id = $request->voter_id;
        $data->phone = $request->phone;

        //update the changed data
        $data->update();



        return redirect()->route('form.index', $data->ps_code);
    }

    function edit($id)
    {


        $data = Data::find($id);
        return view('user.edit1', compact('data'));
        //  return view('user.edit', compact('data'));
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
