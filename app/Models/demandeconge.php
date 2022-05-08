<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class demandeconge extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'DateDemande',
        'typeconge',
        'solde',
        'datedebut',
        'datedernier',
        'duree',
        'etat',
        'decision',
        'idUtilisateur'

    ];

    public $timestamps = false;
    protected $table = 'demandeconges';

    function getUtilisateurByDemandeConge()
    {
        return $this->hasMany('app\Models\demandeconge');
    }
}
