<?php
/* Smarty version 3.1.30, created on 2018-07-31 05:55:05
  from "C:\xampp\htdocs\ProjetForage\view\reglement\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5fdd99942ce8_58601205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102a354a9b8c35c5ad13a29481146d7652d9e0ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\reglement\\add.html',
      1 => 1533003578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5fdd99942ce8_58601205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link  rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/jquery-ui.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery-ui.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert.css"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert-dev.js"><?php echo '</script'; ?>
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
                    title : "Settlement",
                    text : "New Settlement Added",
                    imageUrl : "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/successalert.png",
                    html : true
                });
            }


        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            function myAlertWarning(){
                var div = document.getElementById("alertwarning");
                div.firstChild.nodeValue = div.firstChild.nodeValue = sweetAlert("Oups", "Settlement not save", "error");}

        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                //alert("ok");
                $facture = $("#idFacture");
                $facture.on("change", function () {
                    $v_idFacture = $facture.val();
                    //alert($v_idF);
                    $.ajax({
                        url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/getFacturesJson/" + $v_idFacture,
                        dataType: "json",
                        success: function (json) {
                            $.each(json, function (index, value) {
                                //alert(value);
                                if (index == 0)
                                    $("#montant").val(value);
                                if(value != null){
                                    $("#montant").attr('readonly','readonly');
                                    //$("#nom").attr('disabled','disabled');
                                }
                                if (index == 1)
                                    $("#montantL").val(value);
                                if(value != null){
                                    $("#montantL").attr('readonly','readonly');
                                    //$("#prenom").attr('disabled','disabled');
                                }
                            });
                        }
                    });
                });
            });
            //alert("ok")
        <?php echo '</script'; ?>
>
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
			<div class="panel panel-info"  style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">REGLEMENT FACTURE</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
					<div class="alert alert-success" style="display: flex;">Data Added</div>

					<?php } else { ?>
					<div class="alert alert-warning">Data Not Added</div>
					<?php }?>
					<?php }?>
                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/add" style="font-family: cursive;color: floralwhite;">
                        <div class="form-group">
                            <label class="control-label">ID Facture</label>
                            <input class="form-control" type="text" name="idFacture" id="idFacture" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Montant En Chiffre</label>
                            <input class="form-control" type="text" name="montant" id="montant"  required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Montant En Lettre</label>
                            <input class="form-control" type="text" name="montantL" id="montantL"  required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date</label>
                            <?php $_smarty_tpl->_assignInScope('dt', date('d/m/Y'));
?>
                            <input class="form-control" type="text" name="date" id="date" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
" readonly required="require"/>
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
</html>
<?php }
}
