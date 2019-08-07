<?php
/* Smarty version 3.1.30, created on 2018-07-17 04:33:03
  from "C:\xampp\htdocs\ProjetForage\view\client\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4d555f94b460_95145463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d7bcd7ca761a875d48da865793f48cf0b27147' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\client\\edit.html',
      1 => 1531788759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d555f94b460_95145463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
    <div class="nav navbar navbar-fixed-top" style="background-color: #00b8d4;color: floralwhite;font-family: cursive;">

        <ul class="nav navbar-nav" style="margin-left: 400px;">
            <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
            <li class="hovacc" style="display: flex;background-color: #00b8d4;"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Accueil/index"  style="color: floralwhite;" ><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/image/homeeau.jpg" style="width: 22px; border-radius: 5px"/>ACCUEIL</a></li>
            <li class="hovabn"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/liste" style="color: floralwhite;" >ABONNEMENT</a></li>
            <li class="hovfac"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add" style="color: floralwhite;" >FACTURE</a></li>
            <li  class="hovreg"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add" style="color: floralwhite;">REGLEMENT</a></li>
            <li class="hovcli"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste" style="color: floralwhite;" >CLIENT</a></li>
            <li class="hovcom"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste" style="color: floralwhite;" >COMPTEUR</a></li>

        </ul>

    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">MODIFICATION CLIENT</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/update" style="font-family: cursive;color: floralwhite;">
						<div class="form-group">
							<label class="control-label">Identifiant</label>
							<input class="form-control" type="text" name="idC" id="idC" readonly value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
 <?php }?>"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Carte d'Identite</label>
                            <input class="form-control" type="text" name="cin" id="cin"  value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['cin'];?>
 <?php }?>"/>
                        </div>
						<div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['nom'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Prenom</label>
							<input class="form-control" type="text" name="prenom" id="prenom" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['prenom'];?>
 <?php }?>"/>
						</div>

                        <div class="form-group">
                            <label class="control-label">Chef de Village</label>
                            <input class="form-control" type="text" name="nomCV" id="nomCV" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['nomCV'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Village</label>
                            <input class="form-control" type="text" name="village" id="village" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['village'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Adresse</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['adresse'];?>
 <?php }?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telephone</label>
                            <input class="form-control" type="text" name="tel" id="tel" required="require" value="<?php if (isset($_smarty_tpl->tpl_vars['client']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['client']->value['tel'];?>
 <?php }?>"/>
                        </div>

                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
