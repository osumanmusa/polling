<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\polling;
use App\Models\Code;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Http\Requests\DataRequest;

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
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ps_code)
    {
        $data = DB::table('polling_station')
            ->select('polling_station.*')->where('ps_code', '=', $ps_code)->first();
        return view('user.forms')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataRequest $request)
    {


        //Chairman Image
        $c_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/images/profiles/chairman'), $c_image);

        //Secretary Image
        $s_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/images/profiles/secretary'), $s_image);

        //Organizer Image
        $o_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/images/profiles/chairman'), $o_image);

        //Women's Organizer  Image
        $w_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/images/profiles/chairman'), $w_image);

        //Youth Organizer Image    
        $y_image = time() . '-' . $request->file('image')->getClientOriginalName() . '.' . $request->file('image')->extension();
        $request->file('image')->move(public_path('assets/images/profiles/chairman'), $y_image);


        $poller = new Data();
        $poller->name = $request->name;
        $poller->position = $request->position;
        $poller->gender = $request->gender;
        $poller->ps_code = $request->ps_code;
        $poller->phone = $request->phone;
        $poller->email = $request->email;
        $poller->voter_id = $request->voter_id;
        $poller->pic = $c_image;


        $s_poller = new Data();
        $s_poller->name = $request->s_name;
        $s_poller->position = $request->s_position;
        $s_poller->gender = $request->s_gender;
        $s_poller->ps_code = $request->ps_code;
        $s_poller->phone = $request->s_phone;
        $s_poller->email = $request->s_email;
        $s_poller->voter_id = $request->s_voter_id;
        $s_poller->pic = $s_image;

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


        // dd($poller);
        $poller->save();
        $w_poller->save();
        $s_poller->save();
        $y_poller->save();
        $o_poller->save();

        return view('user.message', compact('c_image'));
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
        //
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
