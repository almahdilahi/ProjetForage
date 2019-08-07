<?php
/* Smarty version 3.1.30, created on 2018-07-31 17:50:42
  from "C:\xampp\htdocs\ProjetForage\view\compteur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b6085522fef08_99569780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01956753afce968e7418f9f0ad1c221158b17070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\compteur\\liste.html',
      1 => 1533052239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b6085522fef08_99569780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link  rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
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
Facture/liste" style="color: floralwhite;" >FACTURE</a></li>
            <li  class="hovreg"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/liste" style="color: floralwhite;">REGLEMENT</a></li>
            <li class="hovcli"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste" style="color: floralwhite;" >CLIENT</a></li>
            <li class="hovcom"><a href="#" style="color: floralwhite;" >COMPTEUR</a></li>

        </ul>
    </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px; font-family: cursive;width: 1400px;margin-left: 30px" >
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">LISTE COMPTEURS</div>
				<div class="panel-body" style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">

					<?php if (isset($_smarty_tpl->tpl_vars['compteurs']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['compteurs']->value != null) {?>
							<table class="table table-bordered table-stripped" style="background-color: #00b8d4;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">
                                <tr  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: floralwhite;">
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Identifiant</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Numero</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Consommation En Chiffre</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Consommation En Lettre</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">ID Carte</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Prenom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Nom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">ID Abonnement</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
																		<th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
                                </tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compteurs']->value, 'compteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compteur']->value) {
?>
                                <tr  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: #00b8d4;">
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['NumC'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['consChiffre'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['consLettre'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['cin'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['prenom'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['nom'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['compteur']->value['idAbonnement'];?>
</td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/edit/<?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
"><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/edit.png" style="width: 24px;" /></center></a></td>
                                    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/delete/<?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
"><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/deletepubel.png " style="width: 20px;"/></center></a></td>
																		  <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/coupure/<?php echo $_smarty_tpl->tpl_vars['compteur']->value['idCompteur'];?>
"><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/deletebase.png " style="width: 20px;"/></center></a></td>

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
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/listecoupure" style="color: floralwhite; text-decoration: none;">Liste Compteurs Coupes<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/add.jpg " style="width: 20px;border-radius: 5px;margin-left: 3px;"/></a>

			</div>
		</div>

	</body>
</html>
<?php }
}
