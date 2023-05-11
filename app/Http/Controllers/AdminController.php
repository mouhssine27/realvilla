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
            return redirect()->back()->with('success', 'ajouter à éte bien enregistré');
         }
        
    }
    public function SupprimerAnnonce (request $request)
    {
        $res=Annonce::where('id',$request->idannonce)->delete();
       return redirect()->back()->with('success', 'suppresion à éte bien enregistré');
    }
    public function Supprimerutulisateur (request $request)
    {
        $res=User::where('id',$request->utul)->delete();
     return   redirect()->back()->with('success', 'suppresion à éte bien enregistré');
    }
    public function Supprimeragency (request $request)
    {
        $res=Agency::where('id',$request->agily)->delete();
     return   redirect()->back()->with('success', 'suppresion à éte bien enregistré');
    }
    ///nv modification 
    public function profileUSer($id){
       $authUserAdmin =User::find($id);
       return view('userAdmin.profile',compact('authUserAdmin'));
   }

   public function annoncesUser(){
      $idUser = Auth::id();
      $annonnces = Annonce::where('userid',$idUser)->get();
      // return $annonnces;
      
      // return $annonnces;
      return view('user.annonces',compact('annonnces'));
  }  
  public function UpdateProfileUser($id , request $request){
   // return 1;
   $data= $request->all();       
   if($request->image !=""){
       $file_extension =$request->image->getClientOriginalExtension();
       $file_name =time().'.'.$file_extension;
       $path ='imageUser';
       $request->image->move($path,$file_name);
            }
            $user= User::find($id);
            $user->name = $data['name'];   
            $user->phone = $data['phone'];   
            $user->ville = $data['ville']; 
            if(isset($file_name)){
               $user->image = $file_name; 
            }
            $user->save()  ;
            return redirect()->back()->with('success', 'modification à éte bien enregistré');   
}
public function UpdateAgence($id)
{
    $agence = Agency::find($id);
   return view('userAdmin.modalUpdeateAgility',compact('agence'));

}
public function updeateAgence($id,request $request)
{       $dataUpdeate = Agency::find($id); 
   if($request->image1!=""){
   $file_extension=$request->image1->getClientOriginalExtension();
   $file_name=time().'.'.$file_extension;
   $path ='AgencyFile';
   $request->image1->move($path,$file_name);
  $img =  $file_name;
   }else{
      $img =  $dataUpdeate->image; 
   }
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
  
   $dataUpdeate->nom = $request->nom1;
   $dataUpdeate->description  = $request->description1;
   $dataUpdeate->image= $img;
   $dataUpdeate->adressemail= $request->adressemail1;
   $dataUpdeate->websit= $request->websit1;
   $dataUpdeate->agency= $request->agency1;
   $dataUpdeate->lisencs= $request->lisencs1;
   $dataUpdeate->telephone= $request->telephone1;
   $dataUpdeate->societe= $request->societe1;
   $dataUpdeate->numberphoneS= $request->numberphoneS1;
   $nvdata =   $dataUpdeate->save();
   if($nvdata){
      return redirect()->back()->with('success', 'ajouter à éte bien enregistré');
   }
  
}


}
