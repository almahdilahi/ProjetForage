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
class UserDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function checkUser($login,$password)
    {
        $sql = "SELECT * FROM user WHERE  login='$login' AND password='$password' ";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getUserName($idU){
        $sql = " SELECT nom,prenom FROM user WHERE idU=$idU ";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }



    public function deleteUser($idU){
        $sql = "DELETE FROM user WHERE idU = $idU";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }


    public function updateUser($idU,$nom,$prenom,$login,$password){
        $sql = "UPDATE user SET nom = '$nom', prenom = '$prenom', login = '$login', password = '$password' WHERE idU = $idU";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function showUser(){
        $sql = "SELECT * FROM user";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function connect(){

    }


    /**
     * @return array|null
     */

}
