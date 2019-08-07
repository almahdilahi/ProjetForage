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
class Compteur extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/CompteurDB.php';
        require_once 'model/ClientDB.php';
        require_once 'model/FactureDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre

    public function liste(){
        //Instanciation du model
        $cdb = new CompteurDB();

        $data['compteurs'] = $cdb->fetchAllCompteur();

        return $this->view->load("compteur/liste", $data);
    }

    public function listecoupure(){
        //Instanciation du model
        $cdb = new CompteurDB();

        $data['compteurs'] = $cdb->listeCompteurDown();

        return $this->view->load("compteur/listecoupure", $data);
    }

    public function coupure($id){
        //Instanciation du model
        $cdb = new CompteurDB();
        $compteur=$cdb->getCompteur1($id);
        if($compteur['etat']==1){
        $data['compteurs'] = $cdb->updateEtatCompteur($id,0);
        return $this->view->load("compteur/listecoupure", $data);
      }else{
        $data['compteurs'] = $cdb->fetchAllCompteur();
        return $this->view->load("compteur/liste", $data);
      }
    }


  /*  public function add(){
        //Instanciation du model
        $cdb = new CompteurDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($NumC) && !empty($consChiffre) && !empty($consLettre) && !empty($idAbonnement)) {
                $ok = $cdb->addClient($NumC,$consChiffre, $consLettre, $idAbonnement);
                $data['ok'] = $ok;
            }
        }

        return $this->view->load("compteur/add", $data);
    }
  */
    public function update(){
        //Instanciation du model
        $cdb = new CompteurDB();
        $fdb = new FactureDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($idCompteur) && !empty($NumC) && !empty($consChiffre) && !empty($idAbonnement) && !empty($etat)) {
                $conslettre=$fdb->ConvertirConsommationEnLettre($consChiffre)." Littre";
                $ok = $cdb->updateCompteur($idCompteur,$NumC, $consChiffre, $conslettre, $idAbonnement,$etat);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $cdb = new CompteurDB();
        //Supression
        $cdb->deleteCompteur($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $cdb = new CompteurDB();
        //Supression
        $data['compteur'] = $cdb->getCompteur1($id);
        //chargement de la vue edit.html
        return $this->view->load("compteur/edit", $data);
    }

    public function getClientsJson($NumC)
    {
        $client_dao = new ClientDB();
        //GEstion des comptes
        //echo json_encode($json);//{"":"", "":""}
        //gestion des clients
        $client = $client_dao->getClientByNumC($NumC);
        $json_client=array();
        $json_client[]=$client[0];
        $json_client[]=$client[1];
        $json_client[]=$client[2];
        $json_client[]=$client[3];
        $json_client[]=$client[4];
        $json_client[]=$client[5];
        $json_client[]=$client[6];
        $json_client[]=$client[7];
        echo json_encode($json_client);

    }

    public function getCompteur($NumC){
        $comteur_dao = new CompteurDB();
        $compteur = $comteur_dao->getCompteur($NumC);
        $json_compteur=array();
        $json_compteur[]=$compteur[0];
        $json_compteur[]=$compteur[1];
        $json_compteur[]=$compteur[2];
        $json_compteur[]=$compteur[3];
        $json_compteur[]=$compteur[4];
        echo json_encode($json_compteur);
    }



}
?>
