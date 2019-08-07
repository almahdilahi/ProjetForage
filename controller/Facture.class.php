<?php
/*======================================================
    SENFORAGE EST UN PROJET PHP DE GESTION DE FORAGE
    AVEC LE FRAMEWORK SAMANE MVC
    DEVELOPPE PAR LIMAMOU LAYE KA
    almahdilaye@gmail.com
    (+221) 78 - 137 - 66 - 46
    DANS LE FICHIER ProjetForage/index.php SE TROUVE LA
    DESCRIPTION DU PROJET
  ======================================================*/
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE DERNIER (GIT).
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
class Facture extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/FactureDB.php';
        require_once 'model/CompteurDB.php';
        require_once 'model/AbonnementDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre

    public function liste(){
        //Instanciation du model
        //$fdb = new FactureDB();
        $cdb = new CompteurDB();
        $data['compteurs'] = $cdb->listeCompteur();

        return $this->view->load("facture/liste", $data);
    }


    public function add(){
        //var_dump($_POST);
        //Instanciation du model
        $fdb = new FactureDB();
        $cpdb = new CompteurDB();
        $ab = new AbonnementDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($NumC) && !empty($cin) && !empty($nom) && !empty($prenom) && !empty($nomCV) && !empty($village) && !empty($adresse) && !empty($tel)  && !empty($conso) && !empty($periode) && !empty($edition) && !empty($idAbonnement)) {
                $abn=$ab->getAbonnement($idAbonnement);
                $dureeab=$ab->getLongAbonnement($abn['dateab']);
                if($cpdb->getCompteur($NumC) != null && $dureeab>60 && $conso>0)
                {
                    $montant = $conso * 325;
                    $numfact = $fdb->AutoNumeroFacture()."".$idAbonnement;
                    $ok = $fdb->addFacture($conso, $periode, $montant, $numfact, $idAbonnement);
                    $data['ok'] = $ok;
                    $compteur=$cpdb->getCompteur($NumC);
                    $conslettre=$fdb->ConvertirConsommationEnLettre($conso)." Littre";
                    $cpdb->updateConsommationCompteur($compteur['idCompteur'],$conso,$conslettre);
                    $abonnement=$ab->getAbonnement($idAbonnement);
                    $abnt=$abonnement['numero'];
                    header("location:../fact.php?&num=$NumC&car=$cin&nm=$nom&pn=$prenom&cvil=$nomCV&vil=$village&adr=$adresse&tl=$tel&cons=$conso&prd=$periode&ab=$idAbonnement&mt=$montant&ed=$edition&nfac=$numfact&conslet=$conslettre&numabonnement=$abnt");
                }

            }
        }

        return $this->view->load("facture/add", $data);

    }
    public function update(){
        //Instanciation du model
        $fdb = new FactureDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($idF) && !empty($conso) && !empty($periode) && !empty($idAbonnement)) {
                $montant = $conso * 325;
                $numfact = $fdb->AutoNumeroFacture();
                $ok = $fdb->updateFacture($idF, $conso, $periode, $montant, $numfact, $idAbonnement);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $fdb = new FactureDB();
        //Supression
        $fdb->deleteFacture($id);
        //Retour vers la liste
        return $this->liste();
    }

   /* public function edit($id){

        //Instanciation du model
        $fdb = new FactureDB();
        //Supression
        $data['facture'] = $fdb->getFacture($id);
        //chargement de la vue edit.html
        return $this->view->load("facture/edit", $data);
    }*/

    public function fact($id){

        //Instanciation du model
        $fdb = new FactureDB();
             $facture = $fdb->searchFacture2($id);
             $conslettre=$fdb->ConvertirConsommationEnLettre($facture[12])." Littre";
             //chargement de la vue edit.html
             header("location:../../factsearch.php?&num=$facture[1]&car=$facture[2]&nm=$facture[4]&pn=$facture[3]&cvil=$facture[5]&vil=$facture[6]&adr=$facture[7]&tl=$facture[8]&cons=$facture[12]&prd=$facture[13]&ab=$facture[16]&mt=$facture[15]&ed=$facture[14]&nfac=$facture[9]&conslet=$conslettre&numabonnement=$facture[11]");
             //return $this->view->load("facture/fact", $data);

    }



    public function ConvertirConsommationEnLettre($num)
    {
        $facture_dao = new FactureDB();
        //GEstion des comptes
        //echo json_encode($json);//{"":"", "":""}
        //gestion des clients
        $facture = $facture_dao->ConvertirConsommationEnLettre($num);
        echo json_encode($facture);

    }

    public function getFacturesJson($id)
    {
        $facture_dao = new FactureDB();
        //GEstion des comptes
        //echo json_encode($json);//{"":"", "":""}
        //gestion des clients
        $facture = $facture_dao->getFacture($id);
        $json_facture=array();
        $json_facture[]=$facture[4];
        $json_facture[]=$facture_dao->ConvertirConsommationEnLettre($facture[4]);
        echo json_encode($json_facture);

    }


    public function getFacturesSearchJson($numeroCompteur)
    {
        $facture_dao = new FactureDB();
        //GEstion des comptes
        //echo json_encode($json);//{"":"", "":""}
        //gestion des clients
        $facture = $facture_dao->searchFacture($numeroCompteur);
        $json_facture=array();
        $json_facture[]=$facture[0];
        $json_facture[]=$facture[1];
        $json_facture[]=$facture[2];
        $json_facture[]=$facture[3];
        $json_facture[]=$facture[4];
        $json_facture[]=$facture[5];
        $json_facture[]=$facture[6];
        $json_facture[]=$facture[7];
        $json_facture[]=$facture[8];
        $json_facture[]=$facture[9];
        echo json_encode($json_facture);

    }

}
?>
