<?php
/* Smarty version 4.2.1, created on 2023-03-28 14:31:40
  from 'C:\www\955\Projet-Web-G3\src\templates\promoPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422de2cd05b09_52673820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9494723b02f2c7e60b45533378e18ff236739c55' => 
    array (
      0 => 'C:\\www\\955\\Projet-Web-G3\\src\\templates\\promoPerm.tpl',
      1 => 1680006699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422de2cd05b09_52673820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15920737096422de2ccfc1e0_01144904', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10810427186422de2ccfcc47_95633111', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_15920737096422de2ccfc1e0_01144904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_15920737096422de2ccfc1e0_01144904',
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
class Block_10810427186422de2ccfcc47_95633111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10810427186422de2ccfcc47_95633111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
 : </h1>
    <form class="newEtud" method="post" accept="index.php">
        <input type="text" name="nomEtud" placeholder="Nom de l'étudiant">
        <input type="text" name="prenomEtud" placeholder="Prénom de l'étudiant">
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
<?php
}
}
/* {/block 'content'} */
}
