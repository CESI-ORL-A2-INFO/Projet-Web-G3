<?php
/* Smarty version 4.2.1, created on 2023-03-29 09:01:44
  from 'C:\www\Projet-Web-G3\src\templates\profilPilPerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6423e2585a94d0_38530589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3aa827fae5a8451c0726b2facb41e665ec43c6' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\profilPilPerm.tpl',
      1 => 1680073218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6423e2585a94d0_38530589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3697684706423e258595348_76662131', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15447810286423e258595d87_83740731', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14384798206423e2585a8521_73646198', "script");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_3697684706423e258595348_76662131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_3697684706423e258595348_76662131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/profilPilPerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_15447810286423e258595d87_83740731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15447810286423e258595d87_83740731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div id="left">
            <h1>    Profil Tuteur</h1>

        </div>
        <div id="icon">
            <i class="fa-solid fa-user fa-10x non-hover"></i>
        </div>
        <form name="formulaire" action="index.php" method="get" class="form" onsubmit="return validateForm()">
            <input class="champ" placeholder="Nom" id="name" type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
            <span class="error" id="errorNom"></span>
            <input class="champ" placeholder="Prénom" id="Prenom" type="text" name="prenom" value="<?php echo $_smarty_tpl->tpl_vars['prenom']->value;?>
">
            <span class="error" id="errorPrenom"></span>
            <select class="champ abxd" name="centre">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCentre']->value, 'cent');
$_smarty_tpl->tpl_vars['cent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cent']->value) {
$_smarty_tpl->tpl_vars['cent']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['centre']->value == $_smarty_tpl->tpl_vars['cent']->value['Centre']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['cent']->value['IdCentre'];?>
"><?php echo $_smarty_tpl->tpl_vars['cent']->value['Centre'];?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div class="buttons-container">
                <button type="submit" name="actionPil" value="modif">Modifier</button>
                <button type="submit" name="actionPil" value="suppr">Supprimer</button>
        </form>
    </div>



    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['idPil']->value) {?>
        <div class="button-container">
            <form method="get" action="index.php">
                <button type="submit" name="deconnexion" value="true" class="btn-deconnexion">Déconnexion</button>
        </div>
        </form>
        <div class="select-container">
            <form method="get" action="index.php" id="formPromo">
                <select name="promoAdd" id="promo">
                    <option value="none">Promotion</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pasPromo']->value, 'pPromo');
$_smarty_tpl->tpl_vars['pPromo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pPromo']->value) {
$_smarty_tpl->tpl_vars['pPromo']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['pPromo']->value['IdPromo'];?>
"><?php echo $_smarty_tpl->tpl_vars['pPromo']->value['Promotion'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <button name="addPromo" value="true">Ajouter promotion</button>
            </form>
        </div>


        <form class="wrapperPromo" method="get" action="index.php">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['promotion']->value, 'promo');
$_smarty_tpl->tpl_vars['promo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['promo']->value) {
$_smarty_tpl->tpl_vars['promo']->do_else = false;
?>
                <button type="submit" name="promo" value="<?php echo $_smarty_tpl->tpl_vars['promo']->value['IdPromo'];?>
">
                    <h2 class="promotion">
                        <?php echo $_smarty_tpl->tpl_vars['promo']->value['Promotion'];?>

                    </h2>
                </button>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </form>
    <?php } else { ?>

    <?php }
}
}
/* {/block 'content'} */
/* {block "script"} */
class Block_14384798206423e2585a8521_73646198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_14384798206423e2585a8521_73646198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['idPil']->value) {?>
        <?php echo '<script'; ?>
>
            const form = document.querySelector("#formPromo");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                var val = document.getElementById("promo").value;
                if (val == "none") {
                    alert("Choisissez une promotion à ajouter");
                    return;
                }
                form.submit();
            })
            function validateForm(){
                var nom = document.forms['formulaire']['nom'];
                var prenom = document.forms['formulaire']['prenom'];
                var bool = true;
                if (nom.value == ""){
                    document.getElementById('errorNom').innerHTML = "*Veuillez entrer un nom valide!"
                    nom.focus()
                    bool = false
                }else{
                    document.getElementById('errorNom').innerHTML = ""
                }
                if (prenom.value == ""){
                    document.getElementById('errorPrenom').innerHTML = "*Veuillez entrer un prenom valide!"
                    prenom.focus()
                    bool = false
                }else{
                    document.getElementById('errorPrenom').innerHTML = ""
                }
            return bool;
            }
        <?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "script"} */
}
