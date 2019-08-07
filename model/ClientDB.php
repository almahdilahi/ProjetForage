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
class ClientDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getClient($idC)
    {
        $sql = "SELECT *
                     FROM client
                     WHERE client.idC = ".$idC;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getIDClient($cin)
    {
        $sql = "SELECT idC
                     FROM client
                     WHERE client.cin =  '$cin'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function getClientByCin($cin)
    {
        $sql = "SELECT *
                     FROM client
                     WHERE client.cin = '$cin'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

        public function getClientByNumC($NumC)
    {
        $sql = "SELECT c.cin,c.nom,c.prenom,c.nomCV,c.village,c.adresse,c.tel,a.Nab
                     FROM client c,abonnement a,compteur cp
                     WHERE c.idC = a.idClient AND a.Nab = cp.idAbonnement AND '$NumC'=cp.NumC";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function addClient($cin, $nom, $prenom, $nomCV, $village, $adresse, $tel){
        $sql = "INSERT INTO client VALUES(null, '$cin' ,'$nom', '$prenom', '$nomCV', '$village', '$adresse', $tel)";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteClient($idC){
        $sql = "DELETE FROM client WHERE idC = $idC";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateClient($idC, $cin, $nom, $prenom, $nomCV, $village, $adresse, $tel){
        $sql = "UPDATE client SET  cin = '$cin',
                              nom = '$nom',
						prenom = '$prenom',
						nomCV = '$nomCV',
						village = '$village',
						adresse = '$adresse',
						tel = $tel
						WHERE idC = $idC";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeClient(){
        $sql = "SELECT * FROM client";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}