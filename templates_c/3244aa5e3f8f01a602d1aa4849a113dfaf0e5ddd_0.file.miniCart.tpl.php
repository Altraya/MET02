<?php
/* Smarty version 3.1.31, created on 2017-10-26 13:10:27
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/miniCart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1dec3900534_84426467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3244aa5e3f8f01a602d1aa4849a113dfaf0e5ddd' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/miniCart.tpl',
      1 => 1509023403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1dec3900534_84426467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200795516359f1dec38fa077_72772546', 'miniCart');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'miniCart'} */
class Block_200795516359f1dec38fa077_72772546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniCart' => 
  array (
    0 => 'Block_200795516359f1dec38fa077_72772546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="card-panel pinkMaterializeBackground" id="miniCart">
  <h3 class="white-text center noMarginTop">My cart</h3>
  
  <div class="row noMarginBottom">
    <div class="col s12">
      <div class="card horizontal maxHeightCardItems">
        <div class="card-image imgCartItem flexIt">
          <img src="img/t-shirt.png" alt="unicorn t-shirt">
        </div>
        <div class="card-stacked flexIt">
          <div class="card-content tenPadding">
            <h4 class="">Unicorn T-shirt</h4>
            <p>Size : M | Quantity : 2.</p>
            <p class="right pinkMaterializeColor">45,00€</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row noMarginBottom">
    <div class="col s12">
      <div class="card horizontal maxHeightCardItems">
        <div class="card-image imgCartItem flexIt">
          <img src="img/pastry.png" alt="unicorn pastry">
        </div>
        <div class="card-stacked flexIt">
          <div class="card-content tenPadding">
            <h4 class="">Unicorn pastry</h4>
            <p>Quantity : 1.</p>
            <p class="right pinkMaterializeColor">5,99€</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="divider"></div>
  
  <div class="row noMarginTop noMarginBottom">
    <div class="col s6">
      <p class="white-text center">Livraison : Free</p>
    </div>
    <div class="col s6">
      <p class="white-text center">Total TTC: 50.99€</p>
    </div>
  </div>
  <div class="divider smallMarginBottom"></div>

  <div class="row">
    <div class="col s12 flexIt">
      <button type="submit" class="widthMax btn pink lighten-4 borderPink">Checkout</button>
    </div>
  </div>
  <div class="row">
    <div class="col s12 flexIt">
      <button type="submit" class="btn pink lighten-4 borderPink widthMax">My cart</button>
    </div>
  </div>
</div>
    
<?php
}
}
/* {/block 'miniCart'} */
}
