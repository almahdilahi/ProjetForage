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
class Login extends Controller{
    public function __construct(){
        parent::__construct();
        //Appel du model
        require_once 'model/UserDB.php';
        session_start();
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index(){
        return $this->view->load("login/index");
    }

    public function connect(){
        //Instanciation du model
        $udb = new UserDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
        {
            extract($_POST);
            if(!empty($date) && !empty($montant) && !empty($idFacture)) {
                $ok = $rdb->addReglement($date, $montant, $idFacture);
                $data['ok'] = $ok;
            }
        }



        if(isset($_POST['submit'])) {
            extract($_POST);
            if (!empty($login) && !empty($password)) {
                $ok = $udb->checkUser($login, $password);
                $result = mysqli_fetch_row($ok);
                if ($result) {

                    $_SESSION['nom'] = $result[1];
                    $_SESSION['prenom'] = $result[2];
                    $_SESSION['id'] = $result[0];

                    if ($_POST['username'] == 'admin') {
                        header('location:../view/accueil/index.html');
                    } else {
                        header("location:../view/accueil/index.html");
                    }


                } else {
                    return $this->view->load("accueil/index", $data);
                }
            }
            if (isset($_GET['deconnect'])) {
                session_destroy();
                header("location:../view/login/index.html");
            }

        }


    }

}
?>