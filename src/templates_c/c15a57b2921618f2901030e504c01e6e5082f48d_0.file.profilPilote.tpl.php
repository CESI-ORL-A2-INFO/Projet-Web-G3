<?php
/* Smarty version 4.2.1, created on 2023-03-27 14:39:08
  from 'C:\www\1111\Projet-Web-G3\src\templates\profilPilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64218e6cd48c07_49854813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15a57b2921618f2901030e504c01e6e5082f48d' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\profilPilote.tpl',
      1 => 1679920729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64218e6cd48c07_49854813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5487257064218e6cd3b7a5_56095434', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188716904764218e6cd3c532_88573825', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77556013264218e6cd480e4_30868897', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_5487257064218e6cd3b7a5_56095434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_5487257064218e6cd3b7a5_56095434',
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
class Block_188716904764218e6cd3c532_88573825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188716904764218e6cd3c532_88573825',
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
    <form method="get" action="index.php" id="formPromo">
        <select name="promoAdd" id="promo">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pasPromo']->value, 'pPromo');
$_smarty_tpl->tpl_vars['pPromo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pPromo']->value) {
$_smarty_tpl->tpl_vars['pPromo']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['pPromo']->value['IdPromo'];?>
"><?php echo $_smarty_tpl->tpl_vars['pPromo']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button name="addPromo" value="true">Ajouter promotion</button>
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
/* {block "script"} */
class Block_77556013264218e6cd480e4_30868897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_77556013264218e6cd480e4_30868897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        const form = document.querySelector("#formPromo");
        form.addEventListener("submit", function(event) {
            event.preventDefault();
            var val = document.getElementById("promo").value;
            if (val == "none"){
                alert("Choisissez une promotion à ajouter");
                return;
            }
            form.submit();
        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
