<?php
/* Smarty version 4.2.1, created on 2023-03-19 11:00:24
  from 'C:\www\Projet-Web-G3\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6416dd384c1a14_18388649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e12a4afb95e681660c345a77d119053be5a4e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\home.tpl',
      1 => 1679218981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6416dd384c1a14_18388649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16099354106416dd384b24c3_55964381', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9321264916416dd384b3009_05856218', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbar.tpl');
}
/* {block "include"} */
class Block_16099354106416dd384b24c3_55964381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_16099354106416dd384b24c3_55964381',
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
class Block_9321264916416dd384b3009_05856218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9321264916416dd384b3009_05856218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <form class="card_container" method="get" action="./index.php">
            <button class="card one" name="offreLast" value="1">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[0];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card two" name="offreLast" value="2">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[1];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card three" name="offreLast" value="3">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[2];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card four" name="offreLLast" value="4">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[3];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card five" name="offreLast" value="5">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[4];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
                <p class="competence">Competences : </p>
            </button>
            <button class="card six" name="offreLast" value="6">
                <img src="./logoEnt.png" alt="logoEnt" class="logoEnt">
                <h1 class="title"><?php echo $_smarty_tpl->tpl_vars['nomOffre']->value[5];?>
</h1>
                <p class="nomEntreprise"><?php echo $_smarty_tpl->tpl_vars['nomEntr']->value;?>
<br>
                <?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
</p>
                <p class="duree">Durée : <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>
</p>
                <p class="promo">Promo : A2/A3 </p>
                <p class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
</p>
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
