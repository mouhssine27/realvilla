<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Offer;
use App\Models\User;
use App\Models\Agency;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    //
    public function AdminSelect()
    {
         $AnnonceSelect =Annonce::select()->get();
         $user  = User::select()->get();
         $agency  = Agency::select()->get();
        return view('AdminDachbouard',compact('AnnonceSelect','user','agency'));
    }
    public function CreateAgencity(request $request)
    { 

        $file_extension=$request->image->getClientOriginalExtension();
         $file_name=time().'.'.$file_extension;
         $path ='AgencyFile';
         $request->image->move($path,$file_name);
         if($request->websit!=""){
            $web = $request->websit;
         }else{
            $web ="N/A";
         }
         if($request->lisencs!=""){
            $lisencs = $request->lisencs;
         }else{
            $lisencs ="N/A";
         }
         $data  = Agency::create([
            'nom' => $request->nom,
            'description' =>$request->description,
            'image' =>$file_name,
            'adressemail'=>$request->adressemail,
            'websit'=>  $web,
            'agency'=>$request->agency,
            'lisencs'=> $lisencs,
            'telephone'=>$request->telephone,
            'societe'=>$request->societe,
            'numberphoneS'=>$request->numberphoneS,
         ]);
         if($data){
            return 'votre acces succes ';
         }
        
    }
    public function SupprimerAnnonce (request $request)
    {
        $res=Annonce::where('id',$request->idannonce)->delete();
        return "operation succes ";
    }
    public function Supprimerutulisateur (request $request)
    {
        $res=User::where('id',$request->utul)->delete();
        return "operation succes ";
    }
    public function Supprimeragency (request $request)
    {
        $res=Agency::where('id',$request->agily)->delete();
        return "operation succes ";
    }
}
