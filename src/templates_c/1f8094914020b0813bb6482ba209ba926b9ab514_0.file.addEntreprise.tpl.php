<?php
/* Smarty version 4.2.1, created on 2023-03-28 15:20:48
  from 'C:\www\Projet-Web-G3\src\templates\addEntreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422e9b0080da2_47047852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f8094914020b0813bb6482ba209ba926b9ab514' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\addEntreprise.tpl',
      1 => 1680009646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422e9b0080da2_47047852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10566698396422e9b006e2f0_68533903', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3131434756422e9b006f111_85319021', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_10566698396422e9b006e2f0_68533903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_10566698396422e9b006e2f0_68533903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addEntr.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_3131434756422e9b006f111_85319021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3131434756422e9b006f111_85319021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form name="formulaire" action="index.php" method="post" class="info" onsubmit="return validateForm()">
        <p>Nom de l'entreprise : </p>
        <input class="champ" name="nomEntr" value="" placeholder="Nom de l'entreprise">
        <span class="error" id="errorNomEntr"></span>
        <p class="adresse">Adresse : </p>
        <input class="champ" name="numRue" value="" placeholder="Numéro de rue">
        <span class="error" id="errorNumRue"></span>
        <input class="champ" name="nomRue" value="" placeholder="Nom de rue">
        <span class="error" id="errorNomRue"></span>
        <input class="champ" placeholder="Code Postale" id="cp" name="cp" value="" placeholder="Code Postal">
        <span class="error" id="errorCP"></span>
        <select class="champ" placeholder="Ville" id="ville" name="ville">
            <option value="none">Ville</option>
        </select>
        <span class="error" id="errorVille"></span>
        <input class="champ" name="pays" value="" placeholder="Pays">
        <span class="error" id="errorpays"></span>
        <p>Secteur : </p>
        <select class="secteur" name="secteur1">
            <option value="none">Secteur</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect1');
$_smarty_tpl->tpl_vars['sect1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect1']->value) {
$_smarty_tpl->tpl_vars['sect1']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select class="secteur" name="secteur2">
            <option value="none">Secteur</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect2');
$_smarty_tpl->tpl_vars['sect2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect2']->value) {
$_smarty_tpl->tpl_vars['sect2']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select class="secteur" name="secteur3">
            <option value="none">Secteur</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sect3');
$_smarty_tpl->tpl_vars['sect3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect3']->value) {
$_smarty_tpl->tpl_vars['sect3']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <p>Nombre de stagiaire : </p>
        <input class="champ" name="nbStagiaire" value="" id="nbstagiaire" placeholder="Nombre de stagiaires">
        <span class="error" id="errorstg"></span>
        <button type="submit" id="ButAddEntr" name="actionEntr" value="add">Ajouter une entreprise</button>
    </form>
    <?php echo '<script'; ?>
>
    function validateForm() {
        var nomEntr = document.forms["formulaire"]["nomEntr"];
        var numRue = document.forms["formulaire"]["numRue"]
        var nomRue = document.forms["formulaire"]["nomRue"]
        var ville = document.forms["formulaire"]["ville"]
        var CP = document.forms["formulaire"]["cp"]
        var pays = document.forms["formulaire"]["pays"]
        var stg = document.forms["formulaire"]["nbStagiaire"]
        var bool = true;

        if (nomEntr.value == "") {
            document.getElementById('errorNomEntr').innerHTML = "* Veuillez entrer un nom valide!";
            nomEntr.focus();
            bool = false;
        } else {
            document.getElementById('errorNomEntr').innerHTML = "";
        }
        if (numRue.value == "") {
            document.getElementById('errorNumRue').innerHTML = "* Veuillez entrer un numéro de rue valide!";
            numRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNumRue').innerHTML = "";
        }
        if (nomRue.value == "") {
            document.getElementById('errorNomRue').innerHTML = "* Veuillez entrer un nom de rue valide!";
            nomRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNomRue').innerHTML = "";
        }
        if (ville.value == "") {
            document.getElementById('errorVille').innerHTML = "* Veuillez entrer une ville valide!";
            ville.focus();
            bool = false;
        } else {
            document.getElementById('errorVille').innerHTML = "";
        }
        if (CP.value == "") {
            document.getElementById('errorCP').innerHTML = "* Veuillez entrer un code postale valide!";
            CP.focus();
            bool = false;
        } else {
            document.getElementById('errorCP').innerHTML = "";
        }
        if (pays.value == "") {
            document.getElementById('errorPays').innerHTML = "* Veuillez entrer un pays valide!";
            pays.focus();
            bool = false;
        } else {
            document.getElementById('errorPays').innerHTML = "";
        }
        if (stg.value == "") {
            document.getElementById('errorstg').innerHTML = "Veuillez entrer un nombre de stagiaire valide!";
            nbstagiaire.focus()
            bool = false;
        } else {
            document.getElementById('errorstg').innerHTML = "";
        }
        return bool;
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/CP.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
