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

/*==================================================
Projet PHP: Gestion de forage Sen-Forage est une
entreprise évoluant dans la production et la
distribution d’eau pour les villageois du nord du
Sénégal. Les clients c’est-à-dire les familles
 doivent d’abord s’abonner pour l’obtention d’un
compteur. Pour identifier les clients, l’entreprise
 enregistre le nom de famille, le nom du chef du
village de l’abonné ainsi que son village, l’adresse
et son numéro de téléphone. Dans l’abonnement, elle
enregistre la date, le numéro et un texte descriptif
de l’abonnement. Après chaque abonnement, la famille
a droit à un compteur qui enregistre  les
 consommations d’eau. Dans  leur compteur sont
  relevé  le numéro du compteur,la  consommation
en  lettre  et  en  chiffre.  Toute  consommation
s’ajoute  à  l’ancienne consommation, la facture est
établie en fonction de la consommation du mois ainsi
que du prix d’un litre d’eau consommé. Le système à
mettre en place doit permettre : D’éditer des
 factures chaque mois Gérer les règlements de ces
factures. NB : au plustart le 5 de chaque mois, toute
facture non-réglée est taxée à raison de 5% du
 montant de la facture à payer et le compteur est
 coupé
 ===================================================*/



require_once 'libs/load/load.php';
    $bootstrap = new Bootstrap();
?>