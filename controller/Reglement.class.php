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
class Reglement extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ReglementDB.php';
        require_once 'model/FactureDB.php';
        require_once 'model/CompteurDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre

    public function liste(){
        //Instanciation du model
        $rdb = new ReglementDB();

        $data['reglements'] = $rdb->listeReglement();

        return $this->view->load("reglement/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $rdb = new ReglementDB();
        $fdb = new FactureDB();
        $cdb = new CompteurDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($idFacture) && !empty($montant) && !empty($montantL) && !empty($date)) {
                if( $fdb->getFacture($idFacture)!= null) {
                    if($rdb->getIdfacture($idFacture)== null){
                    $ok = $rdb->addReglement($montant, $montantL, $idFacture);
                    if($cdb->getCompteurByidF($idFacture)!=null){
                    $compteur = $cdb->getCompteurByidF($idFacture);
                    $cdb->updateEtatCompteur($compteur['idCompteur'],1);
                    $data['ok'] = $ok;
                    }
                    }
                }
            }
        }

        return $this->view->load("reglement/add", $data);
    }
    public function update(){
        //Instanciation du model
        $rdb = new ReglementDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($idR) && !empty($date) && !empty($montant) && !empty($idFacture)) {
                $ok = $rdb->updateReglement($idR, $date, $montant, $idFacture);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $rdb = new ReglementDB();
        //Supression
        $rdb->deleteReglement($id);
        //Retour vers la liste
        return $this->liste();
    }

 /*   public function edit($id){

        //Instanciation du model
        $rdb = new ReglementDB();
        //Supression
        $data['reglement'] = $rdb->getReglement($id);
        //chargement de la vue edit.html
        return $this->view->load("reglement/edit", $data);
    }*/
}
?>
