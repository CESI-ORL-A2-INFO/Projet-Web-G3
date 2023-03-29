<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:07:28
  from 'C:\www\Projet-Web-G3\src\templates\offrePerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64241bf0292198_90616313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40661acf6c229e25f2a0a30b048d0c997c097666' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\offrePerm.tpl',
      1 => 1680079711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64241bf0292198_90616313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30477169964241bf02407a3_04318536', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150979642164241bf02423a5_52811276', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbarPerm.tpl");
}
/* {block "include"} */
class Block_30477169964241bf02407a3_04318536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_30477169964241bf02407a3_04318536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/offreperm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_150979642164241bf02423a5_52811276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_150979642164241bf02423a5_52811276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form name="formulaire" class="offre" method="post" action="./index.php" >
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <label for="nomOffre" class="abvc" hidden>Nom Offre</label>
        <input type="text" id="nomOffre" name="nomOffre" value="<?php echo $_smarty_tpl->tpl_vars['nomOffre']->value;?>
">
        <span class="error" id="errorNomOffre"></span>

        <br><br><select name="nomEntr">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomEntr']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['name']->value['NomEntreprise'] == $_smarty_tpl->tpl_vars['nomEntrSelect']->value) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomEntr']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['name']->value['NomEntreprise'] == $_smarty_tpl->tpl_vars['nomEntrSelect']->value) {?>
                <button class="getEntr" name="entr" value="<?php echo $_smarty_tpl->tpl_vars['name']->value['NomEntreprise'];?>
">Page entreprise</button>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <ul class="secteur">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value, 'sec');
$_smarty_tpl->tpl_vars['sec']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sec']->value) {
$_smarty_tpl->tpl_vars['sec']->do_else = false;
?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['sec']->value["Secteur_Activite"];?>

                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <span class="error" id="errorSecteur"></span>
        <h3>Promotion : </h3>
        <select name="promo1">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo1');
$_smarty_tpl->tpl_vars['promo1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo1']->value) {
$_smarty_tpl->tpl_vars['promo1']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['promoOffre']->value[0]['Promotion'] == $_smarty_tpl->tpl_vars['promo1']->value['Promotion']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo1']->value['Promotion'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <span class="error" id="errorP1"></span>
        <select name="promo2">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo2');
$_smarty_tpl->tpl_vars['promo2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo2']->value) {
$_smarty_tpl->tpl_vars['promo2']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['promoOffre']->value[1]['Promotion'] == $_smarty_tpl->tpl_vars['promo2']->value['Promotion']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo2']->value['Promotion'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo3">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo3');
$_smarty_tpl->tpl_vars['promo3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo3']->value) {
$_smarty_tpl->tpl_vars['promo3']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['promoOffre']->value[2]['Promotion'] == $_smarty_tpl->tpl_vars['promo3']->value['Promotion']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo3']->value['Promotion'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="promo4">
            <option value="none">Promotion</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo4');
$_smarty_tpl->tpl_vars['promo4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo4']->value) {
$_smarty_tpl->tpl_vars['promo4']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['promoOffre']->value[3]['Promotion'] == $_smarty_tpl->tpl_vars['promo4']->value['Promotion']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
"><?php echo $_smarty_tpl->tpl_vars['promo4']->value['Promotion'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select><br>
        <h3>Compétences : </h3>
        <select name="comp1">
            <option value="none">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp1');
$_smarty_tpl->tpl_vars['comp1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp1']->value) {
$_smarty_tpl->tpl_vars['comp1']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['compOffre']->value[0]['Compétences'] == $_smarty_tpl->tpl_vars['comp1']->value['Compétences']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp1']->value['Compétences'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <span class="error" id="errorC1"></span>
        
        <input type="text" id="comp1" name="lvl1" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[0]['niveau'];?>
">
        <span class="error" id="errorL1"></span>
        <select name="comp2">
            <option value="none">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp2');
$_smarty_tpl->tpl_vars['comp2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp2']->value) {
$_smarty_tpl->tpl_vars['comp2']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['compOffre']->value[1]['Compétences'] == $_smarty_tpl->tpl_vars['comp2']->value['Compétences']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp2']->value['Compétences'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl2" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[1]['niveau'];?>
">
        <select name="comp3">
            <option value="none">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp3');
$_smarty_tpl->tpl_vars['comp3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp3']->value) {
$_smarty_tpl->tpl_vars['comp3']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['compOffre']->value[2]['Compétences'] == $_smarty_tpl->tpl_vars['comp3']->value['Compétences']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp3']->value['Compétences'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl3" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[2]['niveau'];?>
">
        <select name="comp4">
            <option value="none">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp4');
$_smarty_tpl->tpl_vars['comp4']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp4']->value) {
$_smarty_tpl->tpl_vars['comp4']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['compOffre']->value[3]['Compétences'] == $_smarty_tpl->tpl_vars['comp4']->value['Compétences']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp4']->value['Compétences'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl4" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[3]['niveau'];?>
">
        <select name="comp5">
            <option value="none">Compétence</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value, 'comp5');
