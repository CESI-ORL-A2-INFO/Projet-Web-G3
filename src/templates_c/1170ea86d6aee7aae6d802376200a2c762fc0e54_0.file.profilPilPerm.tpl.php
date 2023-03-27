<?php
/* Smarty version 4.2.1, created on 2023-03-27 09:48:11
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\profilPilPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64214a3bcb7493_27084899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1170ea86d6aee7aae6d802376200a2c762fc0e54' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\profilPilPerm.tpl',
      1 => 1679901532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64214a3bcb7493_27084899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145322203064214a3bca6850_57789808', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37896463664214a3bca7154_47490012', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154420058864214a3bcb6700_02612155', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_145322203064214a3bca6850_57789808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_145322203064214a3bca6850_57789808',
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
class Block_37896463664214a3bca7154_47490012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_37896463664214a3bca7154_47490012',
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
        <form class="form" action="index.php" method="get">
            <input class="champ" id="name" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
            <input class="champ" id="Prenom" type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
">
            <select name="centre">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCentre']->value, 'cent');
$_smarty_tpl->tpl_vars['cent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cent']->value) {
$_smarty_tpl->tpl_vars['cent']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['centre']->value == $_smarty_tpl->tpl_vars['cent']->value['Centre']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
"><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit" name="actionPil" value="modif">Modifier</button>
            <button type="submit" name="actionPil" value="suppr">Supprimer</button>
        </form>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['idPil']->value) {?>
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
    <?php } else { ?>

    <?php }
}
}
/* {/block 'content'} */
/* {block "script"} */
class Block_154420058864214a3bcb6700_02612155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_154420058864214a3bcb6700_02612155',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['idPil']->value) {?>
        <?php echo '<script'; ?>
>
            const form = document.querySelector("#formPromo");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                var val = document.getElementById("promo").value;
                if (val == "none") {
                    alert("Choisissez une promotion à ajouter");
                    return;
                }
                form.submit();
            })
        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "script"} */
}
