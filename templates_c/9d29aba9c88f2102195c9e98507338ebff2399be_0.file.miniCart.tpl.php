<?php
/* Smarty version 3.1.31, created on 2017-10-26 15:12:20
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/miniCart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1fb54490838_58711096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d29aba9c88f2102195c9e98507338ebff2399be' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/miniCart.tpl',
      1 => 1509030737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f1fb54490838_58711096 (Smarty_Internal_Template $_smarty_tpl) {
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
          <div class="card-content noPadding maxHeight">
            <div class="row autoMargin">
              <div class="col s12">
                <h4 class="">Unicorn T-shirt</h4>
              </div>
            </div>
            <div class="row autoMargin">
              <div class="col s9">
                <p>Size : M | Quantity : 2.</p>
              </div>
              <div class="col s3">
                <p class="right pinkMaterializeColor">45,00€</p>
              </div>
            </div>
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
          <div class="card-content noPadding maxHeight">
            <div class="row autoMargin">
              <div class="col s12">
                <h4 class="">Unicorn pastry</h4>
              </div>
            </div>
            <div class="row autoMargin">
              <div class="col s9">
                <p>Quantity : 1.</p>
              </div>
              <div class="col s3">
                <p class="right pinkMaterializeColor">5,99€</p>
              </div>
            </div>
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
</div><?php }
}
