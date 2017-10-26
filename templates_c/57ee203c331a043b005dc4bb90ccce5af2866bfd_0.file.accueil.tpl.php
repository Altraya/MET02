<?php
/* Smarty version 3.1.31, created on 2017-10-11 08:46:19
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ddda5bd2e0d6_12258637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57ee203c331a043b005dc4bb90ccce5af2866bfd' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/accueil.tpl',
      1 => 1507711573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:slider.tpl' => 1,
  ),
),false)) {
function content_59ddda5bd2e0d6_12258637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153557285459ddda5bd24e39_00065706', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_153557285459ddda5bd24e39_00065706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_153557285459ddda5bd24e39_00065706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row smallMarginTop" id="sliderHome">
        <?php $_smarty_tpl->_subTemplateRender('file:slider.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    
    <div id="featuredItems">
        <div class="row">
            <div class="col s3">
                <img class="z-depth-4" src="img/narwhal-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/narwhal-manga-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s6">
                <img class="z-depth-4" src="img/unicorn-545-164.png" alt="home featured items"> <!-- random image -->
            </div>
        </div>
        
        <div class="row">
            <div class="col s6">
                <img class="z-depth-4" src="img/unicorn-narwhal-545-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/fat-unicorn-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
            <div class="col s3">
                <img class="z-depth-4" src="img/unicorn-pin-275-164.png" alt="home featured items"> <!-- random image -->
            </div>
        </div>
    
    </div>
    
    <div class="row" id="perks">
        <div class="col s4 center">
        	<img
		    src="img/nekoIconKawai.png" 
		    alt="Kawai neko picture" />
		    <h3>Free shipping</h3>
		    <p>Shipping is absolutely free for all products and all orders to anywhere in our Kawai Relay !.</p>
        </div>
        <div class="col s4 center">
            <img
		    src="img/nekoIconKawaiHeart.png" 
		    alt="Kawai neko picture" />
		    <h3>100% Satisfaction Guarantee</h3>
		    <p>If you are not satisfied with your purchases, you can return and exchange them for free. No questions asked!</p>
        </div>
        <div class="col s4 center">
            <img
		    src="img/nekoIconKawaiShiny.png" 
		    alt="Kawai neko picture" />
		    <h3>Join our community !</h3>
		    <p>We love our community, so we improve our shop each day to give opportunity to our follower to sell their creations with us ! Join now our community</p>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
