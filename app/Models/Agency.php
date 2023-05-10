<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $table ='agencys';
    protected $fillable = [
        'nom',
        'description',
        'image',
        'adressemail',
        'websit',
        'agency',
        'lisencs',
        'telephone',
        'societe' ,
        'numberphoneS',
    ];

    public $timestamps = false ;

}