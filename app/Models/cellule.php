<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cellule extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'version',
        'code',
        'Libelle',
        'IsDefault',
        'P_codeStation',
        'P_codeExercice',
        'j_export',
        'j_ddm',
        'j_codeStation',
        'j_codeUser',
        'j_operation',
        'id_CelluleParent',
    ];

    public $timestamps = false;
    protected $table = 'P_cellule';

    function getUtilisateursByCellule()
    {
        return $this->hasMany('app\Models\cellule');
    }
}
