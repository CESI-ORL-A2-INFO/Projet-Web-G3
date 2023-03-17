<?php
/* Smarty version 4.2.1, created on 2023-03-16 16:45:41
  from 'C:\www\Projet-Web-G3\src\templates\profilEtudPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641339a57db6e9_28904372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54a2b3a03c7e073c44d65c9ed6c4034e8015f3f4' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilEtudPerm.tpl',
      1 => 1678981540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641339a57db6e9_28904372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_745609488641339a57d4070_84056450', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_490026419641339a57d79a9_33389971', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_745609488641339a57d4070_84056450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_745609488641339a57d4070_84056450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilEtudPerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_490026419641339a57d79a9_33389971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_490026419641339a57d79a9_33389971',
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
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom">
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom">
                <select name="centre" id="promotion">
                    <option value="Orléans" selected>Orléans</option>
                </select>
                <select name="pilote" id="promotion">
                    <option value="Laporte--Chabasse" selected>Laporte--Chabasse</option>
                </select>
                <label>
                    <select id="promotion">
                        <option value="CPIA2">CPI A2</option>
                        <option value="FISEA3">FISE A3</option>
                        <option value="FISEA4">FISE A4</option>
                        <option value="FISEA5">FISE A5</option>
                        <option value="FISAA3">FISA A3</option>
                        <option value="FISEA4">FISA A4</option>
                        <option value="FISAA5">FISA A5</option>
                    </select>
                </label>
                <div class="radio">
                    <input type="radio" name="statut" value="libre" style="margin-bottom: 2%;text-align: center" />
                    <label for="statut">Libre</label>
                    <br>
                    <input type="radio" name="statut2" value="recherche" style="margin-bottom: 2%" />
                    <label for="statut2">En recherche</label>
                    <br>
                    <input type="radio" name="statut3" value="trouve" style="margin-bottom: 2%" />
                    <label for="statut3">Stage trouvé</label>
                </div>
                <div>
                    <button id="boutonModif" type="submit" name="action" value="mod">Modifier</button>
                    <button id="boutonSuppr" type="submit" name="action" value="sup">Supprimer</button>
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
