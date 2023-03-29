<?php
/* Smarty version 4.2.1, created on 2023-03-29 09:56:53
  from 'C:\www\Projet-Web-G3\src\templates\profilEtudPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423ef450eebd3_09096651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a2b3a03c7e073c44d65c9ed6c4034e8015f3f4' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEtudPerm.tpl',
      1 => 1680073218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423ef450eebd3_09096651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8875074716423ef450dbfb0_76945146', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21470738926423ef450dc8c9_39847745', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_8875074716423ef450dbfb0_76945146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_8875074716423ef450dbfb0_76945146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEtudPerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_21470738926423ef450dc8c9_39847745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21470738926423ef450dc8c9_39847745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profil</h1>
            <h3>Etudiant</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>

        <form name="formulaire "method="post" action="index.php" onsubmit="return validateForm()">
            <div class="form">

                <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
                <span class="error" id="errorNom"></span>
                <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
">
                <span class="error" id="errorPrenom"></span>
                <select class="champ abxd" name="centre">
                    <option value="none">Centre</option>
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
                <span class="error" id="errorCentre"></span>
                <select class="champ abxd" name="pilote">
                    <option value="none">Pilote</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPilote']->value, 'pil');
$_smarty_tpl->tpl_vars['pil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pil']->value) {
$_smarty_tpl->tpl_vars['pil']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['nomPilote']->value == $_smarty_tpl->tpl_vars['pil']->value['NomPilote']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['pil']->value['IdPilote'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['pil']->value['NomPilote'];?>
 <?php echo $_smarty_tpl->tpl_vars['pil']->value['PrenomPilote'];?>
</option>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['pil']->value['IdPilote'];?>
"><?php echo $_smarty_tpl->tpl_vars['pil']->value['NomPilote'];?>
 <?php echo $_smarty_tpl->tpl_vars['pil']->value['PrenomPilote'];?>
</option>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <span class="error" id="errorPilote"></span>
                <select class="champ abxd" name="promo">
                    <option value="none">Promotion</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPromotion']->value, 'promo1');
$_smarty_tpl->tpl_vars['promo1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo1']->value) {
$_smarty_tpl->tpl_vars['promo1']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['promo']->value == $_smarty_tpl->tpl_vars['promo1']->value['Promotion']) {?>
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
                <span class="error" id="errorPromo"></span>
                <div class="buttons-container">
                    <button type="submit" name="action" value="modif">Modifier</button>
                    <button type="submit" name="action" value="suppr">Supprimer</button>
                </div>
            </div>
        </form>
    </div>



    <div class="wrapperStage">
        <form class="cardContainer" method="get" action="./index.php">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['card']->value, 'data', false, 'i');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <button class="card" name="offre" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['IdOffre'];?>
">
                    <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['data']->value['nomOffre'];?>
</h3>
                    <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['data']->value['nomEntr'][0]['NomEntreprise'];?>
<br>secteur :
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['secteur'], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </h4>
                    <p class="debut">Date de début : <?php echo $_smarty_tpl->tpl_vars['data']->value['dateDebut'];?>
</p>
                    <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['data']->value['duree'];?>
 semaines</p>
                    <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['data']->value['ville'][0]['Ville'];?>
</p>
                    <p class="statut">Statut : <?php echo $_smarty_tpl->tpl_vars['data']->value['statut'][0]['statut'];?>
</p>
                </button>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    </div>
    <?php echo '<script'; ?>
>
    function validateForm(){
        var nom = document.forms['formulaire']['nom'];
        var prenom = document.forms['formulaire']['prenom'];
        var centre = document.forms['formulaire']['centre'];
        var pilote = document.forms['formulaire']['pilote'];
        var promo = document.forms['formulaire']['promo'];
        var bool = true;

        if (nom.value=""){
            document.getElementById('errorNom').innerHTML = "*Veuillez entrer un nom valide!"
            nom.focus();
            bool = false;
        }else{
            document.getElementById('errorNom').innerHTML = "";
        }

        if (prenom.value=""){
            document.getElementById('errorPrenom').innerHTML = "*Veuillez entrer un prenom valide!"
            prenom.focus();
            bool = false;
        }else{
            document.getElementById('errorPrenom').innerHTML = "";
        }

        if (centre.value="none"){
            document.getElementById('errorCentre').innerHTML = "*Veuillez entrer un centre valide!"
            centre.focus();
            bool = false;
        }else{
            document.getElementById('errorCentre').innerHTML = "";
        }

        if (pilote.value="none"){
            document.getElementById('errorPilote').innerHTML = "*Veuillez entrer un pilote valide!"
            pilote.focus();
            bool = false;
        }else{
            document.getElementById('errorPilote').innerHTML = "";
        }

        if (promo.value="none"){
            document.getElementById('errorPromo').innerHTML = "*Veuillez entrer une promotion valide!"
            promo.focus();
            bool = false;
        }else{
            document.getElementById('errorPromo').innerHTML = "";
        }
    }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
