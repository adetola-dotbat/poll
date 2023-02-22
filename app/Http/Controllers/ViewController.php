<?php

namespace App\Http\Controllers;

use App\Models\President;
use App\Models\Reps;
use App\Models\Senate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ViewController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function loginUser(Request $request){
        $user = User::where('log_id', '=', $request->username)->first();
        if($user){
            $request->session()->put('loginUser', $user->log_id);
        }
        return redirect()->route('dashboard');
    }

    public function dashboard(){
        $presidentials = President::limit(5)->get();
        return view('pages.dashboard', compact('presidentials'));
    }

    public function president(){
        return view('pages.presidential');
    }

    public function rep(){
        return view('pages.rep');
    }

    public function senate(){
        return view('pages.senate');
    }
    
    public function presidentStore(Request $request){
        // return 'true';
        $president =  President::findorfail($request->input('user'))->first();
        $president->apc = $request->input('apc');
        $president->pdp = $request->input('pdp');
        $president->nnpp = $request->input('nnpp');
        $president->lp = $request->input('lp');
        $president->others = $request->input('others');
        $president->save();
        return redirect()->route('president');
    }

    public function repStore(Request $request){
        $president =  Reps::findorfail($request->input('user'))->first();
        $president->apc = $request->input('apc');
        $president->pdp = $request->input('pdp');
        $president->nnpp = $request->input('nnpp');
        $president->lp = $request->input('lp');
        $president->others = $request->input('others');
        $president->save();
        return redirect()->route('rep');

    }

    public function senateStore(Request $request){
        $president =  Senate::findorfail($request->input('user'))->first();
        $president->apc = $request->input('apc');
        $president->pdp = $request->input('pdp');
        $president->nnpp = $request->input('nnpp');
        $president->lp = $request->input('lp');
        $president->others = $request->input('others');
        $president->save();
        return redirect()->route('senate');

    }

    public function viewPresidential() {
        $presidentials = President::get();
       return view('pages.presidential_details', compact('presidentials'));
    }

    public function viewSenatorial() {
        $senatorial = Senate::get();
       return view('pages.senatorial_details', compact('senatorial'));
    }

    public function viewReps() {
        $reps = Reps::get();
       return view('pages.reps_details', compact('reps'));
    }

    public function presidentialPoll(){
        $apc_graph = President::sum('apc');
        $pdp_graph = President::sum('pdp');
        $nnpp_graph = President::sum('nnpp');
        $lp_graph = President::sum('lp');
        $others_graph = President::sum('others');
        return view('pages.graph', compact(
            'apc_graph',
            'pdp_graph',
            'nnpp_graph',
            'lp_graph',
            'others_graph',
        ));
    }

    public function senatorialPoll(){
        $central_apc = DB::table('senate')->where('senate', '=', '1')->get()->sum('apc');
        $central_pdp = DB::table('senate')->where('senate', '=', '1')->get()->sum('pdp');
        $central_nnpp = DB::table('senate')->where('senate', '=', '1')->get()->sum('nnpp');
        $central_lp = (int) DB::table('senate')->where('senate', '=', '1')->get()->sum('lp');
        $central_others = DB::table('senate')->where('senate', '=', '1')->get()->sum('others');

        $east_apc = DB::table('senate')->where('senate', '=', '2')->get()->sum('apc');
        $east_pdp = DB::table('senate')->where('senate', '=', '2')->get()->sum('pdp');
        $east_nnpp = DB::table('senate')->where('senate', '=', '2')->get()->sum('nnpp');
        $east_lp = DB::table('senate')->where('senate', '=', '2')->get()->sum('lp');
        $east_others = DB::table('senate')->where('senate', '=', '2')->get()->sum('others');

        $west_apc = DB::table('senate')->where('senate', '=', '3')->get()->sum('apc');
        $west_pdp = DB::table('senate')->where('senate', '=', '3')->get()->sum('pdp');
        $west_nnpp = DB::table('senate')->where('senate', '=', '3')->get()->sum('nnpp');
        $west_lp = DB::table('senate')->where('senate', '=', '3')->get()->sum('lp');
        $west_others = DB::table('senate')->where('senate', '=', '3')->get()->sum('others');

        return view('pages.senate_data',compact(
        'central_apc',
        'central_pdp',
        'central_nnpp',
        'central_lp',
        'central_others',
        'east_apc',
        'east_pdp',
        'east_lp',
        'east_nnpp',
        'east_others',
        'west_apc',
        'west_pdp',
        'west_lp',
        'west_nnpp',
        'west_others',
        ));
    }
    // public function result() {
    //    return view('pages.result');
    // }

    // public function reportDetails(){
    //     $reps = Reps::whereIn('lg_id', [1,15])->get();
    //     return view('pages.report_details',compact('reps'));
    // }

    public function repsData(){
        // binji
        $binji_report = Reps::whereIn('lg_id', [1,15]);
        // Dange
        $dange_report = Reps::whereIn('lg_id', [2,3]);
        // goronyo
        $goronyo_report = Reps::whereIn('lg_id', [4,5]);
        // illela
        $illela_report = Reps::whereIn('lg_id', [7,8]);
        // isah
        $isah_report = Reps::whereIn('lg_id', [9,13]);
        // kebbe
        $kebbe_report = Reps::whereIn('lg_id', [18,11]);
        // kware
        $kware_report = Reps::whereIn('lg_id', [10,21]);
        // snorth
        $snorth_report = Reps::whereIn('lg_id', [16,17]);
        // tangaza
        $tangaza_report = Reps::whereIn('lg_id', [6,19]);
        // wurno
        $wurno_report = Reps::whereIn('lg_id', [12,22]);
        // yabo
        $yabo_report = Reps::whereIn('lg_id', [23,14]);

        return view('pages.reps_data',compact(
            'binji_report', 'dange_report', 'goronyo_report', 'illela_report', 'isah_report', 'kebbe_report', 'kware_report',
            'snorth_report', 'tangaza_report', 'wurno_report', 'yabo_report'
           
        ));

    }

    public function centralReport(){
        $centralreports = Senate::where('senate', '=', '1')->get();
        return view('pages.senate_list_one',compact('centralreports'));
    }

    public function eastReport(){
        $eastreports = Senate::where('senate', '=', '2')->get();
        return view('pages.senate_list_two',compact('eastreports'));
    }

    public function westReport(){
        $westreports = Senate::where('senate', '=', '3')->get();
        return view('pages.senate_list_three',compact('westreports'));
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
       }
}