<?php
/* Smarty version 4.2.1, created on 2023-03-28 22:16:27
  from 'D:\www\projet\Projet-Web-G3\src\templates\addOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64234b1bad4962_21128422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3ebb4f381d7a9f97b3d734e5d77c81d8f3f72d' => 
    array (
      0 => 'D:\\www\\projet\\Projet-Web-G3\\src\\templates\\addOffre.tpl',
      1 => 1680034585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64234b1bad4962_21128422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39126348064234b1bac3cf6_92529199', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114309554964234b1bac45a2_47312270', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_39126348064234b1bac3cf6_92529199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_39126348064234b1bac3cf6_92529199',
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
class Block_114309554964234b1bac45a2_47312270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114309554964234b1bac45a2_47312270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function validateForm() {
            var nomOffre = document.forms["formulaire"]["nomOffre"];
            var duree = document.forms["formulaire"]["duree"];
            var NbPlace = document.forms["formulaire"]["nbPlace"];
            var remuneration = document.forms["formulaire"]["remuneration"];
            var email = document.forms["formulaire"]["email"];
            var promo1 = document.forms["formulaire"]["promo1"];
            var comp1 = document.forms["formulaire"]["comp1"];
            var desc = document.forms["formulaire"]["descr"];
            var debut = document.forms["formulaire"]["dateDebut"];     
            var emi = document.forms["formulaire"]["dateEmi"]; 
            var bool = true;

            if (nomOffre.value == "") {
                document.getElementById('errorNomOffre').innerHTML = "* Veuillez entrer un nom valide!";
                nomOffre.focus();
                bool = false;
            } else {
                document.getElementById('errorNomOffre').innerHTML = "";
            }
            if (duree.value == "") {
                document.getElementById('errorDuree').innerHTML = "* Veuillez entrer une durée valide!";
                duree.focus();
                bool = false;
            } else {
                document.getElementById('errorDuree').innerHTML = "";
            }
            if (NbPlace.value == "") {

                document.getElementById('errorNbPlace').innerHTML = "* Veuillez entrer un nombre de stagiaire valide!";
                NbPlace.focus();
                bool = false;
            } else {
                document.getElementById('errorNbPlace').innerHTML = "";
            }
            if (remuneration.value == "") {
                document.getElementById('errorRemuneration').innerHTML = "* Veuillez entrer un montant valide!";
                remuneration.focus();
                bool = false;
            } else {
                document.getElementById('errorRemuneration').innerHTML = "";
            }
            if (email.value == "") {
                document.getElementById('errorEmail').innerHTML = "* Veuillez entrer un email valide!";
                email.focus();
                bool = false;
            } else {
                document.getElementById('errorEmail').innerHTML = "";
            }
            if (promo1.value == "") {
                document.getElementById('errorP1').innerHTML = "* Veuillez entrer une promotion!";
                promo1.focus();
                bool = false;
            } else {
                document.getElementById('errorP1').innerHTML = "";
            }
            if (comp1.value == "") {
                document.getElementById('errorC1').innerHTML = "* Veuillez entrer une compétence!";
                comp1.focus();
                bool = false;
            } else {
                document.getElementById('errorC1').innerHTML = "";
            }
            if (desc.value == "") {
                document.getElementById('errorDesc').innerHTML = "* Veuillez entrez une description!";
                desc.focus();
                bool = false;
            } else {
                document.getElementById('errorDesc').innerHTML = "";
            }
            if (debut.value == "") {
                document.getElementById('errorDateDebut').innerHTML = "* Veuillez entrer une date de début valide!";
                debut.focus();
                bool = false;
            } else {
                document.getElementById('errorDateDebut').innerHTML = "";
            }
            if (emi.value == "") {
                document.getElementById('errorDateEmi').innerHTML = "* Veuillez entrer une date d'émission valide!";
                emi.focus();
                bool = false;
            } else {
                document.getElementById('errorDateEmi').innerHTML = "";
            }
            return bool;
        }
    <?php echo '</script'; ?>
>
    <form name="formulaire" class="wrapper" action="index.php" method="post" onsubmit="return validateForm()">
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
        <span class="error" id="errorDuree"></span>
        </br>
        <label for="dateDeb">Date de début : </label>
        <input id="dateDeb" type="date" class="champ" name="dateDebut" placeholder="Date de début du stage">
        <span class="error" id="errorDateDebut"></span>
        </br>
        <label for="dateEmi">Date émission : </label>
        <input id="dateEmi" type="date" class="champ" name="dateEmi" placeholder="Date d'émission du stage">
        <span class="error" id="errorDateEmi"></span>
        <input type="text" name="nbPlace" class="champ" value="" placeholder="Nombre de place pour ce stage">
        <span class="error" id="errorNbPlace"></span>
        <input type="text" name="remuneration" class="champ" placeholder="Rémunération de l'offre">
        <span class="error" id="errorRemuneration"></span>
        <input type="text" name="email" class="champ" placeholder="Email de contact">
        <span class="error" id="errorEmail"></span>
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
        <span class="error" id="errorP1"></span>
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
        <span class="error" id="errorP2"></span>
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
        <span class="error" id="errorP3"></span>
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
        <span class="error" id="errorP4"></span>
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
        <span class="error" id="errorC1"></span>
        <select name="lvl1">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl1"></span>
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
        <span class="error" id="errorC2"></span>
        <select name="lvl2">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl2"></span>
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
        <span class="error" id="errorC3"></span>
        <select name="lvl3">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl3"></span>
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
        <span class="error" id="errorC4"></span>
        <select name="lvl4">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl4"></span>
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
        <span class="error" id="errorC5"></span>
        <select name="lvl5">
            <option value="">Niveau</option>
            <option value="Débutant">Débutant</option>
            <option value="Intermediaire">Intermédiaire</option>
            <option value="Avancé">Avancé</option>
            <option value="Expérimenté">Expérimenté</option>
            <option value="Tout niveau">Tout Niveau</option>
        </select>
        <span class="error" id="errorLvl5"></span>
        <br>
        <input type="text" id="descr" name="descr" placeholder="Description de l'offre">
        <span class="error" id="errorDesc"></span>
        <button type="submit" id="ButAddOffre" name="AddOffre" value="add">Ajouter</button>

    </form>
<?php
}
}
/* {/block 'content'} */
}
