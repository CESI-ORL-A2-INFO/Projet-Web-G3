<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:47:06
  from 'C:\www\ProjetMobile\new2\Projet-Web-G3\src\templates\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421ac6a9785a0_90383262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a24e0a6066b3123a2a8edaf55ed76abe585a418' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new2\\Projet-Web-G3\\src\\templates\\offre.tpl',
      1 => 1679901532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421ac6a9785a0_90383262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12721285446421ac6a96b7d7_04886970', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12118333996421ac6a96bf66_71780923', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block "include"} */
class Block_12721285446421ac6a96b7d7_04886970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_12721285446421ac6a96b7d7_04886970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/offre.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_12118333996421ac6a96bf66_71780923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12118333996421ac6a96bf66_71780923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="offre">
        <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
        <a href="./index.php?bookmark=true" class="icons" style="color: 
        <?php if ($_smarty_tpl->tpl_vars['isBook']->value == array()) {?>
            gray
        <?php } else { ?>
            red
        <?php }?>
        "><i class="fa-solid fa-bookmark fa-2x"></i></a>
        <h1 class="nomOffre"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value;?>
</h1>
        <a href="./index.php?p=profilEntr&entr=<?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
" class="nomEntr">
            <h3 class="nomEntr"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
</h3>
        </a>
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
        <ul class="promo">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value, 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['prom']->value["Promotion"];?>

                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <p class="addresse">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresse']->value, 'add', false, 'i');
$_smarty_tpl->tpl_vars['add']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['add']->value) {
$_smarty_tpl->tpl_vars['add']->do_else = false;
?>
                adresse : <?php echo $_smarty_tpl->tpl_vars['add']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['add']->value[1];?>
, <?php echo $_smarty_tpl->tpl_vars['add']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['add']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['add']->value[4];?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </p>
        <p class="duree">durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
 semaines</p>
        <ul class="competence">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competence']->value, 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                <li>
                    <?php echo $_smarty_tpl->tpl_vars['comp']->value[1];?>
 : <?php echo $_smarty_tpl->tpl_vars['comp']->value[2];?>
,
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <p class="dateOffre">Date de début : <?php echo $_smarty_tpl->tpl_vars['dateOffre']->value;?>
</p>
        <p class="dateEmission">Date d'emission : <?php echo $_smarty_tpl->tpl_vars['dateEmission']->value;?>
</p>
        <p class="place">Nombre de place : <?php echo $_smarty_tpl->tpl_vars['place']->value;?>
</p>
        <p class="paie">Rémunération : <?php echo $_smarty_tpl->tpl_vars['paie']->value;?>
</p>
        <p class="mail">email : <?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</p>
        <p class="descr"><?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
</p>
        <form action="./index.php" method="post">
            <select class="statut" name="statut">
                <?php if ($_smarty_tpl->tpl_vars['currentStatut']->value == array()) {?>
                    <option value="" selected>null</option>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statut']->value, 'stat', false, 'k');
$_smarty_tpl->tpl_vars['stat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['stat']->value) {
$_smarty_tpl->tpl_vars['stat']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['stat']->value[0] == $_smarty_tpl->tpl_vars['currentStatut']->value) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['stat']->value[0];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['stat']->value[0];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit">Changer le statut</button>
        </form>
    </div>
    
<?php
}
}
/* {/block 'content'} */
}
