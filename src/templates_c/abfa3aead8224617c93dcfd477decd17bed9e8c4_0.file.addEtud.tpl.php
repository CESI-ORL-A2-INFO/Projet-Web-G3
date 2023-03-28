<?php
/* Smarty version 4.2.1, created on 2023-03-28 09:56:36
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\addEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64229db4c33b70_78821873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfa3aead8224617c93dcfd477decd17bed9e8c4' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\addEtud.tpl',
      1 => 1679990195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64229db4c33b70_78821873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130337398564229db4c28d48_07738474', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101117175864229db4c29594_90306646', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_130337398564229db4c28d48_07738474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_130337398564229db4c28d48_07738474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addEtud.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_101117175864229db4c29594_90306646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101117175864229db4c29594_90306646',
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
            var pilote = document.forms['formulaire']['pilote']
            var promo = document.forms['formulaire']['pilote']
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
            if (pilote.value == "none") {
                document.getElementById('errorPilote').innerHTML = "* Veuillez entrer un pilote valide!";
                pilote.focus();
                bool = false;
            } else {
                document.getElementById('errorPilote').innerHTML = "";
            }
            if (promo.value == "none") {
                document.getElementById('errorPromo').innerHTML = "* Veuillez entrer une promotion valide!";
                promo.focus();
                bool = false;
            } else {
                document.getElementById('errorPromo').innerHTML = "";
            }
            return bool;
        }
    <?php echo '</script'; ?>
>
    <form nom="formulaire" class="wrapper" action="index.php" method="post" onsubmit="return validateForm()">
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
        <select name="pilote">
            <option value="none">Pilote</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPilote']->value, 'pil');
$_smarty_tpl->tpl_vars['pil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pil']->value) {
$_smarty_tpl->tpl_vars['pil']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['pil']->value['IdPilote'];?>
"><?php echo $_smarty_tpl->tpl_vars['pil']->value['NomPilote'];?>
 <?php echo $_smarty_tpl->tpl_vars['pil']->value['PrenomPilote'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <span class="error" id="errorCentre"></span>
        <select name="promo">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPromotion']->value, 'promo1');
$_smarty_tpl->tpl_vars['promo1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo1']->value) {
$_smarty_tpl->tpl_vars['promo1']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo1']->value['IdPromo'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <span class="error" id="errorCentre"></span>
        <button type="submit" id="ButAddEtud" name="addEtud" value="add">Ajouter</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
