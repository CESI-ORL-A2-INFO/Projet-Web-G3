<?php
/* Smarty version 4.2.1, created on 2023-03-17 23:33:47
  from 'C:\www\Projet-Web-G3\src\templates\homePilote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6414eacbe51a41_70063119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '884172e64408560b4d968e4a22ab5cfecff2b247' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\homePilote.tpl',
      1 => 1679092426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6414eacbe51a41_70063119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20896107716414eacbe50513_60529167', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11551027136414eacbe511c4_86573518', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_20896107716414eacbe50513_60529167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_20896107716414eacbe50513_60529167',
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
class Block_11551027136414eacbe511c4_86573518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11551027136414eacbe511c4_86573518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="wrapper">
        <form class="card_container" method="get" action="./index.php">
            <button class="card one" name="offre" value="1">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card two" name="offre" value="2">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card three" name="offre" value="3">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card four" name="offre" value="4">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card five" name="offre" value="5">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card six" name="offre" value="6">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title">Offre 1</h1>
                <p class="nomEntreprise">Nom de l'entreprise<br>
                Secteur d'activité</p>
                <p class="duree">Durée : Length</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : ville</p>
                <p class="competence">Competences : </p>
            </div>
        </form>
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
