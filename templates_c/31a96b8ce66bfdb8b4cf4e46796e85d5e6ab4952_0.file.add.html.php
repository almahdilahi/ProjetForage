<?php
/* Smarty version 3.1.30, created on 2018-07-31 06:12:09
  from "C:\xampp\htdocs\ProjetForage\view\abonnement\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5fe199457b58_00911422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a96b8ce66bfdb8b4cf4e46796e85d5e6ab4952' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\abonnement\\add.html',
      1 => 1533003456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5fe199457b58_00911422 (Smarty_Internal_Template $_smarty_tpl) {
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
public/js/sweetalert.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/sweetalert.css"><?php echo '</script'; ?>
>


        <?php echo '<script'; ?>
 type="text/javascript">
            function myAlertSuccess(){
                var div = document.getElementById("alertsuccess");
                div.firstChild.nodeValue = swal({
                    title : "Subscription",
                    text : "New Subscription Added",
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
                div.firstChild.nodeValue = sweetAlert("Oups", "Subsciption not save", "error");
            }
            myAlertWarning();
        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                //alert("ok");
                $client = $("#cin");
                $client.on("change", function () {
                    $v_cin = $client.val();
                    //alert($v_cin);
                    $.ajax({
                        url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/getClientsJson/" + $v_cin,
                        dataType: "json",
                        success: function (json) {
                            $.each(json, function (index, value) {
                                //alert(value);
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

		<div class="nav navbar navbar-fixed-top" style="background-color: #00b8d4;color: floralwhite;font-family: cursive;" id="navjs">

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
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">ABONNEMENT</div>
				<div class="panel-body" >
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
					<div class="alert alert-success" style="display: flex;">Data Added</div>

					<?php } else { ?>
					<div class="alert alert-warning">Data Not Added</div>
					<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/add" style="font-family: cursive;color: floralwhite;">
						<div class="form-group">
                        <div class="form-group">
                            <label class="control-label">Carte ID</label>
                            <input class="form-control" type="text" name="cin" id="cin"  required="require"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom" required="require" />
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
                            <label class="control-label">Date Abonnement</label>
                            <?php $_smarty_tpl->_assignInScope('dt', date('d/m/Y'));
?>
                            <input class="form-control" type="text" name="dateab" id="dateab" readonly  value="<?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Descritpion</label>
                            <input class="form-control" type="text" name="description" id="description" required="require"/>
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
