<?php
/* Smarty version 3.1.30, created on 2018-07-23 23:23:15
  from "C:\xampp\htdocs\ProjetForage\view\abonnement\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5647436e5a98_61472583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e92b7614b33aa9dbbf27a1553d905aa5ef0aa139' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\abonnement\\liste.html',
      1 => 1532378294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5647436e5a98_61472583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
         <link  rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link  rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/fontawesome-all.css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/swal/dist/sweetalert.css"><?php echo '</script'; ?>
>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
        <?php echo '<script'; ?>
 type="text/javascript">
            function confirmation(){
                var msg=confirm("Voulez vous supprimer?");

                if(msg){
                    return true;
                }
                else{
                    return false;
                }
            }



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
            <li class="hovabn"><a href="#" style="color: floralwhite;" >ABONNEMENT</a></li>
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

    <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px; font-family: cursive" >
			<div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">
				<div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px; ">LISTE DES ABONNEMENTS</div>
				<div class="panel-body"  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">

					<?php if (isset($_smarty_tpl->tpl_vars['abonnements']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['abonnements']->value != null) {?>
							<table class="table table-bordered table-stripped"  style="background-color: #00b8d4;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">
								<tr  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: floralwhite;">
									<th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Id</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Numero Compteur</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Carte D'Identite</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Prenom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Nom</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Date Abonnement</th>
                                    <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
									<th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['abonnements']->value, 'abonnement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['abonnement']->value) {
?>
									<tr  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: #00b8d4;">
										    <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['Nab'];?>
</td>
                                            <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['NumC'];?>
</td>
                                            <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['cin'];?>
</td>
                                            <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['prenom'];?>
</td>
                                            <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['nom'];?>
</td>
                                            <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><?php echo $_smarty_tpl->tpl_vars['abonnement']->value['dateab'];?>
</td>
                                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/edit/<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['Nab'];?>
" ><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/edit.png" style="width: 24px;" /></center></a></td>
										<td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/delete/<?php echo $_smarty_tpl->tpl_vars['abonnement']->value['Nab'];?>
"><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
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
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Abonnement/add" style="color: floralwhite; text-decoration: none;">Ajout d'un abonnement<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/add.jpg " style="width: 20px;border-radius: 5px;margin-left: 3px;"/></a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
