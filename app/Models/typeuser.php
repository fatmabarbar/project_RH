<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'version', 'code', 'libelle', 'P_codeStation', 'P_codeExercice', 'j_export',
        'j_ddm', 'j_codeStation', 'j_codeUser', 'j_operation', 'isDefault', 'affich_Prix_Achat', 'modif_Prix_Enc',
        'technicien', 'sousTraitant', 'administrateur', 'superAdministrateur', 'acceptReglementSansDoc',
        'AjoutModifArticle', 'apporteur', 'commercial', 'istechspec', 'timesheet', 'developpeur', 'Aff_Multistock'
    ];
    public $timestamps = false;
    protected $table = 'E_TypeUser';

    function getUtilisateursByTypeUser()
    {
        return $this->hasMany('app\Models\typeuser');
    }
}
