<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dureelocation;

use App\Models\Annonce;
use App\Models\Categorie;

use App\Models\Offer;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile(){
       $authUser =  Auth::user();
        return view('users.profile',compact('authUser'));
    }

    public function UpdateProfile(request $request){
        // return 1;
        $data= $request->all();       
        $idUser = Auth::id();
        if($request->image !=""){
            $file_extension =$request->image->getClientOriginalExtension();
            $file_name =time().'.'.$file_extension;
            $path ='imageUser';
            $request->image->move($path,$file_name);
                 }
                 $user= User::find($idUser);
                 $user->name = $data['name'];   
                 $user->phone = $data['phone'];   
                 $user->ville = $data['ville']; 
                 if(isset($file_name)){
                    $user->image = $file_name; 
                 }
                 $user->save()  ;
                 return redirect()->back()->with('success', 'modification à éte bien enregistré');   
    }
    public function annonces(){
        $idUser = Auth::id();
        $annonnces = Annonce::where('userid',$idUser)->get();
        $FindAnnonce = Annonce::where('userid',$idUser)->first();
        if(isset( $FindAnnonce->Dureelocation, $FindAnnonce->categorie,$FindAnnonce->offre,$FindAnnonce->pieces,$FindAnnonce->chambres,$FindAnnonce->sallebain)){
            $annonceDureLocation =  $FindAnnonce->Dureelocation;
            $annonceCategorie =  $FindAnnonce->categorie;
            $annonceOffre =  $FindAnnonce->offre;
            $annoncePieces =  $FindAnnonce->pieces;
            $annonceChambres =  $FindAnnonce->chambres;
            $annonceSalleBain =  $FindAnnonce->sallebain;
            $dureeLocations = Dureelocation::select()->get();
            $offres = Offer::select()->get();
            $categories = Categorie::select()->get();
            return view('users.annonces',compact('annonnces','dureeLocations','offres','categories','annonceDureLocation','annonceCategorie','annonceOffre','annoncePieces','annoncePieces','annonceChambres','annonceSalleBain'));
        }
        else{
            return view('users.annonces',compact('annonnces'));
        }


        }
    
       
        // return $categories;

        
        // return $annonnces;
        
        // return $annonnces;
      

    public function updateAnnonce(request $request, $idAnnonce){
        $data= $request->all();     
        $idUser = Auth::id();  
        $annonce= Annonce::find($idAnnonce);
        $annonce->titre = $data['titre'];   
        $annonce->prix = $data['prix'];   
        $annonce->Dureelocation = $data['dureelocation']; 
        $annonce->offre = $data['Offres'];   
        $annonce->categorie = $data['categorie'];   
        $annonce->pieces = $data['Pieces']; 
        $annonce->chambres = $data['chambres'];   
        $annonce->zone = $data['zone'];   
        $annonce->parking = $data['parking']; 
        $annonce->sallebain = $data['salleBain'];   
        $annonce->chauffage = $data['chauffage']; 
        $annonce->descreption = $data['description']; 
        $annonce->userid = $idUser; 
        $annonce->save();
        return redirect()->back()->with('success', 'modification de votre annonce à éte bien enregistré');   
        // return $data;

    }
    public function destroyAnnonce($id){
        $annonce = Annonce::find($id);
        $annonce->delete();
        return redirect()->back()->with('success', ' votre annonce à éte bien supprimé');   
 
     }
}
