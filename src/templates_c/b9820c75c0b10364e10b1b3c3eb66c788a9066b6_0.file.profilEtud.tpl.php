<?php
/* Smarty version 4.2.1, created on 2023-03-16 16:46:24
  from 'C:\www\Projet-Web-G3\src\templates\profilEtud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641339d0148d86_89689732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9820c75c0b10364e10b1b3c3eb66c788a9066b6' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEtud.tpl',
      1 => 1678981582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641339d0148d86_89689732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975628524641339d0146029_74851822', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1707112040641339d0146a78_62046947', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_1975628524641339d0146029_74851822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_1975628524641339d0146029_74851822',
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
class Block_1707112040641339d0146a78_62046947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1707112040641339d0146a78_62046947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>Profile</h1>
            <h3>Le site qui te fera avancer</h3>
        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom" readonly>
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom" readonly>
                <select name="centre" id="promotion" disabled>
                    <option value="Orléans" selected>Orléans</option>
                </select>
                <select name="pilote" id="promotion" disabled>
                    <option value="Laporte--Chabasse" selected>Nom du pilote</option>
                </select>
                <label>
                     <select name="promo" id="promotion" disabled> <!-- Utiliser une array sur toutes les options avec null ou 
                     selected pour choisir l'option de l'étudiant -->
                        <option value="CPIA2">CPI A2</option>
                        <option value="FISEA3">FISE A3</option>
                        <option value="FISEA4" selected>FISE A4</option>
                        <option value="FISEA5">FISE A5</option>
                        <option value="FISAA3">FISA A3</option>
                        <option value="FISEA4">FISA A4</option>
                        <option value="FISAA5">FISA A5</option>
                    </select>
                </label>
                <div class="radio"> <!-- Pareil que pour le select mais avec null ou checked -->
                    <input type="radio" name="statut" id="statut" value="libre" style="margin-bottom: 2%;text-align: center" disabled checked/>
                    <label for="statut">Libre</label>
                    <br>
                    <input type="radio" name="statut" id="statut2" value="recherche" style="margin-bottom: 2%" disabled/>
                    <label for="statut2">En recherche</label>
                    <br>
                    <input type="radio" name="statut" id="statut3" value="trouve" style="margin-bottom: 2%" disabled/>
                    <label for="statut3">Stage trouvé</label>
                </div>
            </form>
        </div>
    </div>
    <div class="wrapperStage">

    </div>
<?php
}
}
/* {/block 'content'} */
}
