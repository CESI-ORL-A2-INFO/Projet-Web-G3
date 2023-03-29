<?php
/* Smarty version 4.2.1, created on 2023-03-29 13:07:12
  from 'C:\www\Projet-Web-G3\src\templates\profilEntrPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64241be063f349_55909007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e91b35ec9acf8b4f23a23a582398dad3f487f561' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEntrPerm.tpl',
      1 => 1680079687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64241be063f349_55909007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109192205364241be05ed672_74300700', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205096984264241be05ee687_54204151', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_109192205364241be05ed672_74300700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_109192205364241be05ed672_74300700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEntrPerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_205096984264241be05ee687_54204151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_205096984264241be05ee687_54204151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="info">

        <form name="formulaire" action="index.php" method="post" >
            <p>Nom de l'entreprise : </p>
                <input class="champ" name="nomEntr" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomEntreprise'];?>
">
                <span class="error" id="errorNomEntr"></span>
                <p class="adresse">Adresse : </p>
                <input class="champ" name="numRue" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NumRue'];?>
">
                <span class="error" id="errorNumRue"></span>
                <input class="champ" name="nomRue" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomRue'];?>
">
                <span class="error" id="errorNomRue"></span>
                <input class="champ" id="cp" name="cp" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['CodePostale'];?>
" placeholder="Code Postal">
                <span class="error" id="errorCP"></span>
                <select class="champ" id="ville" name="ville">
                    <option value="none"><?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['Ville'];?>
</option>
                </select>
                <span class="error" id="errorVille"></span>
                <input class="champ" name="pays" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['Pays'];?>
" placeholder="Pays">
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

                    <?php if ($_smarty_tpl->tpl_vars['card']->value[0]['secteur'][0]['Secteur_Activite'] == $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
</option>

                    <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect1']->value['Secteur_Activite'];?>
</option>

                    <?php }?>

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

                    <?php if ($_smarty_tpl->tpl_vars['card']->value[0]['secteur'][1]['Secteur_Activite'] == $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
</option>

                    <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect2']->value['Secteur_Activite'];?>
</option>

                    <?php }?>

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

                    <?php if ($_smarty_tpl->tpl_vars['card']->value[0]['secteur'][2]['Secteur_Activite'] == $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
</option>

                    <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
"><?php echo $_smarty_tpl->tpl_vars['sect3']->value['Secteur_Activite'];?>
</option>

                    <?php }?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </select>
                <span class="error" id="errorSecteur"></span>
                <p>Nombre de stagiaire : </p>
                <input class="champ" type="text" name="nbStagiaire" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NbreStagiaire'];?>
">
                <span class="error" id="errorStg"></span>
                <button onclick="return validateForm()" class="btn-modif" type="submit" name="actionEntr" value="modif">Modifier l'entreprise</button>
                <button class="btn-suppr" type="submit" name="actionEntr" value="suppr">Supprimer l'entreprise</button>
    </form>
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
            <p class="debut">Date de début : <?php echo $_smarty_tpl->tpl_vars['data']->value['dateDebut'];?>
</p>
            <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['data']->value['duree'];?>
 semaines</p>
            <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['data']->value['ville'][0]['Ville'];?>
</p>
        </button>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </form>
    <form name="commentaire" class="comUser" action="index.php" method="post" onsubmit="return validateFormCom()">
        <?php if ($_smarty_tpl->tpl_vars['comUser']->value == null) {?>
        <select class="noteUser" name="note">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <textarea class="com" type="text" name="commentaire"></textarea>
        <button class="add" type="submit" name="action" value="add">Ajouter</button>
        <?php } else { ?>
        <select class="noteUser" name="note">
            <?php if ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 0) {?>
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 1) {?>
            <option value="0">0</option>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 2) {?>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 3) {?>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 4) {?>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected>4</option>
            <option value="5">5</option>
            <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['confiance'] == 5) {?>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5" selected>5</option>
            <?php }?>
        </select>
        <textarea class="com" name="com" value="" type="text" name="commentaire"><?php echo $_smarty_tpl->tpl_vars['comUser']->value['commentaire'];?>
</textarea>
        <span class="error" id="errorCom"></span>
        <button class="upd" type="submit" name="action" value="upd">Modifier</button>
        <button class="del" type="submit" name="action" value="del">Delete</button>
        <?php }?>
    </form>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comPil']->value, 'pil');
$_smarty_tpl->tpl_vars['pil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pil']->value) {
$_smarty_tpl->tpl_vars['pil']->do_else = false;
?>
    <h3 class="nomPil"><?php echo $_smarty_tpl->tpl_vars['pil']->value['NomPilote'];?>
 <?php echo $_smarty_tpl->tpl_vars['pil']->value['PrenomPilote'];?>
</h3>
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['pil']->value['confiance'];?>
</p>
    <p class="comPil"><?php echo $_smarty_tpl->tpl_vars['pil']->value['commentaire'];?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comEtud']->value, 'etud');
$_smarty_tpl->tpl_vars['etud']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['etud']->value) {
$_smarty_tpl->tpl_vars['etud']->do_else = false;
?>
    <h3 class="nomEtud"><?php echo $_smarty_tpl->tpl_vars['etud']->value['NomEtudiant'];?>
 <?php echo $_smarty_tpl->tpl_vars['etud']->value['PrenomEtudiant'];?>
</h3>
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['etud']->value['note'];?>
</p>
    <p class="comEtud"><?php echo $_smarty_tpl->tpl_vars['etud']->value['commentaire'];?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
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
            document.getElementById('errorStg').innerHTML = "Veuillez entrer un nombre de stagiaire valide!";
            nbstagiaire.focus()
            bool = false;
        } else {
            document.getElementById('errorStg').innerHTML = "";
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
    function validateFormCom(){
        desc = document.forms['commentaire']['com']
        var bool = true;
        
        if(desc.value = ""){
            document.getElementById('errorCom').innerHTML = "Veuillez entrer un commentaire!";
            desc.focus;
            bool = false;
        }else{
            document.getElementById('errorCom').innerHTML =""        
        }
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
