<?php
/*======================================================
    SENFORAGE EST UN PROJET PHP DE GESTION DE FORAGE
    AVEC LE FRAMEWORK SAMANE MVC
    DEVELOPPE PAR LIMAMOU LAYE KA
    almahdilaye@gmail.com
    (+221) 78 - 137 - 66 - 46
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

class View{
		private $tpl;
        public function __construct(){
			$this->tpl = new Smarty();
        }
        public function load(){
            $num = func_num_args();
            $args = func_get_args();
            switch($num){
                case 1:
                    $this->chargerDonnees($args[0]);
                    break;
                case 2:
                    $this->chargerDonnees($args[0], $args[1]);
                    break;
            }
        }
		
        private function chargerDonnees($page, $data = array()){
            
			$data['url_base'] = base_url();
			$this->tpl->assign($data);
            $this->tpl->display('view/' . $page . '.html');
        }
    }
?>