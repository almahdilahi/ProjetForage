<?php
/* Smarty version 3.1.30, created on 2018-07-18 02:50:53
  from "C:\xampp\htdocs\ProjetForage\view\facture\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4e8eeda7e9e4_51958004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b0fe8c37e7ae1e0fefe21967411efb0ae96faa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\facture\\liste.html',
      1 => 1531875041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4e8eeda7e9e4_51958004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
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
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/myanimate.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>

        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                //alert("ok");

                $compteur = $("#Num");
                $compteur.on("change", function () {
                    $v_Num = $compteur.val();
                    //alert($v_cin);
                    $.ajax({
                        url: "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/getFacturesSearchJson/" + $v_Num,
                        dataType: "json",
                        success: function (json) {
                            $.each(json, function (index, value) {
                                //alert(value);
                                if (index == 0)
                                    $("#idF").val(value);

                                if (index == 1)
                                    $("#NumC").val(value);
                                if(value != null){
                                   var urlfact= "<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/fact/"+$v_Num;
                                    $("#url").attr('href',urlfact);
                                    var urlimg="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/download.png";
                                    $("#img").attr('src',urlimg);
                                    //$("#nom").attr('disabled','disabled');
                                }

                                if (index == 2)
                                    $("#cin").val(value);

                                if (index == 3)
                                    $("#prenom").val(value);

                                if (index == 4)
                                    $("#nom").val(value);

                                if (index == 5)
                                    $("#conso").val(value);

                                if (index == 6)
                                    $("#periode").val(value);

                                if (index == 7)
                                    $("#edition").val(value);

                                if (index == 8)
                                    $("#montant").val(value);

                                if (index == 9)
                                    $("#idAbonnement").val(value);

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
            <li class="hovfac"><a href="#" style="color: floralwhite;" >FACTURE</a></li>
            <li  class="hovreg"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Reglement/liste" style="color: floralwhite;">REGLEMENT</a></li>
            <li class="hovcli"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste" style="color: floralwhite;" >CLIENT</a></li>
            <li class="hovcom"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/liste" style="color: floralwhite;" >COMPTEUR</a></li>
        </ul>

    </div>
    
    <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px; font-family: cursive;width: 1400px;margin-left: 30px" >
        <div class="panel panel-info" style="background-color: #00b8d4;border-color: #00b8d4;border: solid 4px #00b8d4;">

           <div class="panel-heading" style="background-color: #ffffff;font-family: cursive;text-shadow: 5px 5px #00b8d4;color: floralwhite;text-decoration: solid;text-align: center;font-size: 30px;display: flex; ">
               <label style="margin-left: 350px">RECHERCHE FACTURE</label>
             <div style="font-size: 15px;color: #00b8d4;border-radius: 8px;border:solid 2px #00b8d4;margin-left: 15px;margin-top: 10px;width: 230px;display: flex;height: 30px;text-align: center">
                 <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/fact">  <input type="search" name="Num" id="Num" placeholder="Numero Compteur" required="require" style="border: none; margin-left: 5px" /> <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/search.jpg" style="width: 25px;margin-left: 5px"/></form></div></div>
            <div class="panel-body" style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">

                <table class="table table-bordered table-stripped" style="background-color: #00b8d4;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">
                    <tr  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: floralwhite;">
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">#</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Numero Compteur</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Carte ID</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Prenom</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Nom</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Consommation</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Periode</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Edition</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Montant</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">ID Abonnement</th>
                        <th  style="border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px">Action</th>
                    </tr>
                    <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compteurs']->value, 'compteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compteur']->value) {
?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
                    <tr  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px;color: #00b8d4;text-align: center">
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 25px; border-color: transparent" name="idF" id="idF"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 130px; border-color: transparent" name="NumC" id="NumC"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 120px; border-color: transparent" name="cin" id="cin"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 110px; border-color: transparent" name="prenom" id="prenom"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 60px; border-color: transparent" name="nom" id="nom"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 50px; border-color: transparent" name="conso" id="conso"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 100px; border-color: transparent" name="periode" id="periode"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 160px; border-color: transparent" name="edition" id="edition"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 100px; border-color: transparent" name="montant" id="montant"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><input type="text" style="width: 100px; border-color: transparent" name="idAbonnement" id="idAbonnement"/></td>
                        <td  style="background-color: #ffffff;border-color: #00b8d4;border:solid 5px #00b8d4;border-radius: 5px"><a id="url" href="" ><center><img src="" id="img"  style="width: 24px;" /></center></a></td>
                    </tr>

                </table>

            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/add" style="color: floralwhite; text-decoration: none;">Ajout d'une facture<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/add.jpg " style="width: 20px;border-radius: 5px;margin-left: 3px;"/></a>
        </div>
    </div>


    </body>
</html>
<?php }
}
