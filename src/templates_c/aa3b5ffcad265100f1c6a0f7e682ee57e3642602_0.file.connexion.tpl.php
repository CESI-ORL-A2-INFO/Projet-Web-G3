<?php
/* Smarty version 4.2.1, created on 2023-03-27 09:19:23
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421437b4719c8_19766979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3b5ffcad265100f1c6a0f7e682ee57e3642602' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679901532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421437b4719c8_19766979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4477189096421437b470621_64977884', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20753440906421437b471103_86051770', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_4477189096421437b470621_64977884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_4477189096421437b470621_64977884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/connexion.css">
<?php
}
}
/* {/block "navbarcss"} */
/* {block 'content'} */
class Block_20753440906421437b471103_86051770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20753440906421437b471103_86051770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function validateForm() {
            var mail = document.forms["formulaire"]["mail"];
            var mdp = document.forms["formulaire"]["mdp"]
            var bool = true;

            if (mail.value == "") {
                document.getElementById('errormail').innerHTML = "* Veuillez entrez un mail valide!";
                mail.focus();
                bool = false;
            } else {
                document.getElementById('errormail').innerHTML = "";
            }
            if (mdp.value == "") {
                document.getElementById('errorpass').innerHTML = "* Veuillez entrez un Mot de passe valide!";
                mdp.focus();
                bool = false;
            } else {
                document.getElementById('errorpass').innerHTML = "";
            }
            return bool;
        }
    <?php echo '</script'; ?>
>
    <style>
        .error {
            color: #D8000C;
            margin-left : 20%;
            padding-top:5%;
            
        }
        @media only screen and (max-width: 830px)
        {
            .error{
                margin-left:0%;
            }
        }
    </style>

    <div class="allh">
        <div class="wrapper">
            <div class="form">
                <form name="formulaire" action="index.php" method="post" id="form" onSubmit="return validateForm()">
                    <input class="champ" id="email" type="email" name="mail" placeholder="Adresse e-mail">
                    <span class="error" id="errormail"></span>
                    <input class="champ" id="password" type="password" name="mdp" placeholder="Mot de passe">
                    <span class="error" id="errorpass"></span> 
                    <button class="champ" id="connect" type="submit" name="p" value="home">Se connecter</button>
                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
