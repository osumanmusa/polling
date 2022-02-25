<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\polling;
use App\Models\Code;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    // $datum = DB::table('polling_station')
    // ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
    // ->select('code', 'Code.*')->get();

    $polling_station_names = DB::table('polling_station')->select('polling_station_name', 'ps_code as polling_code')->get();

    $ea_names = DB::table('Code')->select('EA_NAME', 'EA_CODE  as ea_code')->get();

    $merged = $ea_names->merge($polling_station_names);

    $datum = $merged->all();


    return view('user.index')->with('datum', $datum);


    //return view('home')->with('datum', $datum);
  }

  public function search(Request $request)
  {
    $request->validate([
      'code' => 'required',
      'query' => 'required'
    ]);
    $data = "";

    $code = $request->get('code');
    $query = $request->get('query');


    if ($code == 'ea_name') {

      $data = 'Code.EA_NAME';
    } elseif ($code == 'ea_code') {
      $data = 'Code.ea_code';
    } elseif ($code == 'ps_name') {
      $data = 'polling_station.polling_station_name';
    } elseif ($code == 'ps_code') {

      $data = 'polling_station.ps_code';
    }


    $search = DB::table('polling_station')
      ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
      ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME', 'polling_station.id', 'Code.id', 'polling_station.Code_id')
      ->where($data, 'like', '%' . $query . '%')
      ->paginate(10);
      return view('user.table1',compact('search'));
    //return view('user.table', compact('search'));
  }
  public function autocomplete(Request $request)
  {
    $query = $request->get('term', '');

    $datum = DB::table('polling_station')
      ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
      ->select('polling_station.*', 'Code.*')->get();
    $data = array();
    foreach ($datum as $datum) {
      $data[] = array($datum->ps_code, $datum->EA_NAME, $datum->EA_CODE, $datum->polling_station_name);
    }
    if (count($data))
      return $data;
    else
      return ['value' => 'No Result Found', 'id' => ''];
  }





  /*  public function autocomplete(Request $request)

    {
$data =  $datum = DB::table('polling_station')
        ->join('Code', 'polling_station.Code_id', '=', 'Code.id')
        ->select('polling_station.*', 'Code.*')->get();


   

        return response()->json($data);

    }*/
}
