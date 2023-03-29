<?php
/* Smarty version 4.2.1, created on 2023-03-28 22:11:12
  from 'D:\www\projet\Projet-Web-G3\src\templates\promoPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642349e0559f49_94552282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c12d736d156ca71b2daafb9e079c455f6d5318' => 
    array (
      0 => 'D:\\www\\projet\\Projet-Web-G3\\src\\templates\\promoPerm.tpl',
      1 => 1680033735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642349e0559f49_94552282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227713261642349e0550974_30544908', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_708821747642349e0551616_76476931', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_227713261642349e0550974_30544908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_227713261642349e0550974_30544908',
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
class Block_708821747642349e0551616_76476931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_708821747642349e0551616_76476931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
 : </h1>
    <form name="formulaire" class="newEtud" method="post" accept="index.php" onsubmit="return validateForm()">
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <span class="error" id="errorNom"></span>
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
        <span class="error" id="errorPrenom"></span>
        <br><button type="submit" name="action" value="add">Ajouter un étudiant</button>
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
