<?php
/* Smarty version 4.2.1, created on 2023-03-28 14:35:34
  from 'C:\www\955\Projet-Web-G3\src\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422df168e72f6_28708069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5343e7f16ef407efccc6b23fe9f6d5bb6198160e' => 
    array (
      0 => 'C:\\www\\955\\Projet-Web-G3\\src\\templates\\search.tpl',
      1 => 1680006813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422df168e72f6_28708069 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6583476786422df168d55d2_56779870', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4807581576422df168d6187_97398284', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_6583476786422df168d55d2_56779870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_6583476786422df168d55d2_56779870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/search.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_4807581576422df168d6187_97398284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4807581576422df168d6187_97398284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="formfiltre">
        <form action="index.php?" method="get" id="formfiltre">
            <input type="search" id="bar" value="<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
" name="search" placeholder="Recherche...">

            <input type="text" id="filtre" name="searchfiltre" placeholder="Filtre...">
            <select id="typefiltre" name="filtre">
                <option value="offre">Offre</option>
                <option value="entreprise">Entreprise</option>
                <option value="promotion">Promotion</option>
                <option value="comp">Compétences</option>
                <option value="secteur">Secteur d'activité</option>
        </select>
        <button id="butbar" name="p" value="search">Recherche</button>
    </form>
</div>

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
        <p class="promo">Promo :
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['promo'], 'prom');
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
        <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['data']->value['ville'][0]['Ville'];?>
</p>
        <p class="competence">Compétences :
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['competences'], 'comp');
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
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form>
<a class="firstPage"
    href="./index.php?p=search&current_page=1&filtre=<?php echo $_smarty_tpl->tpl_vars['filtre']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&searchfiltre=<?php echo $_smarty_tpl->tpl_vars['searchfiltre']->value;?>
">
    <<</a>
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value != 1) {?>
            <a class="pagePrec"
                href="./index.php?p=search&current_page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
&filtre=<?php echo $_smarty_tpl->tpl_vars['filtre']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&searchfiltre=<?php echo $_smarty_tpl->tpl_vars['searchfiltre']->value;?>
">
                <</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_page']->value != $_smarty_tpl->tpl_vars['lastPage']->value) {?>
                    <a class="pageSuiv"
                        href="./index.php?p=search&current_page=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
&filtre=<?php echo $_smarty_tpl->tpl_vars['filtre']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&searchfiltre=<?php echo $_smarty_tpl->tpl_vars['searchfiltre']->value;?>
">></a>
                <?php }?>
                <a class="lastPage"
                    href="./index.php?p=search&current_page=<?php echo $_smarty_tpl->tpl_vars['lastPage']->value;?>
&filtre=<?php echo $_smarty_tpl->tpl_vars['filtre']->value;?>
&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
&searchfiltre=<?php echo $_smarty_tpl->tpl_vars['searchfiltre']->value;?>
">>></a>
<?php
}
}
/* {/block 'content'} */
}
