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
class ReglementDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getReglement($idR)
    {
        $sql = "SELECT *
                     FROM reglement
                     WHERE reglement.idR = ".$idR;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getIdfacture($idF)
    {
        $sql = "SELECT *
                     FROM reglement
                     WHERE reglement.idFacture = $idF";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addReglement($montant, $montantL, $idFacture){
        $sql = "INSERT INTO reglement VALUES(null, CURRENT_TIMESTAMP , '$montant', '$montantL', '$idFacture')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteReglement($idR){
        $sql = "DELETE FROM reglement WHERE idR = $idR";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateReglement($idR, $date, $montant, $idFacture){
        $sql = "UPDATE reglement SET
						date = '$date',
						montant = $montant,
						idFacture = $idFacture

						WHERE idR = $idR";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeReglement(){
        $sql = "SELECT * FROM reglement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }
}
