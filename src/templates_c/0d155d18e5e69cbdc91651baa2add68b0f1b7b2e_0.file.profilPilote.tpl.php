<?php
/* Smarty version 4.2.1, created on 2023-03-28 22:17:19
  from 'D:\www\projet\Projet-Web-G3\src\templates\profilPilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64234b4f23fe58_63440374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d155d18e5e69cbdc91651baa2add68b0f1b7b2e' => 
    array (
      0 => 'D:\\www\\projet\\Projet-Web-G3\\src\\templates\\profilPilote.tpl',
      1 => 1680032228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64234b4f23fe58_63440374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159657538464234b4f235b21_13291420', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138005511064234b4f236447_61059118', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79570791364234b4f23f801_08651482', "script");
?>
    <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_159657538464234b4f235b21_13291420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_159657538464234b4f235b21_13291420',
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
class Block_138005511064234b4f236447_61059118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_138005511064234b4f236447_61059118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profil Tuteur</h1>
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


    <div class="button-container">
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true" class="btn-deconnexion">Déconnexion</button>
    </div>
    </form>



    <div class="select-container">
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
class Block_79570791364234b4f23f801_08651482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_79570791364234b4f23f801_08651482',
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
