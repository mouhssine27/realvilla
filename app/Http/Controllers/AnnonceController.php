<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Offer;
use DB;

class AnnonceController extends Controller
{
    //
     public function CreateAnonnce(request $REQUEST)
     {
      //uplouad users //
if($REQUEST->image !=""){
$file_extension =$REQUEST->image->getClientOriginalExtension();
$file_name =time().'.'.$file_extension;
$path ='annonce';
$REQUEST->image->move($path,$file_name);
     }
    //uplouad navigateur //
    if($REQUEST->fichiernavigateur!=""){
   $file_extension1 =$REQUEST->fichiernavigateur->getClientOriginalExtension();
$file_name1=time().'.'.$file_extension1;
$path1 ='navigateur';
$REQUEST->fichiernavigateur->move($path1,$file_name1);
    }
  $createData  = Annonce::create([
            "titre" => $REQUEST->titre,
            'Dureelocation' => $REQUEST->Dureelocation,
            'prix'=> $REQUEST->prix,
            'pieces'=> $REQUEST->pieces,
            'offre'=> $REQUEST->offre,
            'categorie'=> $REQUEST->categorie,
            'zone'=>$REQUEST->zone,
            'urlvideo'=>$REQUEST->urlvideo,
            'userid'=> "1",
            'image'=> $file_name ,
            'adressegoogle'=> $REQUEST->adressegoogle,
            'longitude'=> $REQUEST->longitude,
            'adressamicale'=> $REQUEST->adressamicale,
            'atitude'=> $REQUEST->atitude,
            'region'=> $REQUEST->region,
            'agebatiment'=>$REQUEST->agebatiment,
            'sallebain'=>$REQUEST->sallebain,
            'refoidissement'=>$REQUEST->refoidissement,
            'egout'=>$REQUEST->egout,
            'salledentrement'=>$REQUEST->salledentrement,
            'chambres'=>$REQUEST->chambres,
            'parking'=>$REQUEST->parking,
            'chauffage'=>$REQUEST->chauffage,
            'eau'=> $REQUEST->eau,
            'piecestokage'=>$REQUEST->piecestokage,
            'fichiernavigateur'=>$file_name1,
            'zonenavigateur'=>$REQUEST->zonenavigateur,
            'descreption'=>$REQUEST->descreption,
            'titredetage'=>$REQUEST->titredetage,
  ]);
         
         if($createData){
            return "operation succes";
                 }
                 return "operation echou";

     }
     public function pageprincipale()
     {
        $createData  = DB::Select('select * from annonces where annonces.id!="" limit 6');
        return view("welcome",compact('createData'));
     }

     public function propertySubmit()
     {
    $categories = Categorie::select()->get();
    $Offer =  Offer::select()->get();
    return view('submit-property', compact('categories','Offer'));
     }
}
