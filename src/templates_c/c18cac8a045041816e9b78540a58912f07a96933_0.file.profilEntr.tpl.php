<?php
/* Smarty version 4.2.1, created on 2023-03-21 15:44:59
  from 'C:\www\Projet-Web-G3\src\templates\profilEntr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6419c2eb2b25a2_61479421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18cac8a045041816e9b78540a58912f07a96933' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEntr.tpl',
      1 => 1679409898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419c2eb2b25a2_61479421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14543788256419c2eb296d52_20484054', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17927188246419c2eb297b45_59765746', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_14543788256419c2eb296d52_20484054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_14543788256419c2eb296d52_20484054',
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
class Block_17927188246419c2eb297b45_59765746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17927188246419c2eb297b45_59765746',
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
                <input class="com" type="text" name="commentaire" placeholder="">
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
                <input class="com" type="text" name="commentaire" value="<?php echo $_smarty_tpl->tpl_vars['comUser']->value['commentaire'];?>
">
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
