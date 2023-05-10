<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
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
        return view('users.annonces');
    }
}
