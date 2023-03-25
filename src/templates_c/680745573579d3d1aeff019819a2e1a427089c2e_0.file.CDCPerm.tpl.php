<?php
/* Smarty version 4.2.1, created on 2023-03-25 12:24:18
  from 'C:\www\Projet-Web-G3\src\templates\CDCPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641ed9e2bba503_00582798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680745573579d3d1aeff019819a2e1a427089c2e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\CDCPerm.tpl',
      1 => 1679743445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ed9e2bba503_00582798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122354773641ed9e2bb4f70_18181943', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768080148641ed9e2bb5dd9_99702358', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_122354773641ed9e2bb4f70_18181943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_122354773641ed9e2bb4f70_18181943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" type="text/css" href="./css/CDC.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1768080148641ed9e2bb5dd9_99702358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1768080148641ed9e2bb5dd9_99702358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="content">
    <h1>Centre de confidentialité</h1><br>
    <h3>Quel type d'informations recueillons-nous ?</h3><br>
<p>Nous recevons, collectons et stockons toute information que vous saisissez sur notre site web ou que vous nous
    fournissez de toute autre manière. En outre, nous recueillons l'adresse de protocole Internet (IP) utilisée pour
        connecter votre ordinateur à l'Internet ; le login ; l'adresse e-mail ; le mot de passe ; les informations sur
        l'ordinateur et la connexion . Nous pouvons utiliser des outils logiciels pour mesurer et collecter des informations
    de session, y compris les temps de réponse des pages, la durée des visites sur certaines pages, les informations sur
    l'interaction entre les pages et les méthodes utilisées pour naviguer hors de la page. Nous recueillons également
        des informations d'identification personnelle (y compris le nom, l'adresse électronique, le mot de passe, les
        communications) ; les commentaires, les réactions, les évaluations des stages, les recommandations et le profil
        personnel.</p><br>
    <h3>Comment recueillons-nous des informations ?</h3><br>
    <p>Lorsque vous effectuez une transaction sur notre site web, dans le cadre du processus, nous recueillons les
        informations personnelles que vous nous donnez, telles que votre nom, votre prénom et votre adresse e-mail. Vos
        informations personnelles ne seront utilisées que pour les raisons spécifiques mentionnées ci-dessus.</p><br>
    <h3>Pourquoi recueillons-nous de telles informations personnelles ?</h3><br>
    <p>Nous recueillons ces informations non personnelles et personnelles aux fins suivantes :</p><br>
    <ul>
        <li>Fournir et exploiter les services</li>
        <li>Fournir à nos utilisateurs une Assistance et un support technique permanents</li>
        <li>Pouvoir contacter nos visiteurs et utilisateurs avec des avis généraux ou personnalisés relatifs au service et
            des messages promotionnels</li>
        <li>Pour créer des données statistiques agrégées et d'autres informations non personnelles agrégées et/ou déduites,
            que nous ou nos partenaires commerciaux pouvons utiliser pour fournir et améliorer nos services respectifs</li>
        <li>Se conformer aux lois et règlements applicables.</li>
    </ul><br>
    <h3>Comment les visiteurs de notre site peuvent-ils retirer leur consentement ?</h3><br>
    <p>Si vous ne souhaitez plus que nous traitions vos données, veuillez nous contacter à <a
            href="https://support.viacesi.info/">Support CESI (viacesi.info)</a>.</p><br>
    <h3>Mises à jour de la politique de confidentialité</h3><br>
    <p>Nous nous réservons le droit de modifier cette politique de confidentialité à tout moment, aussi nous vous invitons à
        la consulter fréquemment. Les modifications et les clarifications prendront effet dès leur publication sur le site
        web. Si nous apportons des modifications importantes à la présente politique, nous vous informerons ici de sa mise à
        jour, afin que vous sachiez quelles informations nous recueillons, comment nous les utilisons et dans quelles
        circonstances, le cas échéant, nous les utilisons et/ou les divulguons.</p><br>
    <h3>Questions et Nos coordonnées</h3><br>
    <p>Si vous ne souhaitez plus que nous traitions vos données, veuillez nous contacter à <a
            href="https://support.viacesi.info/">Support CESI (viacesi.info)</a>.</p><br>
    </div>
<?php
}
}
/* {/block 'content'} */
}
