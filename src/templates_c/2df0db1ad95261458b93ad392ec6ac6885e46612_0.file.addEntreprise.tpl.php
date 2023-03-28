<?php
/* Smarty version 4.2.1, created on 2023-03-28 11:21:32
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\addEntreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422b19ca60a52_12997750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df0db1ad95261458b93ad392ec6ac6885e46612' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\addEntreprise.tpl',
      1 => 1679995290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422b19ca60a52_12997750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8555502596422b19ca568d8_99529513', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9687824586422b19ca57195_11792122', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_8555502596422b19ca568d8_99529513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_8555502596422b19ca568d8_99529513',
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
class Block_9687824586422b19ca57195_11792122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9687824586422b19ca57195_11792122',
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
        <input class="champ" name="ville" value="" placeholder="Ville">
        <span class="error" id="errorVille"></span>
        <input class="champ" name="cp" value="" placeholder="Code Postal">
        <span class="error" id="errorCP"></span>
        <input class="champ" name="pays" value="" placeholder="Pays">
        <span class="error" id="errorPays"></span>
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
        <span class="error" id="errorSecteur"></span>
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
        var secteur = document.forms["formulaire"]["secteur1"]
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
        if (secteur.value == "none") {
            document.getElementById('errorSecteur').innerHTML = "Veuillez entrer un secteur!";
            secteur.focus()
            bool = false;
        } else {
            document.getElementById('errorSecteur').innerHTML = "";
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
