<?php
/* Smarty version 3.1.30, created on 2018-07-17 06:14:12
  from "C:\xampp\htdocs\ProjetForage\view\client\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4d6d14aaad85_88109299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '846c567b23cabc7c75529055961073d6102cc844' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\client\\liste.html',
      1 => 1531799677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4d6d14aaad85_88109299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>

    <?php echo '<script'; ?>
 type="text/javascript">
        function myAlert(){
            var div = document.getElementById("alertuser");
            div.firstChild.nodeValue = swal({
                title : "User",
                text : "New User Added",
                imageUrl : "<?php echo '<?php ';?>echo $base_url; <?php echo '?>';?>public/image/rob2.jpg",
                html : true
            });
        }
        myAlert();

    <?php echo '</script'; ?>
>

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
            <li class="hovcli"><a href="#" style="color: floralwhite;" >CLIENT</a></li>
            <li class="hovcom"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste" style="color: floralwhite;" >COMPTEUR</a></li>

        </ul>
    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;font-family: cursive;width: 1250px;margin-left: 105px">
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">LISTE DES CLIENTS</div>
				<div class="panel-body" style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">

					<?php if (isset($_smarty_tpl->tpl_vars['clients']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['clients']->value != null) {?>
							<table class="table table-bordered table-stripped"  style="background-color: #00b8d4;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">

                                <tr  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: floralwhite;">
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Identifiant</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">ID Carte</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Nom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Prenom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Chef de Village</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Village</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Adresse</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Telephone</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
                                </tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                                <tr  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: #00b8d4;">
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['cin'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['nom'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['prenom'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['nomCV'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['village'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['adresse'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['client']->value['tel'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/edit/<?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
" ><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/edit.png" style="width: 24px;" /></center></a></td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/delete/<?php echo $_smarty_tpl->tpl_vars['client']->value['idC'];?>
" onclick='javascript: return confirmation()'><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/deletepubel.png " style="width: 20px;"/></center></a></td>
                                </tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
                <!-- 				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add" style="color: floralwhite; text-decoration: none;">Ajout d'un client<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/add.jpg " style="width: 20px;border-radius: 5px;margin-left: 3px;"/></a>
                -->
			</div>
		</div>
		
	</body>
</html>
<?php }
}
