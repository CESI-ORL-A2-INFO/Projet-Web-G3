<?php
/* Smarty version 4.2.1, created on 2023-03-16 14:00:32
  from 'C:\www\Projet-Web-G3\src\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641312f08b5732_32316110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca29b77527b9dc4daddc17dbfbe8c3aa49d44525' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profil.tpl',
      1 => 1678971612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641312f08b5732_32316110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_603214498641312f08b3200_08914375', "include");
?>


<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1040612031641312f08b3bb2_93011118', 'content');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_603214498641312f08b3200_08914375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_603214498641312f08b3200_08914375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profil.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1040612031641312f08b3bb2_93011118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1040612031641312f08b3bb2_93011118',
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
            <i class="fa-solid fa-user fa-10x "></i>
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <input class="champ" id="Nom" type="text" value="" placeholder="Nom">
                <input class="champ" id="Prenom" type="text" value="" placeholder="Prenom">
                <input class="champ" id="CampusCESI" type="text" placeholder="Campus CESI">
                <input class="champ" id="Tuteur" type="text" placeholder="Nom Tuteur">
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
<?php
}
}
/* {/block 'content'} */
}
