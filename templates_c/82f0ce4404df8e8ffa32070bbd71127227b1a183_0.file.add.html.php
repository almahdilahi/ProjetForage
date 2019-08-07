<?php
/* Smarty version 3.1.30, created on 2018-07-31 06:15:33
  from "C:\xampp\htdocs\ProjetForage\view\facture\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5fe2650f81f1_39865221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82f0ce4404df8e8ffa32070bbd71127227b1a183' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\facture\\add.html',
      1 => 1533010456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5fe2650f81f1_39865221 (Smarty_Internal_Template $_smarty_tpl) {
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Ajout Facture</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/jquery-ui.css"/>

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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
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
                    title : "Bill",
                    text : "New Bill Added",
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
                div.firstChild.nodeValue = div.firstChild.nodeValue = sweetAlert("Oups", "Bill not save", "error");}

        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                //alert("ok");
                $compteur = $("#NumC");
                $compteur.on("change", function () {
                    $v_NumC = $compteur.val();
                    //alert($v_NumC);
                    $.ajax({
                        url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/getClientsJson/" + $v_NumC,
                        dataType: "json",
                        success: function (json) {
                            $.each(json, function (index, value) {
                                //alert(value);
                                if (index == 0)
                                    $("#cin").val(value);
                                if(value != null){
                                    $("#cin").attr('readonly','readonly');
                                    //$("#cin").attr('disabled','disabled');
                                }
                                if (index == 1)
                                    $("#nom").val(value);
                                if(value != null){
                                    $("#nom").attr('readonly','readonly');
                                    //$("#nom").attr('disabled','disabled');
                                }
                                if (index == 2)
                                    $("#prenom").val(value);
                                if(value != null){
                                    $("#prenom").attr('readonly','readonly');
                                    //$("#prenom").attr('disabled','disabled');
                                }
                                if (index == 3)
                                    $("#nomCV").val(value);
                                if(value != null){
                                    $("#nomCV").attr('readonly','readonly');
                                    //$("#nomCV").attr('disabled','disabled');
                                }
                                if (index == 4)
                                    $("#village").val(value);
                                if(value != null){
                                    $("#village").attr('readonly','readonly');
                                    //$("#village").attr('disabled','disabled');
                                }
                                if (index == 5)
                                    $("#adresse").val(value);
                                if(value != null){
                                    $("#adresse").attr('readonly','readonly');
                                    //$("#adresse").attr('disabled','disabled');
                                }
                                if (index == 6)
                                    $("#tel").val(value);
                                if(value != null){
                                    $("#tel").attr('readonly','readonly');
                                    //$("#tel").attr('disabled','disabled');
                                }
                                if (index == 7)
                                    $("#idAbonnement").val(value);
                                if(value != null){
                                    $("#idAbonnement").attr('readonly','readonly');
                                    //$("#tel").attr('disabled','disabled');
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
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px;">FACTURATION</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
					<div class="alert alert-success">Data Added</div>

					<?php } else { ?>
					<div class="alert alert-warning">Data Not Added</div>
					<?php }?>
					<?php }?>

					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add" style="font-family: cursive;color: floralwhite;">
						<div class="form-group">
							<label class="control-label">Numero Compteur</label>
							<input class="form-control" type="text" name="NumC" id="NumC" required="require"/>
						</div>
                        <div class="form-group">
                            <label class="control-label">CIN</label>
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
                            <label class="control-label">Consommation en Littre</label>
                            <input class="form-control" type="text" name="conso" id="conso" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Periode de Facturation</label>
                            <?php echo setlocale(LC_TIME,"fr_FR.utf8","fra");?>

                            <input class="form-control" type="text" name="periode" id="periode" readonly  value="<?php echo strtoupper(strftime('%B',strtotime('-2 month')));?>
 - <?php echo strtoupper(strftime('%B',strtotime('last month')));?>
" required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Date Edition</label>
                            <?php $_smarty_tpl->_assignInScope('dt', date('d/m/Y'));
?>
                            <input class="form-control" type="text" name="edition" id="edition" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
" readonly required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">ID Abonnement</label>
                            <input class="form-control" type="text" name="idAbonnement" id="idAbonnement" required="require"/>
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