$_smarty_tpl->tpl_vars['comp5']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp5']->value) {
$_smarty_tpl->tpl_vars['comp5']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['compOffre']->value[4]['Compétences'] == $_smarty_tpl->tpl_vars['comp5']->value['Compétences']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
</option>
                <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
"><?php echo $_smarty_tpl->tpl_vars['comp5']->value['Compétences'];?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="lvl5" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[4]['niveau'];?>
">
        <p class="addresse">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adresse']->value, 'add', false, 'i');
$_smarty_tpl->tpl_vars['add']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['add']->value) {
$_smarty_tpl->tpl_vars['add']->do_else = false;
?>
                adresse :
                <?php echo $_smarty_tpl->tpl_vars['add']->value[0];?>
,
                <?php echo $_smarty_tpl->tpl_vars['add']->value[1];?>
,
                <?php echo $_smarty_tpl->tpl_vars['add']->value[3];?>
,
                <?php echo $_smarty_tpl->tpl_vars['add']->value[2];?>
,
                <?php echo $_smarty_tpl->tpl_vars['add']->value[4];?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </p>
        <p class="duree">durée :
            <input type="text" name="duree" value="<?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
">
            semaines
        </p>
        <span class="error" id="errorDuree"></span>
        <p class="dateOffre">Date de début : </p>
        <input type="date" name="dateDebut" value="<?php echo $_smarty_tpl->tpl_vars['dateOffre']->value;?>
">
        <span class="error" id="errorDateDebut"></span>
        <p class="dateEmission">Date d'emission : </p>
        <input type="date" name="dateEmi" value="<?php echo $_smarty_tpl->tpl_vars['dateEmission']->value;?>
">
        <span class="error" id="errorDateEmi"></span>
        <p class="place">Nombre de place : </p>
        <input type="text" name="nbPlace" value="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
">
        <span class="error" id="errorNbPlace"></span>
        <p class="paie">Rémunération : </p>
        <input type="text" name="remuneration" value="<?php echo $_smarty_tpl->tpl_vars['paie']->value;?>
">
        <span class="error" id="errorRemuneration"></span>
        <p class="mail">email : </p>
        <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
">
        <span class="error" id="errorEmail"></span></br>
        <textarea name="descr" rows="20" cols="120"><?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
</textarea>
        <span class="error" id="errorDesc"></span>

        <button onclick="return validateForm()" type="submit" name="action" value="modif">Modifier</button>
        <button type="submit" name="action" value="suppr">Supprimer</button>
    </form>
    <?php echo '<script'; ?>
>
        function validateForm(){
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
            if (promo1.value == "none") {
                document.getElementById('errorP1').innerHTML = "* Veuillez entrer une promotion!";
                promo1.focus();
                bool = false;
            } else {
                document.getElementById('errorP1').innerHTML = "";
            }
            if (comp1.value == "none") {
                document.getElementById('errorC1').innerHTML = "* Veuillez entrer une compétence!";
                comp1.focus();
                bool = false;
            } else {
                document.getElementById('errorC1').innerHTML = "";
            }
            if (desc.value == "") {
                document.getElementById('errorDesc').innerHTML = "* Veuillez entrer une Description!";
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
<?php
}
}
/* {/block 'content'} */
}
