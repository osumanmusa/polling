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
        return view('home');
    }
     public function search(Request $request)
    { 

     $query = $request->get('query');
     $code = $request->get('code');

$search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('polling_station.ps_code', 'like', '%' . $query . '%')
        ->paginate(5);
    return view('user.table', compact('search'));



     /*

     if ($code =='EA_NAME') {
        
    $search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('Code.EA_NAME', 'like', '%' . $query . '%')
        ->paginate(5);
        dd($search);
    return view('user.table', compact( '$search'));
     }elseif($code=='ps_name'){
            $search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('polling_station.polling_station_name', 'like', '%' . $query . '%')
        ->paginate(5);
        dd($search);
    return view('user.table', compact( '$search'));

     }elseif($code=='ps_code'){
            $search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('polling_station.ps_code', 'like', '%' . $query . '%')
        ->paginate(5);
        dd($search);
    return view('user.table', compact( '$search'));

     }
            $search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('Code.ea_code', 'like', '%' . $query . '%')
        ->paginate(5);
        dd($search);
    return view('user.table', compact( '$search'));
    else{
     $search = DB::table('polling_station')
        ->join('Code', 'polling_station.code_id', '=', 'Code.id')
        ->select('polling_station.polling_station_name', 'polling_station.ps_code', 'Code.EA_CODE', 'Code.EA_NAME')
        ->where('Code.ea_code', 'like', '%' . $query . '%')
        ->paginate(5);
        dd($search);
    return view('user.table', compact( '$search'));
    }     

*/


    }
}
