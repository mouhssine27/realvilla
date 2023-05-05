<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [

        'titre' ,
        'Dureelocation',
        'prix',
        'pieces' ,
        'offre',
        'categorie',
        'zone',
        'urlvideo',
        'userid' ,
        'image',
        'adressegoogle',
        'longitude',
        'adressamicale',
        'atitude',
        'region',
        'agebatiment',
        'sallebain',
        'refoidissement',
        'egout',
        'salledentrement',
        'chambres',
        'parking',
        'chauffage',
        'eau',
        'piecestokage',
        'fichiernavigateur',
        'zonenavigateur',
        'descreption',
        'titredetage'

    ];

    public $timestamps = false ;
}
