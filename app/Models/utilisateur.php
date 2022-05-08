<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'version', 'code', 'login', 'username', 'psw', 'nomPrenom', 'tel',
        'mail', 'idType', 'idStation', 'idCellule', 'idType', 'P_codeStation', 'P_codeExercice', 'j_export', 'j_ddm',
        'j_codeStation', 'j_codeUser', 'j_operation', 'active', 'AffClientActive', 'AffFourActive', 'AffArticleActive',
        'superAdministrateur', 'AllowChangePrix', 'allowDepRemiseMax', 'Changeprefixe', 'allowDashboardApporteur',
        'is_beneficiaire', 'is_validateur', 'allowChangeStation', 'allowChangeExercice', 'voirNotifEcheanceDepasse',
        'allowChangeDurePenal', 'allowShowTCTS', 'nbJourAutorise', 'ModifAutreTicket', 'is_chauffeur', 'regCaisseEsp',
        'regCaisseCheq', 'regCaisseCB', 'regCaisseTResto', 'regCaisseTR', 'regCaisseBA', 'CreateBonAchat',
        'AllowCreditCaisse', 'AllowReglementAvoir', 'modifierPrixAchat', 'kanbanMaster', 'allowVentilation',
        'AllowCaissierFacturer', 'blockageNumSerie', 'avatar', 'interditModificationPrixDocument'
    ];
    public $timestamps = false;
    protected $table = 'p_utilisateur';
    function getUtilisateursByType()
    {
        return $this->hasMany('app\Models\utilisateur');
    }
}
