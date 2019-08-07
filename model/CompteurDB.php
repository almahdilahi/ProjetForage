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
class CompteurDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getCompteur($NumC)
    {
        $sql = "SELECT *
                     FROM compteur
                     WHERE compteur.NumC = '$NumC'";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getCompteurByidF($idF)
    {
        $sql = "SELECT c.idCompteur
                     FROM compteur c,facture f,abonnement a
                     WHERE f.idF = $idF AND f.idAbonnement=a.Nab AND c.idAbonnement=a.Nab";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function getCompteur1($idCompteur)
    {
        $sql = "SELECT *
                     FROM compteur
                     WHERE compteur.idCompteur = $idCompteur";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addCompteur($NumC,$consChiffre, $consLettre, $idAbonnement,$etat){
        $sql = "INSERT INTO compteur VALUES(null, '$NumC', '$consChiffre', '$consLettre', '$idAbonnement','$etat')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteCompteur($idCompteur){
        $sql = "DELETE FROM compteur WHERE idCompteur = $idCompteur";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateCompteur($idCompteur, $NumC, $consChiffre, $consLettre, $idAbonnement,$etat){
        $sql = "UPDATE compteur SET NumC = '$NumC',
            consChiffre = $consChiffre,
						consLettre = '$consLettre',
						idAbonnement = $idAbonnement,
            etat = $etat

						WHERE idCompteur = $idCompteur";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateEtatCompteur($idCompteur, $etat){
        $sql = "UPDATE compteur SET
            etat = $etat
            WHERE idCompteur = $idCompteur";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateConsommationCompteur($idCompteur,$consChiffre, $consLettre){
        $sql = "UPDATE compteur SET consChiffre = $consChiffre,
						consLettre = '$consLettre'
						WHERE idCompteur = $idCompteur";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeCompteur(){
        $sql = "SELECT * FROM compteur";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function fetchAllCompteur(){
        $sql = "SELECT co.idCompteur,co.NumC,co.consChiffre,co.consLettre,c.cin,c.prenom,c.nom,co.idAbonnement FROM abonnement ab,compteur co,client c WHERE c.idC = ab.idClient AND ab.Nab = co.idAbonnement";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function listeCompteurDown(){
        $sql = "SELECT co.idCompteur,co.NumC,co.consChiffre,co.consLettre,c.cin,c.prenom,c.nom,co.idAbonnement FROM abonnement ab,compteur co,facture f,client c WHERE c.idC = ab.idClient AND ab.Nab = co.idAbonnement AND ab.Nab=f.idAbonnement AND co.etat=0";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function AutoNumeroCompteur(){
      $c1 = rand(48,57);
      $c2 = rand(48,57);
      $maj1 = chr(rand(65,90));
      $maj2 = chr(rand(65,90));
      $min1 = chr(rand(97,122));
      $min2 = chr(rand(97,122));
      $numero = "SN".$maj1."".$c1."".$min1."".$maj2."".$min2."".$c2;
      return $numero;
    }
}
