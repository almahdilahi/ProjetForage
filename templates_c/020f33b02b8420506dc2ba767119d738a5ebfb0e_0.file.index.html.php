<?php
/* Smarty version 3.1.30, created on 2018-07-29 05:32:21
  from "C:\xampp\htdocs\ProjetForage\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5d35452964c6_52873267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '020f33b02b8420506dc2ba767119d738a5ebfb0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\accueil\\index.html',
      1 => 1532835139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5d35452964c6_52873267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/jquery-ui.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>

        <!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			 function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			 }

			<?php echo '</script'; ?>
>
		

	</head>
	<body onload="load_design()">

  <!--  <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/robgt.jpg" style="margin-top: -30px;width: 190px" />-->
<center>
    <div style="width: 1000px;margin-top: 100px">
        <a  style="box-shadow:10px 35px #00b8d4;text-decoration: none;font-family: cursive;font-size: 100px;color: #00b8d4" class="picsenforage">SEN FORAGE</a>
    </div>
</center>


<center>
    <div style="display: flex;width: 1000px;justify-content: space-between;margin-top: 180px; font-family: Arial;">

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste" >

            <div style="width: 200px; height: 100px;border-radius: 30px ;border:solid 2px #00b8d4;" class="abn" >
             <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste" style="box-shadow:5px 5px #00b8d4;text-decoration: none;">ABONNEMENT</a>
            </div>

        </a>

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/liste">

            <div style="width: 200px; height: 100px;border-radius: 30px ;border:solid 2px #00b8d4;margin-left: 100px;" class="fac">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/liste" style="box-shadow:5px 5px #00b8d4;text-decoration: none;">FACTURE</a>
            </div>

        </a>

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add">

        <div style="width: 200px; height: 100px;border-radius: 30px ;border:solid 2px #00b8d4;margin-left: 100px; " class="reg">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add" style="box-shadow:5px 5px #00b8d4;text-decoration: none;">REGLEMENT</a>
        </div>

        </a>
    </div>
</center>
    <div style="width: 1000px; margin-top: 50px;" >
        <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/eau7.jpg" style="width: 1451px;height: 184px;" />
    </div>
    </body>
</html>


<?php }
}
