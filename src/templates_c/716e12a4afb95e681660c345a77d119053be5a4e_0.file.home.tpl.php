<?php
/* Smarty version 4.2.1, created on 2023-03-15 13:46:11
  from 'C:\www\Projet-Web-G3\src\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6411be13377d33_42716138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716e12a4afb95e681660c345a77d119053be5a4e' => 
    array (
      0 => 'C:\\www\\Projet-Web-G3\\src\\templates\\home.tpl',
      1 => 1678884314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6411be13377d33_42716138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20015540586411be13375609_89322138', "include");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1815820766411be13377509_94206288', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "navbar.tpl");
}
/* {block "include"} */
class Block_20015540586411be13375609_89322138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'include' => 
  array (
    0 => 'Block_20015540586411be13375609_89322138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="./home/home.css">
<?php
}
}
/* {/block "include"} */
/* {block 'content'} */
class Block_1815820766411be13377509_94206288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1815820766411be13377509_94206288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper">
                        <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                    </li>
                </ol>
            </aside>
        </section>
    </div>
<?php
}
}
/* {/block 'content'} */
}
