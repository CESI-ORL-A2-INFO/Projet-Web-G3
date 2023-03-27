<?php
/* Smarty version 4.2.1, created on 2023-03-27 11:31:38
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\addOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421627ac82da6_21609494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7668f5f1af349feab026cb14407a4c69c830f856' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\addOffre.tpl',
      1 => 1679909256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421627ac82da6_21609494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4470010546421627ac76144_05230275', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252686806421627ac76930_20942872', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_4470010546421627ac76144_05230275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_4470010546421627ac76144_05230275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/addOffre.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_252686806421627ac76930_20942872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_252686806421627ac76930_20942872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
    function validateForm() {
        var nomOffre = document.forms["formulaire"]["nomOffre"];
        var duree = document.forms["formulaire"]["duree"]
        var nomRue = document.forms["formulaire"]["nomRue"]
        var ville = document.forms["formulaire"]["ville"]
        var CP = document.forms["formulaire"]["cp"]
        var pays = document.forms["formulaire"]["pays"]
        var bool = true;

        if (nomOffre.value == "") {
            document.getElementById('errorNomOffre').innerHTML = "* Veuillez entrez un nom valide!";
            nomOffre.focus();
            bool = false;
        } else {
            document.getElementById('errorNomEntr').innerHTML = "";
        }
        if (duree.value == "") {
            document.getElementById('errorDuree').innerHTML = "* Veuillez entrez une durée valide!";
            duree.focus();
            bool = false;
        } else {
            document.getElementById('errorNumRue').innerHTML = "";
        }
        if (nomRue.value == "") {
            document.getElementById('errorNomRue').innerHTML = "* Veuillez entrez un nom de rue valide!";
            nomRue.focus();
            bool = false;
        } else {
            document.getElementById('errorNomRue').innerHTML = "";
        }
        if (ville.value == "") {
            document.getElementById('errorVille').innerHTML = "* Veuillez entrez une ville valide!";
            ville.focus();
            bool = false;
        } else {
            document.getElementById('errorVille').innerHTML = "";
        }
        if (CP.value == "") {
            document.getElementById('errorCP').innerHTML = "* Veuillez entrez un code postale valide!";
            CP.focus();
            bool = false;
        } else {
            document.getElementById('errorCP').innerHTML = "";
        }
        if (pays.value == "") {
            document.getElementById('errorPays').innerHTML = "* Veuillez entrez un pays valide!";
            pays.focus();
            bool = false;
        } else {
            document.getElementById('errorPays').innerHTML = "";
        }
        return bool;
    }
    <?php echo '</script'; ?>
>
    <form class="wrapper" name="formulaire" action="index.php" method="post" onsubmit="return validateForm()">
        <h3>Informations : </h3>
        <input type="text" class="champ" name="nomOffre" placeholder="Nom de l'offre">
        <span class="error" id="errorNomOffre"></span>
        <select name="nomEntr">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomEntr']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="duree" class="champ" placeholder="Durée du stage">
        </br>
        <label for="dateDeb">Date de début : </label>
        <input id="dateDeb" type="date" class="champ" name="dateDebut" placeholder="Date de début du stage">
        </br>
        <label for="dateEmi">Date émission : </label>
        <input id="dateEmi" type="date" class="champ" name="dateEmi" placeholder="Date d'émission du stage">
        <input type="text" name="nbPlace" class="champ" placeholder="Nombre de place pour ce stage">
        <input type="text" name="remuneration" class="champ" placeholder="Rémunération de l'offre">
        <input type="text" name="email" class="champ" placeholder="Email de contact">
        <h3>Promotion : </h3>
        <select name="promo1" >
            <option value="">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo1');
$_smarty_tpl->tpl_vars['promo1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo1']->value) {
$_smarty_tpl->tpl_vars['promo1']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo2">
            <option value="">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo2');
$_smarty_tpl->tpl_vars['promo2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo2']->value) {
$_smarty_tpl->tpl_vars['promo2']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo3">
            <option value="">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo3');
$_smarty_tpl->tpl_vars['promo3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo3']->value) {
$_smarty_tpl->tpl_vars['promo3']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo4">
            <option value="">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo4');
$_smarty_tpl->tpl_vars['promo4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo4']->value) {
$_smarty_tpl->tpl_vars['promo4']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp1');
$_smarty_tpl->tpl_vars['comp1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp1']->value) {
$_smarty_tpl->tpl_vars['comp1']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl1" class="champ" value="" placeholder="Niveau de la compétence 1">
        <select name="comp2">
            <option value="">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp2');
$_smarty_tpl->tpl_vars['comp2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp2']->value) {
$_smarty_tpl->tpl_vars['comp2']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl2" class="champ" value="" placeholder="Niveau de la compétence 2">
        <select name="comp3">
            <option value="">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp3');
$_smarty_tpl->tpl_vars['comp3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp3']->value) {
$_smarty_tpl->tpl_vars['comp3']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl3" class="champ" value="" placeholder="Niveau de la compétence 3">
        <select name="comp4">
            <option value="">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp4');
$_smarty_tpl->tpl_vars['comp4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp4']->value) {
$_smarty_tpl->tpl_vars['comp4']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl4" class="champ" value="" placeholder="Niveau de la compétence 4">
        <select name="comp5">
            <option value="">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp5');
$_smarty_tpl->tpl_vars['comp5']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp5']->value) {
$_smarty_tpl->tpl_vars['comp5']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl5" class="champ" value="" placeholder="Niveau de la compétence 5">
        <br>
        <input type="text" id="descr" name="descr" placeholder="Description de l'offre">
        <button type="submit" id="ButAddOffre" name="addOffre" value="true">Ajouter</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
