<?php
/* Smarty version 3.1.30, created on 2018-07-13 05:44:43
  from "C:\xampp\htdocs\ProjetForage\view\login\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b48202b03ff98_46951199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ae0fc11a76c136784a495ad2a9abeb5e7d3907' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetForage\\view\\login\\index.html',
      1 => 1531453480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48202b03ff98_46951199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page d'accueil</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
    <!-- integration de javascript dans le moteur de rendu de vue Smarty -->
    
    <?php echo '<script'; ?>
 language=javascript>
        function load_design() {
            document.getElementById("design_js").style.color = "#40007d";
        }

    <?php echo '</script'; ?>
>
    
</head>
<body onload="load_design()">
<div style="margin-top:;"><center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/senndokh.png" width="500px" height="200px"><center></div>
<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {
if ($_smarty_tpl->tpl_vars['ok']->value == 0) {?>

<div  style="width: 500px;margin-top: 50px;text-align: center;margin-left: 430px;  ">

    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/danger2.png"/> </div>
<?php }
}?>


<center>
    <div id="login" style="margin-top:25px;">

        <div id="picture">
            <center><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/log1.jpg" height="200px" width="200px"></center>
        </div>

        <div>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Login/connect">

                <div class="form-group">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/p1.jpg" height="30px" width="30px">
                    <input type="text" name="login" class="input-lg" placeholder="Nom d'utilisateur" style="border: 2px solid #104E8B"/>
                </div>

                <div class="form-group">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/log3.jpg" height="30px" width="30px">
                    <input type="password" name="password" class="input-lg" placeholder="Mot de passe" style="border: 2px solid #104E8B"/>
                </div>

                <div class="submit">
                    <button type="submit" name="submit" class="btn btn-info btn-lg">Se connecter</button>
                </div>

                <form>

                    <div>

                    </div>

</center>

</body>
</html>


<?php }
}
