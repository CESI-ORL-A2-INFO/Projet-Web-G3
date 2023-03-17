<?php
/* Smarty version 4.2.1, created on 2023-03-17 10:58:46
  from 'C:\www\ProjetMobile\Projet-Web-G3\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641439d61ca1c9_62798037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd153dc1913ce32a8b65a1659b88c2e2c1ddb7229' => 
    array (
      0 => 'C:\\www\\ProjetMobile\\Projet-Web-G3\\src\\templates\\home.tpl',
      1 => 1679047035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641439d61ca1c9_62798037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_408550212641439d61c92a1_78883943', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_539034026641439d61c9bb1_50307639', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_408550212641439d61c92a1_78883943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_408550212641439d61c92a1_78883943',
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
class Block_539034026641439d61c9bb1_50307639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_539034026641439d61c9bb1_50307639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
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
    </div>
<?php
}
}
/* {/block 'content'} */
}
