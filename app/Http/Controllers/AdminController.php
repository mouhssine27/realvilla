<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Categorie;
use App\Models\Offer;
use App\Models\User;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class AdminController extends Controller
{
    //
    public function AdminSelect()
    {
         $AnnonceSelect = Annonce::select()->get();
         $user  = User::select()->get();
        return view('AdminDachbouard',compact('AnnonceSelect','user'));
    }
}
