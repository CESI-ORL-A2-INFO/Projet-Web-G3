<?php
/* Smarty version 4.2.1, created on 2023-03-23 11:16:25
  from 'C:\www\ProjetMobile\new\Projet-Web-G3\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641c26f9ebd209_39470144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c219b44c6c5deec4cc4044e707f627b4a3236d' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\new\\Projet-Web-G3\\src\\templates\\home.tpl',
      1 => 1679565479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c26f9ebd209_39470144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1114728609641c26f9ea6341_64043967', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1203993389641c26f9ea6d52_34810320', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_1114728609641c26f9ea6341_64043967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_1114728609641c26f9ea6341_64043967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/home.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1203993389641c26f9ea6d52_34810320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1203993389641c26f9ea6d52_34810320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <form class="card_container" method="get" action="./index.php">
            <button class="card one" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[5];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[5];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[5][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[5], 'sect');
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
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[5];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[5], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[5][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[5], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
            <button class="card two" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[4];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[4];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[4][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[4], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[4];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[4], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[4][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[4], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
            <button class="card three" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[3];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[3];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[3][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[3], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[3];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[3], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[3][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[3], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
            <button class="card four" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[2];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[2];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[2][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[2], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[2];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[2], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[2][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[2], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
            <button class="card five" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[1];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[1];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[1][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[1], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[1];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[1], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[1][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[1], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
            <button class="card six" name="offreLast" value="<?php echo $_smarty_tpl->tpl_vars['idOffre']->value[0];?>
">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[0];?>
</h3>
                <h4 class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value[0][0];?>
<br>secteur :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteur']->value[0], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></h4>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value[0];?>
 semaines</p>
                <p class="promo">Promo :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promo']->value[0], 'prom');
$_smarty_tpl->tpl_vars['prom']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prom']->value) {
$_smarty_tpl->tpl_vars['prom']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['prom']->value['Promotion'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value[0][0];?>
</p>
                <p class="competence">Compétences :
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['competences']->value[0], 'comp');
$_smarty_tpl->tpl_vars['comp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comp']->value) {
$_smarty_tpl->tpl_vars['comp']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['comp']->value['Compétences'];?>
 - <?php echo $_smarty_tpl->tpl_vars['comp']->value['niveau'];?>
 /
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
            </button>
        </form>
        <div class="about">
            <h3>Qui sommes nous ?</h3>
            <p>lorem ipsum</p>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
