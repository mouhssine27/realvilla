<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Offer;
use App\Models\Dureelocation;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

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
        if($REQUEST->longitude !=""){
          $longitude  =  $REQUEST->longitude;
        }else{
          $longitude  = "N/A";
        }
        if($REQUEST->atitude !=""){
          $atitude  =  $REQUEST->atitude;
        }else{
          $atitude  = "N/A";
        }
        if($REQUEST->urlvideo !=""){
          $urlvideo  =  $REQUEST->urlvideo;
        }else{
          $urlvideo  = "N/A";
        }

  $createData  = Annonce::create([
            "titre" => $REQUEST->titre,
            'Dureelocation' => $REQUEST->Dureelocation,
            'prix'=> $REQUEST->prix,
            'pieces'=> $REQUEST->pieces,
            'offre'=> $REQUEST->offre,
            'categorie'=> $REQUEST->categorie,
            'zone'=>$REQUEST->zone,
            'urlvideo'=>$urlvideo ,
            'userid'=> auth::id(),
            'image'=> $file_name ,
            'adressegoogle'=> $REQUEST->adressegoogle,
            'longitude'=> $longitude,
            'adressamicale'=> $REQUEST->adressamicale,
            'atitude'=> $atitude ,
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
            'validation' =>"non"
  ]);
         
         if($createData){
    return redirect()->back()->with('success', 'ajoutre de votre annonce à éte bien enregistré');
                 }
                 return "operation echou";

     }
     public function pageprincipale()
     {
         $createData  = DB::Select('select * from annonces where annonces.id!="" limit 12');
        $categories  =$user_info = annonce::groupBy('categorie')->select('categorie', DB::raw('count(*) as total'))->get();
        $zonenavigateur = annonce::groupBy('zonenavigateur')->select('zonenavigateur', DB::raw('count(*) as total'))->get();
    return  $profile =Annonce::select()
        ->join("annonces", "users.id", "=", "annonces.userid")
        ->get()->groupBy('id');
        return view("welcome",compact('createData','categories','zonenavigateur','profile'));
    }
     public function propertySubmit()
     {
       $zon = ['casablanca' , 'rabat' ,'mohamadia' , 'berchid' , 'settat'];
    $categories = Categorie::select()->get();
    $Offer =  Offer::select()->get();
    $Dureelocations =  Dureelocation::select()->get();
    return view('submit-property', compact('categories','Dureelocations','Offer','zon'));
     }

    
     public function propertlist()
     {   
       $data = Annonce::paginate(5);
         $dataCount=Annonce::paginate(5)->lastPage();
         ///modificatuion ou niveaux Categorie
        $categoriesee = Categorie::select()->get();   
        $Offere =  Offer::select()->get();
        ///modification pour total Categorie  et total offere
        $categoriesTotale = annonce::groupBy('categorie')->select('categorie', DB::raw('count(*) as total'))->get();
        $offereTotale   = annonce::groupBy('offre')->select('offre', DB::raw('count(*) as total'))->get();
      return view('property_list',compact('data','dataCount','categoriesee','Offere','categoriesTotale','offereTotale'));
     }
     ///////afficher itemse par id 
     public function propertylistID($id )
     {
        $data  = Annonce::select()->where('categorie',$id)->get();
        ///modificatuion ou niveaux Categorie
        $categoriesee = Categorie::select()->get();   
        $Offere =  Offer::select()->get();
        ///modification pour total Categorie  et total offere
        $categoriesTotale = annonce::groupBy('categorie')->select('categorie', DB::raw('count(*) as total'))->get();
        $offereTotale   = annonce::groupBy('offre')->select('offre', DB::raw('count(*) as total'))->get();
      return view ('propriete',compact('data','categoriesee','Offere','categoriesTotale','offereTotale'));
     }
///////function details annonce 
public function details($name,$id)
{  
  $databrt = annonce::find($id);
 $profile  = User::select()->where('id',$databrt->userid)->get();
  
    $dtailsParCategories = DB::Select("select * from annonces where annonces.categorie='$name' limit 3");
  return view("afficherInformation",compact('dtailsParCategories','databrt','profile'));
}

}
