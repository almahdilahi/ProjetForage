<?php
/* Smarty version 3.1.30, created on 2018-07-17 04:31:49
  from "C:\xampp\htdocs\ProjetForage\view\compteur\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4d5515ac0db1_65223384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caaaff999b6836c12ebb1a3812b84a2e7b7d53ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\compteur\\edit.html',
      1 => 1531794615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d5515ac0db1_65223384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-ui.js"><?php echo '</script'; ?>
>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
        <!--<?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                //alert("ok");
                $abonnement = $("#idAbonnement");
                //$compte = $("#compte");
                //$compte.hide();
                $abonnement.append("<option value=''>Faites un choix</option>");
                $.ajax({
                    url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/listeJson",
                    data: "go",
                    dataType: "json",
                    success: function (json) {
                        $.each(json, function (index, value) {
                            $abonnement.append("<option value='" + index + "'>" + value + "</option>");
                        });
                    }
                });


            });
            //alert("ok")
        <?php echo '</script'; ?>
>-->
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
Facture/liste" style="color: floralwhite;" >FACTURE</a></li>
            <li  class="hovreg"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/liste" style="color: floralwhite;">REGLEMENT</a></li>
            <li class="hovcli"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste" style="color: floralwhite;" >CLIENT</a></li>
            <li class="hovcom"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste" style="color: floralwhite;" >COMPTEUR</a></li>
        </ul>

    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">MODIFICATION COMPTEUR</div>
				<div class="panel-body">
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/update">
						<div class="form-group">
							<label class="control-label">Identifiant</label>
							<input class="form-control" type="text" name="idCompteur" id="idCompteur" readonly value="<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Numero</label>
							<input class="form-control" type="text" name="NumC" id="NumC" readonly value="<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['NumC'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Consommation</label>
							<input class="form-control" type="text" name="consChiffre" required="require" id="consChiffre" value="<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['consChiffre'];?>
 <?php }?>"/>
						</div>

                        <div class="form-group">
                            <label class="control-label">Abonnement</label>
                            <input class="form-control" type="text" name="idAbonnement" required="require" readonly id="idAbonnement" value="<?php if (isset($_smarty_tpl->tpl_vars['compteur']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['compteur']->value['idAbonnement'];?>
 <?php }?>"/>
                        </div>

                        <!--<div class="form-group">
                            <label class="control-label">Abonnement</label>
                            <select class="form-control" name="idAbonnement" required="require" id="idAbonnement"></select>
                        </div>
                        -->
                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
