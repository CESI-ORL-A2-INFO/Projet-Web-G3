<?php
/* Smarty version 4.2.1, created on 2023-03-17 09:53:37
  from 'C:\www\Projet-Web-G3\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64142a9191dc87_43450404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e12a4afb95e681660c345a77d119053be5a4e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\home.tpl',
      1 => 1679043214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64142a9191dc87_43450404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157500833764142a91918778_39529684', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175771525464142a9191c361_65082538', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_157500833764142a91918778_39529684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_157500833764142a91918778_39529684',
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
class Block_175771525464142a9191c361_65082538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_175771525464142a9191c361_65082538',
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
