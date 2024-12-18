<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    //Désactiver les envois de temps
    protected $primaryKey = 'idClient';
    public $timestamps = false;

    protected $fillable = [
        'raisonSociale',
        'adresseClient',
        'codePostalClient',
        'villeClient',
        'CA',
        'effectif',
        'telephoneClient',
        'typeClient',
        'natureClient',
        'commentaireClient'
    ];
}
