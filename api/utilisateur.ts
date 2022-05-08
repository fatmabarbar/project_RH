import { Cellule } from "./cellule";
import { Typeuser } from "./typeuser";

export class Utilisateur {

    id: any;
    version: any;
    code: any;
    login: any;
    username: any;
    psw: any;
    nomPrenom: any;
    tel: any;
    mail: any;
    idType: Typeuser;
    idStation: any;
    idCellule: Cellule;
    P_codeStation: any;
    P_codeExercice: any;
    j_export: any;
    j_ddm: any;
    j_codeStation: any;
    j_codeUser: any;
    j_operation: any;
    active: any;
    AffClientActive: any;
    AffFourActive: any;
    AffArticleActive: any;
    superAdministrateur: any
    AllowChangePrix: any;
    allowDepRemiseMax: any;
    Changeprefixe: any;
    allowDashboardApporteur: any;
    is_beneficiaire: any;
    is_validateur: any;
    allowChangeStation: any;
    allowChangeExercice: any;
    voirNotifEcheanceDepasse: any;
    allowChangeDurePenal: any;
    allowShowTCTS: any;
    nbJourAutorise: any;
    ModifAutreTicket: any;
    is_chauffeur: any;
    regCaisseEsp: any;
    regCaisseCheq: any;
    regCaisseCB: any;
    regCaisseTResto: any;
    regCaisseTR: any;
    regCaisseBA: any;
    CreateBonAchat: any;
    AllowCreditCaisse: any;
    AllowReglementAvoir: any;
    modifierPrixAchat: any;
    kanbanMaster: any;
    allowVentilation: any;
    AllowCaissierFacturer: any;
    blockageNumSerie: any;
    avatar: any;
    interditModificationPrixDocument: any;

}
