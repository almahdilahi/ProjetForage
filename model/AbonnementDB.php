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
class AbonnementDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getAbonnement($Nab)
    {
        $sql = "SELECT *
                     FROM abonnement
                     WHERE abonnement.Nab = $Nab";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getLongAbonnement($dateab)
    {
        $date1   = time();
        $date2 = strtotime($dateab);
        $diff  = abs($date1 - $date2);
        $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
        $retour = array();

        $tmp = $diff;
        $retour['second'] = $tmp % 60;

        $tmp = floor( ($tmp - $retour['second']) /60 );
        $retour['minute'] = $tmp % 60;

        $tmp = floor( ($tmp - $retour['minute'])/60 );
        $retour['hour'] = $tmp % 24;

        $tmp = floor( ($tmp - $retour['hour'])  /24 );
        $retour['day'] = $tmp;

        return $retour['day'];



    }


    public function getIDAbonnement($idClient)
    {
        $sql = "SELECT Nab
                     FROM abonnement
                     WHERE abonnement.idClient = $idClient";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addAbonnement($description, $numero, $idClient){
        $sql = "INSERT INTO abonnement VALUES(null, CURRENT_TIMESTAMP, '$description', '$numero', '$idClient')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }



    public function deleteAbonnement($Nab){
        $sql = "DELETE FROM abonnement WHERE Nab = $Nab";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateAbonnement($Nab, $description, $numero, $idClient){
        $sql = "UPDATE abonnement SET dateab = CURRENT_TIMESTAMP,
						description = '$description',
						numero = '$numero',
						idClient = $idClient

						WHERE Nab = $Nab";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeAbonnement(){
        $sql = "SELECT * FROM abonnement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }


    /**
     * @return array|null
     */
    public function fetchAllAbonnement(){
        $sql = "SELECT ab.Nab,co.NumC,c.cin,c.prenom,c.nom,ab.dateab FROM abonnement ab,compteur co,client c WHERE ab.idClient = c.idC  AND ab.Nab = co.idAbonnement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function AutoNumeroAbonnement(){
        $c1 = rand(48,57);
        $c2 = rand(48,57);
        $c3 = rand(48,57);
        $c4 = rand(48,57);
        $c5 = rand(48,57);
        $c6 = rand(48,57);
        $c7 = rand(48,57);
        $c8 = rand(48,57);
        $c9 = rand(48,57);
        $c10 = rand(48,57);
        $c11 = rand(48,57);
        $c12 = rand(48,57);
        $c13 = rand(48,57);
        $c14 = rand(48,57);
        $c15 = rand(48,57);
        $c16 = rand(48,57);
        $c17 = rand(48,57);
        $c18 = rand(48,57);
        $c19 = rand(48,57);
        $c20 = rand(48,57);
        $numero = "0000".$c1."".$c2.""."".$c8."".$c9."".$c10."".$c11."".$c15."".$c16."".$c17."".$c18."".$c20."00";
        return $numero;
    }
}
