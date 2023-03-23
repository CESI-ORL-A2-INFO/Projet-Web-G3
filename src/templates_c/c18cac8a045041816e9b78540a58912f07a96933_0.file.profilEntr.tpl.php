<?php
/* Smarty version 4.2.1, created on 2023-03-23 10:37:29
  from 'C:\www\Projet-Web-G3\src\templates\profilEntr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641c1dd9546017_31891641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18cac8a045041816e9b78540a58912f07a96933' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEntr.tpl',
      1 => 1679560959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641c1dd9546017_31891641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_301910755641c1dd932f979_30346342', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_516698074641c1dd9330645_98520670', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_301910755641c1dd932f979_30346342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_301910755641c1dd932f979_30346342',
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
class Block_516698074641c1dd9330645_98520670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_516698074641c1dd9330645_98520670',
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
                <textarea class="com" type="text" name="commentaire"></textarea>
                <button class="add" type="submit" name="action" value="add">Ajouter</button>
            <?php } else { ?>
                <select class="noteUser" name="note">
                    <?php if ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 0) {?>
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 1) {?>
                        <option value="0">0</option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 2) {?>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 3) {?>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3" selected>3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 4) {?>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected>4</option>
                        <option value="5">5</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['comUser']->value['note'] == 5) {?>
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
<?php
}
}
/* {/block 'content'} */
}
