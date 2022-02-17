<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\polling;
use App\Models\Code;
use Illuminate\Support\Facades\DB;
use APP\Models\Data;


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
        ->select('polling_station.*')->where('ps_code','=',$ps_code)->first();
       return view('user.forms')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      dd($request->all());
        $this->validate($request,[
            $name = $request->name,
            $position = $requst->position,
            $ps_code = $requst->ps_code,
            $gender = $request->gender,
            $phone = $request->phone,
            $email = $request->email,
            $voter_id = $request->voter_id,
            $image = $request->image,
            $s_name = $request->s_name,
            $s_position = $requst->s_position,
            $s_gender = $request->s_gender,
            $s_phone = $request->s_phone,
            $s_email = $request->s_email,
            $s_voter_id = $request->s_voter_id,
            $s_image = $request->s_image,
            $o_name = $request->o_name,
            $o_position = $requst->o_position,
            $o_gender = $request->o_gender,
            $o_phone = $request->o_phone,
            $o_email = $request->o_email,
            $o_voter_id = $request->o_voter_id,
            $o_image = $request->o_image,
            $w_name = $request->w_name,
            $w_position = $requst->w_position,
            $w_gender = $request->w_gender,
            $w_phone = $request->w_phone,
            $w_email = $request->w_email,
            $w_voter_id = $request->w_voter_id,
            $w_image = $request->w_image,
            $y_name = $request->y_name,
            $y_position = $requst->y_position,
            $y_gender = $request->y_gender,
            $y_phone = $request->y_phone,
            $y_email = $request->y_email,
            $y_voter_id = $request->y_voter_id,
            $y_image = $request->y_image
        ]);

      
           if($request->hasfile('image'))
        {
             foreach($request->file('image') as $file)
             {
                 $name = time() . '-'. uniqid() . '.'.$file->extension();
                 $file->move(public_path().'/assets/images/', $name);  
                 $data[] = $name;  
             }
        }
          if($request->hasfile('s_image'))
        {
             foreach($request->file('s_image') as $s_file)
             {
                 $s_name = time() . '-'. uniqid() . '.'.$s_file->extension();
                 $s_file->move(public_path().'/assets/images/', $s_name);  
                 $s_data[] = $s_name;  
             }
        }
           if($request->hasfile('o_image'))
        {
             foreach($request->file('o_image') as $o_file)
             {
                 $o_name = time() . '-'. uniqid() . '.'.$o_file->extension();
                 $o_file->move(public_path().'/assets/images/', $o_name);  
                 $o_data[] = $o_name;  
             }
        }
           if($request->hasfile('w_image'))
        {
             foreach($request->file('w_image') as $w_file)
             {
                 $w_name = time() . '-'. uniqid() . '.'.$w_file->extension();
                 $w_file->move(public_path().'/assets/images/', $w_name);  
                 $w_data[] = $w_name;  
             }
        }
           if($request->hasfile('y_image'))
        {
             foreach($request->file('y_image') as $y_file)
             {
                 $y_name = time() . '-'. uniqid() . '.'.$y_file->extension();
                 $y_file->move(public_path().'/assets/images/', $y_name);  
                 $y_data[] = $y_name;  
             }
        }

    $poller = new Data();
        $poller->name = $request->name;
        $poller->position = $request->position;
        $poller->sex = $request->gender;
        $poller->$ps_code = $requst->ps_code;
        $poller->phone = $request->phone;
        $poller->email = $request->email;
        $poller->voter_id = $request->voter_id;
        $poller->pic = json_encode($data);
        $poller->save();
    $poller = new Data();
        $poller->s_name = $request->s_name;
        $poller->s_position = $requst->s_position;
        $poller->s_gender = $request->s_gender;
        $poller->$ps_code = $requst->ps_code;
        $poller->s_phone = $request->s_phone;
        $poller->s_email = $request->s_email;
        $poller->s_voter_id = $request->s_voter_id;
        $poller->pic = json_encode($s_data);
        $poller->save();
    $poller = new Data();
        $poller->o_name = $request->o_name;
        $poller->o_position = $requst->o_position;
        $poller->o_gender = $request->o_gender;
        $poller->$ps_code = $requst->ps_code;
        $poller->o_phone = $request->o_phone;
        $poller->o_email = $request->o_email;
        $poller->o_voter_id = $request->o_voter_id;
        $poller->pic = json_encode($o_data);
        $poller->save();
    $poller = new Data();
        $poller->w_name = $request->w_name;
        $poller->w_position = $requst->w_position;
        $poller->w_gender = $request->w_gender;
        $poller->$ps_code = $requst->ps_code;
        $poller->w_phone = $request->w_phone;
        $poller->w_email = $request->w_email;
        $poller->w_voter_id = $request->w_voter_id;
        $poller->pic = json_encode($w_data);
        $poller->save();
    $poller = new Data();
        $poller->y_name = $request->y_name;
        $poller->y_position = $requst->y_position;
        $poller->y_gender = $request->y_gender;
        $poller->$ps_code = $requst->ps_code;
        $poller->y_phone = $request->y_phone;
        $poller->y_email = $request->y_email;
        $poller->y_voter_id = $request->y_voter_id;
        $poller->pic = json_encode($y_data);
        $poller->save();
        return view('user.message');
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
