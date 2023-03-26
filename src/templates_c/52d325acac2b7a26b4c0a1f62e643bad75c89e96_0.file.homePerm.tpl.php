<?php
/* Smarty version 4.2.1, created on 2023-03-26 10:40:34
  from 'C:\www\Projet-Web-G3\src\templates\homePerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642005024cabb7_02133417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d325acac2b7a26b4c0a1f62e643bad75c89e96' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\homePerm.tpl',
      1 => 1679820033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642005024cabb7_02133417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1054967964642005024b4e86_07298418', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1840560031642005024b5c06_77059060', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_1054967964642005024b4e86_07298418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_1054967964642005024b4e86_07298418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/homePerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1840560031642005024b5c06_77059060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1840560031642005024b5c06_77059060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="offreTable">
        <h2>Offre</h2>
        <table>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Entreprise</th>
                <th scope="col">Description</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offre']->value, 'dataOffre');
$_smarty_tpl->tpl_vars['dataOffre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataOffre']->value) {
$_smarty_tpl->tpl_vars['dataOffre']->do_else = false;
?>
                <tr>
                    <td><a href="./index.php?p=offre&offre=<?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['IdOffre'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['nomOffre'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['NomEntreprise'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['Description'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <div class="entrTable">
        <h2>Entreprise</h2>
        <table>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Nombre de stagiaire</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entr']->value, 'dataEntr');
$_smarty_tpl->tpl_vars['dataEntr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataEntr']->value) {
$_smarty_tpl->tpl_vars['dataEntr']->do_else = false;
?>
                <tr>
                    <td><a href="./index.php?p=profilEntr&entr=<?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NomEntreprise'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NomEntreprise'];?>
</a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NbreStagiaire'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <div class="piloteTable">
        <h2>Pilote</h2>
        <table>
            <tr>
                <th scope="col">Nom Prénom</th>
                <th scope="col">Centre</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pilote']->value, 'dataPil');
$_smarty_tpl->tpl_vars['dataPil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataPil']->value) {
$_smarty_tpl->tpl_vars['dataPil']->do_else = false;
?>
                <tr>
                    <td><a href="./index.php?p=profilPil&pil=<?php echo $_smarty_tpl->tpl_vars['dataPil']->value['IdPilote'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataPil']->value['NomPilote'];?>

                            <?php echo $_smarty_tpl->tpl_vars['dataPil']->value['PrenomPilote'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataPil']->value['Centre'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <div class="etudTable">
        <h2>Etudiant</h2>
        <table>
            <tr>
                <th scope="col">Nom Prénom</th>
                <th scope="col">Promotion</th>
                <th scope="col">Centre</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etud']->value, 'dataEtud');
$_smarty_tpl->tpl_vars['dataEtud']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataEtud']->value) {
$_smarty_tpl->tpl_vars['dataEtud']->do_else = false;
?>
                <tr>
                    <td><a href="./index.php?p=profilEtud&etud=<?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['IdEtudiant'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['NomEtudiant'];?>

                            <?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['PrenomEtudiant'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['Promotion'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['Centre'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
<?php
}
}
/* {/block 'content'} */
}
