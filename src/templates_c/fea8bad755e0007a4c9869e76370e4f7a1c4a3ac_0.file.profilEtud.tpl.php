<?php
/* Smarty version 4.2.1, created on 2023-03-22 14:19:30
  from 'C:\prosit\Projet-Web-G3-1\Projet-Web-G3\src\templates\profilEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b006274e078_78763917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea8bad755e0007a4c9869e76370e4f7a1c4a3ac' => 
    array (
      0 => 'C:\\prosit\\Projet-Web-G3-1\\Projet-Web-G3\\src\\templates\\profilEtud.tpl',
      1 => 1679491099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641b006274e078_78763917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788711442641b0062744d60_56538799', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1263701818641b00627459c4_83348193', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_788711442641b0062744d60_56538799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_788711442641b0062744d60_56538799',
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
class Block_1263701818641b00627459c4_83348193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1263701818641b00627459c4_83348193',
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
        <button type="submit" name="deconnexion" value="true" class="btn-deconnexion">Déconnexion</button>
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
