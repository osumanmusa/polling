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
         $pollers=Data::latest()->paginate(10);
      $pollerscount = Data::all()->count();

        return view('user.message')->with('pollers',$pollers)->with('pollerscount',$pollerscount);
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
   //  dd($request);
     
        $g_image = time() . '-' . $request->file('g_image')->getClientOriginalName() . '.' . $request->file('g_image')->extension();
        $request->file('g_image')->move(public_path('assets/images/profiles/'), $g_image);

        
        $images = $request->file('image');

        $c_image = time() . '-' . $images[0]->getClientOriginalName() . '.' . $images[0]->extension()  ; 
        $images[0]->move(public_path('assets/images/profiles/'), $c_image);

        $s_image = time() . '-' . $images[1]->getClientOriginalName() . '.' . $images[1]->extension()  ; 
        $images[1]->move(public_path('assets/images/profiles/'), $s_image);

        $o_image = time() . '-' . $images[2]->getClientOriginalName() . '.' . $images[2]->extension()  ; 
        $images[2]->move(public_path('assets/images/profiles/'), $o_image);

        $w_image = time() . '-' . $images[3]->getClientOriginalName() . '.' . $images[3]->extension()  ; 
        $images[3]->move(public_path('assets/images/profiles/'), $w_image);
          
        $y_image = time() . '-' . $images[4]->getClientOriginalName() . '.' . $images[4]->extension()  ; 
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
        $w_poller->pic= $w_image;
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
        $group->ps_id= $request->ps_code;
        $group->picture= $g_image;
        

        //Save the data in database
        $poller->save();
        $w_poller->save();
        $s_poller->save();
        $y_poller->save();
        $o_poller->save();
        $group->save();

        return redirect()->route('form.index');
     
    }

//Function to convert from html to  PDF 
  public function createPDF() {
      // retreive all records from db
     // $data = Data::where('ps_code' , $ps_code)->get();
       $pollers = Data::all();
      
      // share data to view
      view()->share('user.message',$pollers);
     $pdf = PDF::loadView('user.trial', compact('pollers'));
    // dd($pdf);
      // download PDF file with download method
     return $pdf->stream('user.trial', array('Attachment'=>false));
      //return $pdf->download('trial.pdf');

    }
//Function to convert from html to  PDF 
  public function createcsv() {
      // retreive all records from db
     // $data = Data::where('ps_code' , $ps_code)->get();
return Excel::download(new UsersExport, 'trial.xlsx');

    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'image.0' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'image.1' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'image.2' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'image.3' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
            'image.4' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048'
        ]);

        $data = $request->post();
        $ps_code= $request->ps_code;
       //dd($code);
        

        $images = $request->file('image');
        $positions = $data['position'];

         for ($i=0; $i<count($images); $i++) {
        
        
            $image = time() . '-' . $images[$i]->getClientOriginalName() . '.' . $images[$i]->extension()  ; 
            $images[$i]->move(public_path('assets/images/profiles/'), $image);

       
              $position = strtolower($positions[$i]);
       
            $pos ='';
              switch ($position) {
                    case 'chairman':
                   $pos = 'Chairman';
                   DB::update('update Data set pic = ? where ps_code = ? and position = ?',[$image , $ps_code,$pos]);      
                        
                        break;

                    case 'secretary':
                    $pos = 'Secretary';
                     DB::update('update Data set pic = ? where ps_code = ? and position = ?',[$image , $ps_code , $pos]); 
                    

                        break;
                    case 'organizer':
                    $pos = 'Organizer';
                    DB::update('update Data set pic = ? where ps_code = ? and position = ?',[$image , $ps_code,$pos]);
                     
                     
                        break;
                    case "women's organizer":
                    $pos = "Women's Organizer";
                     DB::update("update Data set pic = ? where ps_code = ? and position = ?",[$image , $ps_code,$pos]);
                     
                        break;
                    case 'youth organizer':
                    $pos ='Youth Organizer';
                     DB::update('update Data set pic = ? where ps_code = ? and position = ?',[$image , $ps_code,$pos]);
                    
                        break;
        }

        }

      
   

        return redirect()->route('form.index');
    }
       public function updateform($id)
    {

     
           return view('user.insert',compact('id'));
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
