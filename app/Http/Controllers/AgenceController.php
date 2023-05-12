<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;

class AgenceController extends Controller
{
    public function index(){
        $agences = Agency::all();
        // $paginateAnonces = Agency::paginate(5);
        // $paginateAnoncesCount=Agency::paginate(5)->lastPage();
        return view('agency-grid',compact('agences','paginateAnonces','paginateAnoncesCount'));
    }
    public function show(request $request , $idAgence){
        $agence = Agency::find($idAgence)->first();
        return view('agency-details',compact('agence'));

    }

    
}