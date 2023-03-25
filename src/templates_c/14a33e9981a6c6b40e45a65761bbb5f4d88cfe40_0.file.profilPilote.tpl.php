<?php
/* Smarty version 4.2.1, created on 2023-03-23 11:07:38
  from 'C:\www\ProjetMobile\new\Projet-Web-G3\src\templates\profilPilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641c24eadee398_72148928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a33e9981a6c6b40e45a65761bbb5f4d88cfe40' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new\\Projet-Web-G3\\src\\templates\\profilPilote.tpl',
      1 => 1679565479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c24eadee398_72148928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60197729641c24eade7725_94338701', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1754763929641c24eade7f62_81573943', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_60197729641c24eade7725_94338701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_60197729641c24eade7725_94338701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilPilote.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1754763929641c24eade7f62_81573943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1754763929641c24eade7f62_81573943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h1>Tuteur</h1>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <input class="champ" id="name" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" readonly>
            <input class="champ" id="Prenom" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" readonly>
            <input class="champ" id="Centre" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['centre']->value;?>
" readonly>
        </div>
    </div>
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
    </form>
    <form class="wrapperPromo" method="get" action="index.php">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo');
$_smarty_tpl->tpl_vars['promo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo']->value) {
$_smarty_tpl->tpl_vars['promo']->do_else = false;
?>
            <button type="submit" name="promo" value="<?php echo $_smarty_tpl->tpl_vars['promo']->value['IdPromo'];?>
">
                <h2 class="promotion">
                    <?php echo $_smarty_tpl->tpl_vars['promo']->value['Promotion'];?>

                </h2>
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
