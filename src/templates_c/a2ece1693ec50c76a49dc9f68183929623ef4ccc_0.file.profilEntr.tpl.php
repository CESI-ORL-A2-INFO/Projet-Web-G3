<?php
/* Smarty version 4.2.1, created on 2023-03-22 16:59:18
  from 'C:\prosit\1\Projet-Web-G3\src\templates\profilEntr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b25d6cec813_49383667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ece1693ec50c76a49dc9f68183929623ef4ccc' => 
    array (
      0 => 'C:\\prosit\\1\\Projet-Web-G3\\src\\templates\\profilEntr.tpl',
      1 => 1679500754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b25d6cec813_49383667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782620754641b25d6cdb8a9_87860575', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_628416574641b25d6cdc313_89089853', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_1782620754641b25d6cdb8a9_87860575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_1782620754641b25d6cdb8a9_87860575',
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
class Block_628416574641b25d6cdc313_89089853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_628416574641b25d6cdc313_89089853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="info">
        <h1 class="nomEntr"><?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomEntreprise'];?>
</h1>
        <p class="adresse">Adresse : <?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NumRue'];?>
, <?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['NomRue'];?>
, <?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['Ville'];?>
,
            <?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['CodePostale'];?>
, <?php echo $_smarty_tpl->tpl_vars['infoEntr']->value['Pays'];?>
</p>
        <p class="secteur">Secteur : 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['card']->value[0]['secteur'], 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['sect']->value['Secteur_Activite'];?>
 /
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </p>
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
                <textarea name="commentaire"></textarea>
                <button class="add" type="submit" name="action" value="add">Ajouter</button>
            <?php } else { ?>
                <select class="noteUser" name="note">
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['comUser']->value['note'] == $_smarty_tpl->tpl_vars['i']->value) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                        <?php }?>
                    <?php }
}
?>
                </select>
                <textarea name="commentaire" class="com"><?php echo $_smarty_tpl->tpl_vars['comUser']->value['commentaire'];?>
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
 / 5</p>
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
 / 5</p>
            <p class="comEtud"><?php echo $_smarty_tpl->tpl_vars['etud']->value['commentaire'];?>
</p>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



      
    </div>
<?php
}
}
/* {/block 'content'} */
}
