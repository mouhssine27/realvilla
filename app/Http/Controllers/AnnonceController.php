<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    //
     public function CreateAnonnce(request $REQUEST)
     {
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
            'image'=> $REQUEST->image,
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
            'fichiernavigateur'=>$REQUEST->fichiernavigateur,
            'zonenavigateur'=>$REQUEST->zonenavigateur,
            'descreption'=>$REQUEST->descreption,
            'titredetage'=>$REQUEST->titredetage,

         ]);
         if($createData){
            return "operation succes";
                 }
                 return "operation echou";

     }
     public function selectAnonce()
     {
        $createData  = Annonce::select()->get();
        return $createData;
     }
}
