<?php
/* Smarty version 4.2.1, created on 2023-03-16 16:49:23
  from 'C:\www\Projet-Web-G3\src\templates\homePilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64133a832b0122_88703070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884172e64408560b4d968e4a22ab5cfecff2b247' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\homePilote.tpl',
      1 => 1678981693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64133a832b0122_88703070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53449887664133a832ae608_04991551', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183587579364133a832af2d4_15126882', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_53449887664133a832ae608_04991551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_53449887664133a832ae608_04991551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
    
    <link rel="stylesheet" href="./css/home.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_183587579364133a832af2d4_15126882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_183587579364133a832af2d4_15126882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card_container">
        <div class="card one">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
        <div class="card two">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
        <div class="card three">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
        <div class="card four">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
        <div class="card five">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
        <div class="card six">
            <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
            <h1 class="title">Offre 1</h1>
            <p class="nomEntreprise">Nom de l'entreprise<br>
            Secteur d'activité</p>
            <p class="duree">Durée : Length</p>
            <p class="promo">Promo : A2/A3 </p>
            <p class="ville">Ville : ville</p>
            <p class="competence">Competences : </p>
        </div>
    </div>
    <div class="about">
        <h1>Qui sommes nous ?</h1>
        <p>lorem ipsum</p>
    </div>
<?php
}
}
/* {/block 'content'} */
}
