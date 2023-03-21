<?php
/* Smarty version 4.2.1, created on 2023-03-21 23:59:17
  from 'C:\www\Projet-Web-G3\src\templates\profilEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641a36c57e85a4_98618479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9820c75c0b10364e10b1b3c3eb66c788a9066b6' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEtud.tpl',
      1 => 1679439556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641a36c57e85a4_98618479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_779562228641a36c57d4d88_54267254', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1142948696641a36c57d5bc5_99798570', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_779562228641a36c57d4d88_54267254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_779562228641a36c57d4d88_54267254',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEtud.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1142948696641a36c57d5bc5_99798570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1142948696641a36c57d5bc5_99798570',
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
        <div class="form">
            <div>
                <input class="champ" id="name" type="text" value="" placeholder="Nom : <?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prénom : <?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
" readonly>
                <input class="champ" id="centre" type="text" value="" placeholder="Centre : <?php echo $_smarty_tpl->tpl_vars['centre']->value;?>
" readonly>
                <input class="champ" id="pilote" type="text" value="" placeholder="Pilote : <?php echo $_smarty_tpl->tpl_vars['nomPilote']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['prenomPilote']->value;?>
"
                    readonly>
                <input class="champ" id="last" type="text" value="" placeholder="Promotion : <?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
" readonly>
            </div>
        </div>
    </div>
    <form method="get" action="index.php">
        <button type="submit" name="deconnexion" value="true">Déconnexion</button>
    </form>
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
