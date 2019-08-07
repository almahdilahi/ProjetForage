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
class Client extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/ClientDB.php';
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre

    public function liste(){
        //Instanciation du model
        $cdb = new ClientDB();

        $data['clients'] = $cdb->listeClient();

        return $this->view->load("client/liste", $data);
    }


/*    public function add(){
        //Instanciation du model
        $cdb = new ClientDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($cin) && !empty($nom) && !empty($prenom) && !empty($nomCV) && !empty($village) && !empty($adresse) && !empty($tel)) {
                    $ok = $cdb->addClient($cin, $nom, $prenom, $nomCV, $village, $adresse, $tel);
                    $data['ok'] = $ok;
            }
        }

        return $this->view->load("client/add", $data);
    }*/
    public function update(){
        //Instanciation du model
        $cdb = new ClientDB();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($idC) && !empty($cin) && !empty($nom) && !empty($prenom) && !empty($nomCV) && !empty($village) && !empty($adresse) && !empty($tel)) {
                $ok = $cdb->updateClient($idC, $cin, $nom, $prenom,$nomCV, $village,$adresse, $tel);
            }
        }

        return $this->liste();//appel de la methode liste du controller
    }
    public function delete($id){
        //Instanciation du model
        $cdb = new ClientDB();
        //Supression
        $cdb->deleteClient($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id){

        //Instanciation du model
        $cdb = new ClientDB();
        //Supression
        $data['client'] = $cdb->getClient($id);
        //chargement de la vue edit.html
        return $this->view->load("client/edit", $data);
    }

    public function getClientsJson($cin)
    {
        $client_dao = new ClientDB();
        //GEstion des comptes
        //echo json_encode($json);//{"":"", "":""}
        //gestion des clients
        $client = $client_dao->getClientByCin($cin);
        $json_client=array();
        $json_client[]=$client[1];
        $json_client[]=$client[2];
        $json_client[]=$client[3];
        $json_client[]=$client[4];
        $json_client[]=$client[5];
        $json_client[]=$client[6];
        $json_client[]=$client[7];
        echo json_encode($json_client);

    }


    public function listeJson()
    {

        $client_dao = new ClientDB();

        $clients = $client_dao->listeClient();
        $json = array();
        foreach ($clients as $client) {
            $json[$client[0]] = $client[0]." ".$client[1]." ".$client[3]." ".$client[2];
        }

        echo json_encode($json);//{"":"", "":""}
    }
}
?>