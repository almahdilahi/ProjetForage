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
class FactureDB extends Model{

    //La base de données samane_test est dans view/test
    //Pour tester importer la
    public function __construct(){
        parent::__construct();
    }

    public function getFacture($idF)
    {
        $sql = "SELECT *
                     FROM facture
                     WHERE facture.idF = ".$idF;
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function searchFacture2($numeroCompteur)
    {
        $sql = "SELECT f.idF,com.NumC,cli.cin,cli.prenom,cli.nom,cli.nomCV,cli.village,cli.adresse,cli.tel,f.numero,com.consLettre,ab.numero,f.conso,f.periode,f.edition,f.montant,f.idAbonnement
                     FROM facture f,compteur com,client cli,abonnement ab
                     WHERE com.NumC = '$numeroCompteur' AND com.idAbonnement=ab.Nab AND f.idAbonnement=ab.Nab AND ab.idClient=cli.idC";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }


    public function searchFacture($numeroCompteur)
    {
        $sql = "SELECT f.idF,com.NumC,cli.cin,cli.prenom,cli.nom,f.conso,f.periode,f.edition,f.montant,f.idAbonnement
                     FROM facture f,compteur com,client cli,abonnement ab
                     WHERE com.NumC = '$numeroCompteur' AND com.idAbonnement=ab.Nab AND f.idAbonnement=ab.Nab AND ab.idClient=cli.idC";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function addFacture($conso, $periode, $montant, $numero, $idAbonnement){
        $sql = "INSERT INTO facture VALUES(null, '$conso', '$periode',  CURRENT_TIMESTAMP, '$montant', '$numero', '$idAbonnement')";
        if($this->db != null)
        {
            $this->db->exec($sql);
            return $this->db->lastInsertId();//Si la clé primaire est auto_increment
            //sinon return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function deleteFacture($idF){
        $sql = "DELETE FROM facture WHERE idF = $idF";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function updateFacture($idF, $conso, $periode, $montant, $numero,$idAbonnement){
        $sql = "UPDATE facture SET conso = $conso,
						periode = '$periode',
						montant = $montant,
						numero = '$numero',
						idAbonnement = $idAbonnement

						WHERE idF = $idF";

        if($this->db != null)
        {
            return $this->db->exec($sql);
        }else{
            return null;
        }
    }

    public function listeFacture(){
        $sql = "SELECT * FROM facture";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function getIdAbonnement($idA)
    {
        $sql = "SELECT *
                     FROM facture
                     WHERE facture.idAbonnement = $idA";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getIDFacture($numfact)
    {
        $sql = "SELECT idF
                     FROM facture
                     WHERE facture.numero = $numfact";
        if($this->db != null)
        {
            return $this->db->query($sql)->fetch();
        }else{
            return null;
        }
    }

    public function getMonth(){
        $sql = "SELECT MONTH('CURRENT_TIMES') FROM abonnement a WHERE a.Nab = $id";

        if($this->db != null)
            return $this->db->query($sql)->fetchAll();
        else
            return null;
    }

    public function AutoNumeroFacture(){
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

        $numero ="0000"."".$c11."".$c12."".$c13."".$c14.""."".$c18."".$c1."".$c2."".$c3."".$c4."".$c5."00";
        return $numero;
    }

    public  function ConvertirConsommationEnLettre($number) {
        $convert = explode('.', $number);
        $num[17] = array('zero', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit',
            'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize');

        $num[100] = array(20 => 'vingt', 30 => 'trente', 40 => 'quarante', 50 => 'cinquante',
            60 => 'soixante', 70 => 'soixante-dix', 80 => 'quatre-vingt', 90 => 'quatre-vingt-dix');

        if (isset($convert[1]) && $convert[1] != '') {
            return self::ConvertirConsommationEnLettre($convert[0]).' et '.self::ConvertirConsommationEnLettre($convert[1]);
        }
        if ($number < 0) return 'moins '.self::ConvertirConsommationEnLettre(-$number);
        if ($number < 17) {
            return $num[17][$number];
        }
        elseif ($number < 20) {
            return 'dix-'.self::ConvertirConsommationEnLettre($number-10);
        }
        elseif ($number < 100) {
            if ($number%10 == 0) {
                return $num[100][$number];
            }
            elseif (substr($number, -1) == 1) {
                if( ((int)($number/10)*10)<70 ){
                    return self::ConvertirConsommationEnLettre((int)($number/10)*10).'-et-un';
                }
                elseif ($number == 71) {
                    return 'soixante-et-onze';
                }
                elseif ($number == 81) {
                    return 'quatre-vingt-un';
                }
                elseif ($number == 91) {
                    return 'quatre-vingt-onze';
                }
            }
            elseif ($number < 70) {
                return self::ConvertirConsommationEnLettre($number-$number%10).'-'.self::ConvertirConsommationEnLettre($number%10);
            }
            elseif ($number < 80) {
                return self::ConvertirConsommationEnLettre(60).'-'.self::ConvertirConsommationEnLettre($number%20);
            }
            else {
                return self::ConvertirConsommationEnLettre(80).'-'.self::ConvertirConsommationEnLettre($number%20);
            }
        }
        elseif ($number == 100) {
            return 'cent';
        }
        elseif ($number < 200) {
            return self::ConvertirConsommationEnLettre(100).' '.self::ConvertirConsommationEnLettre($number%100);
        }
        elseif ($number < 1000) {
            return self::ConvertirConsommationEnLettre((int)($number/100)).' '.self::ConvertirConsommationEnLettre(100).($number%100 > 0 ? ' '.self::ConvertirConsommationEnLettre($number%100): '');
        }
        elseif ($number == 1000){
            return 'mille';
        }
        elseif ($number < 2000) {
            return self::ConvertirConsommationEnLettre(1000).' '.self::ConvertirConsommationEnLettre($number%1000).' ';
        }
        elseif ($number < 1000000) {
            return self::ConvertirConsommationEnLettre((int)($number/1000)).' '.self::ConvertirConsommationEnLettre(1000).($number%1000 > 0 ? ' '.self::ConvertirConsommationEnLettre($number%1000): '');
        }
        elseif ($number == 1000000) {
            return 'millions';
        }
        elseif ($number < 2000000) {
            return self::ConvertirConsommationEnLettre(1000000).' '.self::ConvertirConsommationEnLettre($number%1000000);
        }
        elseif ($number < 1000000000) {
            return self::ConvertirConsommationEnLettre((int)($number/1000000)).' '.self::ConvertirConsommationEnLettre(1000000).($number%1000000 > 0 ? ' '.self::ConvertirConsommationEnLettre($number%1000000): '');
        }
    }
}