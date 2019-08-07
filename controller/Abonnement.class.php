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
class Abonnement extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/AbonnementDB.php';
        require_once 'model/ClientDB.php';
        require_once 'model/CompteurDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre


    public function liste(){
        //Instanciation du model
        $adb = new AbonnementDB();
        $data['abonnements'] = $adb->fetchAllAbonnement();
        return $this->view->load("abonnement/liste", $data);
    }


    public function add(){
        //Instanciation du model
        $adb = new AbonnementDB();
        $cli = new ClientDB();
        $com = new CompteurDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($cin) && !empty($nom) && !empty($prenom) && !empty($nomCV) && !empty($village) && !empty($adresse) && !empty($tel) &&!empty($dateab) && !empty($description))
            {
                if( $cli->getClientByCin($cin)== null)
                {
                    //Ajout Client
                    $cli->addClient($cin,$nom,$prenom,$nomCV,$village,$adresse,$tel);
                    $client = array();
                    //Ajout Abonnement
                    $client=$cli->getIDClient($cin);
                    $numab = $adb->AutoNumeroAbonnement()."".$client['idC'];
                    $ok = $adb->addAbonnement($description, $numab, $client['idC']);
                    $data['ok'] = $ok;
                    //Ajout Compteur
                    $abonnement = array();
                    $abonnement = $adb->getIDAbonnement($client['idC']);
                    //Generer le numero de compteur
                    $NumC = $com->AutoNumeroCompteur()."".$client['idC'];
                    $et=1;
                    $com->addCompteur($NumC,0,'zero',$abonnement['Nab'],$et);
                }else
                {
                    //Ajout Abonnement
                    $client = array();
                    $client=$cli->getIDClient($cin);
                    $numab = $adb->AutoNumeroAbonnement();
                    $ok = $adb->addAbonnement($description, $numab, $client['idC']);
                    $data['ok'] = $ok;
                    //Ajout Compteur
                    $abonnement = array();
                    $abonnement = $adb->getIDAbonnement($client['idC']);
                    //Generer le numero de compteur
                    $NumC = $com->AutoNumeroCompteur();
                    $et=1;
                    $com->addCompteur($NumC,0,'zero',$abonnement['Nab'],$et);
                }
            }
        }

        return $this->view->load("abonnement/add", $data);
    }
    public function update(){
        //Instanciation du model
        $adb = new AbonnementDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($Nab) && !empty($dateab) && !empty($description) && !empty($idClient)) {
                $numab = $adb->AutoNumeroAbonnement();
                $ok = $adb->updateAbonnement($Nab, $description, $numab, $idClient);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $adb = new AbonnementDB();
        //Supression
        $adb->deleteAbonnement($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $adb = new AbonnementDB();
        //Supression
        $data['abonnement'] = $adb->getAbonnement($id);
        //chargement de la vue edit.html
        return $this->view->load("abonnement/edit", $data);
    }

    public function listeJson()
    {

        $abonnement_dao = new AbonnementDB();

        $abonnements = $abonnement_dao->listeAbonnement();
        $json = array();
        foreach ($abonnements as $abonnement) {
            $json[$abonnement[0]] = "ID: ".$abonnement[0]." Numero: ".$abonnement[3];
        }

        echo json_encode($json);//{"":"", "":""}
    }

    public function getDuree($dateab)
    {
    $ab = new AbonnementDB();
    echo $ab->getLongAbonnement($dateab);
    }
}
?>
