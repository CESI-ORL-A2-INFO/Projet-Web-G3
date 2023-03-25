<?php
/* Smarty version 4.2.1, created on 2023-03-24 13:53:58
  from 'C:\www\ProjetMobile\new\Projet-Web-G3\src\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641d9d6642c797_22494216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713c1ee1f47e49703cdd4732e12204032e790bc2' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new\\Projet-Web-G3\\src\\templates\\connexion.tpl',
      1 => 1679662434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d9d6642c797_22494216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1111485216641d9d6642b0e6_79543789', "navbarcss");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2005087877641d9d6642bca8_89584886', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'footer.tpl');
}
/* {block "navbarcss"} */
class Block_1111485216641d9d6642b0e6_79543789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbarcss' => 
  array (
    0 => 'Block_1111485216641d9d6642b0e6_79543789',
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
class Block_2005087877641d9d6642bca8_89584886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2005087877641d9d6642bca8_89584886',
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
