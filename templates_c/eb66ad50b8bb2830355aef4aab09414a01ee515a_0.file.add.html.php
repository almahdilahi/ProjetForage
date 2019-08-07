<?php
/* Smarty version 3.1.30, created on 2018-07-16 22:12:39
  from "C:\xampp\htdocs\ProjetForage\view\client\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4cfc37da5943_95113084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb66ad50b8bb2830355aef4aab09414a01ee515a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\client\\add.html',
      1 => 1531701908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4cfc37da5943_95113084 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Client</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert.min.js"><?php echo '</script'; ?>
>

		<style>
			h1{ 
				color: #40007d;
			}
		</style>
        <?php echo '<script'; ?>
 type="text/javascript">
            function myAlertSuccess(){
                var div = document.getElementById("alertsuccess");
                div.firstChild.nodeValue = swal({
                    title : "Customer",
                    text : "New Customer Added",
                    imageUrl : "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/successalert.png",
                    html : true
                });
            }
            myAlertSuccess();

        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function myAlertWarning(){
                var div = document.getElementById("alertwarning");
                div.firstChild.nodeValue = swal({
                    title : "Customer",
                    text : "Customer Not Added",
                    imageUrl : "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/warningalert.png",
                    html : true
                });
            }
            myAlertWarning();

        <?php echo '</script'; ?>
>
	</head>
	<body>

    <div class="nav navbar navbar-fixed-top" style="background-color: #00b8d4;color: floralwhite;font-family: cursive;">

        <ul class="nav navbar-nav" style="margin-left: 500px;">
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
Reglement/add" style="color: floralwhite;">REGLEMENT</a></li>
        </ul>
    </div>

        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
        <div id="alertsuccess" ></div>

        <?php } else { ?>
        <div id="alertwarning"></div>
        <?php }?>
        <?php }?>

		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">CLIENT</div>
				<div class="panel-body">


					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add" style="font-family: cursive;color: floralwhite;">
                        <div class="form-group">
                            <label class="control-label">Carte ID</label>
                            <input class="form-control" type="text" name="cin" id="cin" required="require"/>
                        </div>
                        <div class="form-group">
							<label class="control-label">Nom</label>
							<input class="form-control" type="text" name="nom" id="nom" required="require"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">Prenom</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Chef de Village</label>
                            <input class="form-control" type="text" name="nomCV" id="nomCV" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Village</label>
                            <input class="form-control" type="text" name="village" id="village" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Adresse</label>
                            <input class="form-control" type="text" name="adresse" id="adresse" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telephone</label>
                            <input class="form-control" type="text" name="tel" id="tel" required="require"/>
                        </div>

                        <div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
        <?php echo '<script'; ?>
 type="text/javascript">myAlertSuccess()<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">myAlertWarning()<?php echo '</script'; ?>
>
    </body>
</html><?php }
}
