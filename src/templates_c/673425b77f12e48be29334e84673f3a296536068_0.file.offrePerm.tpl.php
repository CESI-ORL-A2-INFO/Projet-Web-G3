<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:13:30
  from 'C:\www\1111\Projet-Web-G3\src\templates\offrePerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421a48a8f0ea1_80821361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673425b77f12e48be29334e84673f3a296536068' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\offrePerm.tpl',
      1 => 1679924590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421a48a8f0ea1_80821361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12740556826421a48a8c93c6_49484470', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5176966326421a48a8c9ea2_75172114', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbarPerm.tpl");
}
/* {block "include"} */
class Block_12740556826421a48a8c93c6_49484470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_12740556826421a48a8c93c6_49484470',
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
class Block_5176966326421a48a8c9ea2_75172114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5176966326421a48a8c9ea2_75172114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="offre" method="post" action="./index.php">
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <label for="nomOffre" hidden>Nom Offre</label>
        <input type="text" id="nomOffre" name="nomOffre" value="<?php echo $_smarty_tpl->tpl_vars['nomOffre']->value;?>
">
        <select name="nomEntr">
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
        
        <input type="text" id="comp1" name="lvl1" value="<?php echo $_smarty_tpl->tpl_vars['compOffre']->value[0]['niveau'];?>
">
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
        <p class="dateOffre">Date de début : </p>
        <input type="date" name="dateDebut" value="<?php echo $_smarty_tpl->tpl_vars['dateOffre']->value;?>
">
        <p class="dateEmission">Date d'emission : </p>
        <input type="date" name="dateEmi" value="<?php echo $_smarty_tpl->tpl_vars['dateEmission']->value;?>
">
        <p class="place">Nombre de place : </p>
        <input type="text" name="nbPlace" value="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
">
        <p class="paie">Rémunération : </p>
        <input type="text" name="remuneration" value="<?php echo $_smarty_tpl->tpl_vars['paie']->value;?>
">
        <p class="mail">email : </p>
        <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
"><br>
        <textarea name="descr" rows="20" cols="120"><?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
</textarea>
        <button type="submit" name="action" value="modif">Modifier</button>
        <button type="submit" name="action" value="suppr">Supprimer</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
