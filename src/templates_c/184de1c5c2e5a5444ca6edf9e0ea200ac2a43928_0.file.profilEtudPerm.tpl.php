<?php
/* Smarty version 4.2.1, created on 2023-03-28 09:58:55
  from 'C:\www\955\Projet-Web-G3\src\templates\profilEtudPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64229e3f6d4bc1_92181326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184de1c5c2e5a5444ca6edf9e0ea200ac2a43928' => 
    array (
      0 => 'C:\\www\\955\\Projet-Web-G3\\src\\templates\\profilEtudPerm.tpl',
      1 => 1679990330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64229e3f6d4bc1_92181326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172412496264229e3f6b1844_99308419', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42788955664229e3f6b3d44_84483069', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_172412496264229e3f6b1844_99308419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_172412496264229e3f6b1844_99308419',
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
class Block_42788955664229e3f6b3d44_84483069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_42788955664229e3f6b3d44_84483069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Etudiant</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>

        <form method="Post" action="index.php">
            <div class="form">

                <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
                <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
">
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
                <div class="buttons-container">
                    <button type="submit" name="actionPil" value="modif">Modifier</button>
                    <button type="submit" name="actionPil" value="suppr">Supprimer</button>
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

<?php
}
}
/* {/block 'content'} */
}
