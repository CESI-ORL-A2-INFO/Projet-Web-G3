<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:45:10
  from 'C:\www\1111\Projet-Web-G3\src\templates\profilEntrPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421abf6c6b3f6_10429617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7badf9c5bb7c62178ccc8769e7417aa9d3600a02' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\profilEntrPerm.tpl',
      1 => 1679928250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421abf6c6b3f6_10429617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6871411486421abf6c2f003_33384727', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1153758486421abf6c30f34_28307853', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_6871411486421abf6c2f003_33384727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_6871411486421abf6c2f003_33384727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEntr.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1153758486421abf6c30f34_28307853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1153758486421abf6c30f34_28307853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="info">
        <form action="index.php" method="post">
            <p>Nom de l'entreprise : </p>
                <input class="champ" placeholder="Entrez le nom de l'entreprise" name="nomEntr" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomEntreprise'];?>
">
                <p class="adresse">Adresse : </p>
                <input class="champ" placeholder="Numéro de rue" name="numRue" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NumRue'];?>
">
                <input class="champ" placeholder="Nom de rue" name="nomRue" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomRue'];?>
">
                <input class="champ" placeholder="Code Postale" id="cp" name="cp" value="" placeholder="Code Postal">
                <select class="champ" placeholder="Ville" id="ville" name="ville">
                    <option value="none">Ville</option>
                </select>
                <input class="champ" placeholder="Pays" name="pays" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['Pays'];?>
">
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
                <p>Nombre de stagiaire : </p>
                <input type="text" placeholder="Nombre de stagiaire" name="nbStagiaire" value="<?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NbreStagiaire'];?>
">
                <button type="submit" name="actionEntr" value="modif">Modifier l'entreprise</button>
                <button type="submit" name="actionEntr" value="suppr">Supprimer l'entreprise</button>
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
    <form class="comUser" action="index.php" method="post">
        <?php if ($_smarty_tpl->tpl_vars['comUser']->value == null) {?>
        <select class="noteUser" name="note">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <textarea placeholder="Entrez votre commentaire ici" class="com" type="text" name="commentaire"></textarea>
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
        <textarea class="com" type="text" name="commentaire"><?php echo $_smarty_tpl->tpl_vars['comUser']->value['commentaire'];?>
</textarea>

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
 src="./js/CP.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
