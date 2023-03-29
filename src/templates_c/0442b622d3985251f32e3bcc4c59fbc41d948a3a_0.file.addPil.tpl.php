<?php
/* Smarty version 4.2.1, created on 2023-03-29 09:59:11
  from 'C:\www\Projet-Web-G3\src\templates\addPil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423efcf38dde2_52883796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0442b622d3985251f32e3bcc4c59fbc41d948a3a' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\addPil.tpl',
      1 => 1680073199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423efcf38dde2_52883796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8600532986423efcf385b32_61390501', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5662454806423efcf3863c4_95225376', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_8600532986423efcf385b32_61390501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_8600532986423efcf385b32_61390501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addPil.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_5662454806423efcf3863c4_95225376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5662454806423efcf3863c4_95225376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function validateForm() {
            var nom = document.forms['formulaire']['nom']
            var prenom = document.forms['formulaire']['prenom']
            var centre = document.forms['formulaire']['centre']
            var admin = document.forms['formulaire']['admin']
            var bool = true;

            if (nom.value == "") {
                document.getElementById('errorNom').innerHTML = "* Veuillez entrer un nom valide!";
                nom.focus();
                bool = false;
            } else {
                document.getElementById('errorNom').innerHTML = "";
            }
            if (prenom.value == "") {
                document.getElementById('errorPrenom').innerHTML = "* Veuillez entrer un prenom valide!";
                prenom.focus();
                bool = false;
            } else {
                document.getElementById('errorPrenom').innerHTML = "";
            }
            if (centre.value == "none") {
                document.getElementById('errorCentre').innerHTML = "* Veuillez entrer un centre valide!";
                centre.focus();
                bool = false;
            } else {
                document.getElementById('errorCentre').innerHTML = "";
            }
            return bool;
        }
    <?php echo '</script'; ?>
>
    <form class="wrapper" name="formulaire" accept="index.php" method="post" onsubmit="return validateForm()">
        <input class="champ" type="text" name="nom" placeholder="Nom">
        <span class="error" id="errorNom"></span>
        <input class="champ" type="text" name="prenom" placeholder="Prenom">
        <span class="error" id="errorPrenom"></span>
        <select name="centre">
            <option value="none">Centre</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCentre']->value, 'cent');
$_smarty_tpl->tpl_vars['cent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cent']->value) {
$_smarty_tpl->tpl_vars['cent']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
"><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <span class="error" id="errorCentre"></span>
        <select name="admin">
            <option value="0">N'est pas admin</option>
            <option value="1">Est admin</option>
        </select>
        <span class="error" id="errorAdmin"></span>
        <button id="ButAddPil" type="text" name="addPil" value="add">Ajouter</button>
<?php
}
}
/* {/block 'content'} */
}
