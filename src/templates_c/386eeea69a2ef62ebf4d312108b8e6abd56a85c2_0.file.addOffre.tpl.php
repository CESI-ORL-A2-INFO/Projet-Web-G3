<?php
/* Smarty version 4.2.1, created on 2023-03-23 11:07:27
  from 'C:\www\ProjetMobile\new\Projet-Web-G3\src\templates\addOffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641c24df3cedd4_58033946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '386eeea69a2ef62ebf4d312108b8e6abd56a85c2' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new\\Projet-Web-G3\\src\\templates\\addOffre.tpl',
      1 => 1679565479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c24df3cedd4_58033946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_647654215641c24df3bea05_82828007', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187592961641c24df3bf5a6_09698486', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_647654215641c24df3bea05_82828007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_647654215641c24df3bea05_82828007',
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
class Block_187592961641c24df3bf5a6_09698486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187592961641c24df3bf5a6_09698486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="wrapper" accept="index.php" method="post">
        <input type="text" name="nomOffre" placeholder="Nom de l'offre">
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
        <input type="text" name="duree" placeholder="Durée du stage">
        <label for="dateDeb">Date de début : </label>
        <input id="dateDeb" type="date" name="dateDebut" placeholder="Date de début du stage">
        <label for="dateEmi">Date émission : </label>
        <input id="dateEmi" type="date" name="dateEmi" placeholder="Date d'émission du stage">
        <input type="text" name="nbPlace" placeholder="Nombre de place pour ce stage">
        <input type="text" name="remuneration" placeholder="Rémunération de l'offre">
        <input type="text" name="email" placeholder="Email de contact">
        <h3>Promotion : </h3>
        <select name="promo1">
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
        <input type="text" name="lvl1" value="" placeholder="Niveau de la compétence 1">
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
        <input type="text" name="lvl2" value="" placeholder="Niveau de la compétence 2">
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
        <input type="text" name="lvl3" value="" placeholder="Niveau de la compétence 3">
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
        <input type="text" name="lvl4" value="" placeholder="Niveau de la compétence 4">
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
        <input type="text" name="lvl5" value="" placeholder="Niveau de la compétence 5">
        <br>
        <input type="text" name="descr" placeholder="Description de l'offre">
        <button type="submit" name="addOffre" value="true">Ajouter</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
