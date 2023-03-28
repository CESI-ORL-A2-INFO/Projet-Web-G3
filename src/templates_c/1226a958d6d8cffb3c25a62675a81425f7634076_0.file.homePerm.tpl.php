<?php
/* Smarty version 4.2.1, created on 2023-03-27 16:07:08
  from 'C:\www\1111\Projet-Web-G3\src\templates\homePerm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6421a30cc2e504_14145127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1226a958d6d8cffb3c25a62675a81425f7634076' => 
    array (
      0 => 'C:\\www\\1111\\Projet-Web-G3\\src\\templates\\homePerm.tpl',
      1 => 1679924590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421a30cc2e504_14145127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11521200296421a30cc19db7_46868500', "include");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16350055736421a30cc1ad17_71768735', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'navbarPerm.tpl');
}
/* {block "include"} */
class Block_11521200296421a30cc19db7_46868500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_11521200296421a30cc19db7_46868500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./css/homePerm.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_16350055736421a30cc1ad17_71768735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16350055736421a30cc1ad17_71768735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="offreTable">
            <h2>Offre</h2>
            <table>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Entreprise</th>
                    <th scope="col">Adresse</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offre']->value, 'dataOffre');
$_smarty_tpl->tpl_vars['dataOffre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataOffre']->value) {
$_smarty_tpl->tpl_vars['dataOffre']->do_else = false;
?>
                    <tr>
                        <td><button class="but"><a href="./index.php?p=offre&offre=<?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['IdOffre'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['nomOffre'];?>
</a></button></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['NomEntreprise'];?>
</td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['NumRue'];?>
,
                            <?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['NomRue'];?>
,
                            <?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['Ville'];?>
,
                            <?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['CodePostale'];?>
,
                            <?php echo $_smarty_tpl->tpl_vars['dataOffre']->value['Pays'];?>

                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <div class="entrTable">
            <h2>Entreprise</h2>
            <table>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Nombre de stagiaire</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entr']->value, 'dataEntr');
$_smarty_tpl->tpl_vars['dataEntr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataEntr']->value) {
$_smarty_tpl->tpl_vars['dataEntr']->do_else = false;
?>
                    <tr>
                        <td><button class="but"><a
                                href="./index.php?p=profilEntr&entr=<?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NomEntreprise'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NomEntreprise'];?>
</a>
                        </button></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataEntr']->value['NbreStagiaire'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <div class="piloteTable">
            <h2>Pilote</h2>
            <table>
                <tr>
                    <th scope="col">Nom Prénom</th>
                    <th scope="col">Centre</th>
                    <th scope="col">Est Admin</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pilote']->value, 'dataPil');
$_smarty_tpl->tpl_vars['dataPil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataPil']->value) {
$_smarty_tpl->tpl_vars['dataPil']->do_else = false;
?>
                    <tr>
                        <td><button class="but"><a href="./index.php?p=profilPil&pil=<?php echo $_smarty_tpl->tpl_vars['dataPil']->value['IdPilote'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataPil']->value['NomPilote'];?>

                                <?php echo $_smarty_tpl->tpl_vars['dataPil']->value['PrenomPilote'];?>
</a></button></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataPil']->value['Centre'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataPil']->value['admin'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <div class="etudTable">
            <h2>Etudiant</h2>
            <table>
                <tr>
                    <th scope="col">Nom Prénom</th>
                    <th scope="col">Promotion</th>
                    <th scope="col">Centre</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etud']->value, 'dataEtud');
$_smarty_tpl->tpl_vars['dataEtud']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dataEtud']->value) {
$_smarty_tpl->tpl_vars['dataEtud']->do_else = false;
?>
                    <tr>
                        <td><button class="but"><a href="./index.php?p=profilEtud&etud=<?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['IdEtudiant'];?>
"><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['NomEtudiant'];?>

                                <?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['PrenomEtudiant'];?>
</a></button></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['Promotion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['dataEtud']->value['Centre'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
        <form class="buttonWrapper" method="get" accept="index.php">
            <button class="button" type="submit" name="p" value="addEntr">Ajouter une entreprise</button>
            <button class="button" type="submit" name="p" value="addOffre">Ajouter une offre</button>
            <button class="button" type="submit" name="p" value="addPil">Ajouter un pilote</button>
            <button class="button" type="submit" name="p" value="addEtud">Ajouter un étudiant</button>
        </form>
        <div class="about">
            <h1>Qui sommes nous ?</h1><br>
            <p>C'Stage est un site web dédié à la recherche et la publication d'offres de stage.
                Ce portail offre une plateforme intuitive et facile d'utilisation pour les
            étudiants et les entreprises souhaitant trouver ou proposer un stage de qualité. Grâce à C'Stage,
                les entreprises peuvent publier des offres de stage pertinentes et ainsi attirer des candidats motivés et
                qualifiés. Les étudiants peuvent quant à eux naviguer à travers les offres et postuler pour les stages
                correspondant
                à leur profil. Avec des fonctionnalités pratiques telles que la recherche de stage par mots-clés, par
                secteur ou
                par localisation, C'Stage offre une expérience de recherche de stage
            efficace et optimisée. De plus, le site propose également des conseils pratiques pour
            aider les étudiants dans leur recherche de stage et pour les accompagner tout au long
            de leur expérience de stage. C'Stage est donc un outil incontournable pour tous les
                étudiants et les entreprises qui souhaitent trouver les meilleurs stages ou les meilleurs candidats pour
                leurs projets.</p>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
