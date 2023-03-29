<?php
/* Smarty version 4.2.1, created on 2023-03-29 09:56:49
  from 'C:\www\Projet-Web-G3\src\templates\promoPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423ef41504157_42869928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57151fe34dc38ae3cdaded01af6f00befec2981d' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\promoPerm.tpl',
      1 => 1680076607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423ef41504157_42869928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4630996566423ef414e67b9_83768905', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20823206636423ef414e9af3_20900523', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_4630996566423ef414e67b9_83768905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_4630996566423ef414e67b9_83768905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/promotion.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_20823206636423ef414e9af3_20900523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20823206636423ef414e9af3_20900523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
 : </h1>
    <form name="formulaire" class="newEtud" method="post" accept="index.php" >
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <span class="error" id="errorNom"></span>
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
        <span class="error" id="errorPrenom"></span>
        <br><button type="submit" name="action" value="add" onclick="return validateForm()">Ajouter un étudiant</button>
        <button type="submit" name="actionPromo" value="del">Supprimer la promotion</button>
    </form>
    <h2>Etudiant : </h2>
    <form class="cardContainer" method="get" action="index.php">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etudiant']->value, 'etud');
$_smarty_tpl->tpl_vars['etud']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['etud']->value) {
$_smarty_tpl->tpl_vars['etud']->do_else = false;
?>
            <button class="card" name="etud" value="<?php echo $_smarty_tpl->tpl_vars['etud']->value['IdEtudiant'];?>
">
                <p><?php echo $_smarty_tpl->tpl_vars['etud']->value['NomEtudiant'];?>
 <?php echo $_smarty_tpl->tpl_vars['etud']->value['PrenomEtudiant'];?>
</p>
            </button>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
    <?php echo '<script'; ?>
>
    function validateForm(){
        var nom = document.forms['formulaire']['nomEtud'];
        var prenom = document.forms['formulaire']['prenomEtud'];
        var bool = true;
        if (nom.value == ""){
            document.getElementById('errorNom').innerHTML = "*Veuillez entrer un nom valide!"
            nom.focus()
            bool = false
        }else{
            document.getElementById('errorNom').innerHTML = ""
        }
        if (prenom.value == ""){
            document.getElementById('errorPrenom').innerHTML = "*Veuillez entrer un prenom valide!"
            prenom.focus()
            bool = false
        }else{
            document.getElementById('errorPrenom').innerHTML = ""
        }
    return bool;
    }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
