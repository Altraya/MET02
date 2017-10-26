<?php
/* Smarty version 3.1.31, created on 2017-10-11 14:07:25
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59de259dd27e07_87160320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '863082a4df63716f364be4aa8d53731cd2f61dc2' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/cart.tpl',
      1 => 1507730808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de259dd27e07_87160320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141195995959de259dd1e489_36889574', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_141195995959de259dd1e489_36889574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_141195995959de259dd1e489_36889574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
          <div class="row noMarginBottom">
            <div class="col s12">
              <div class="card horizontal maxHeightCardItemsBig">
                <div class="card-image imgCartItem flexIt">
                  <img src="img/t-shirt.png" alt="unicorn t-shirt">
                </div>
                <div class="card-stacked flexIt">
                  <div class="card-content tenPadding">
                    <h4 class="">Unicorn T-shirt</h4>
                    <p class="miniMarginArround">I am a sweet unicorn t-shirt description. Lorem Elsass ipsum dolor knack risus, rhoncus eget semper bredele
                    munster gal Morbi hopla elementum Chulia Roberstau eleifend habitant Huguette sed rossbolla kuglopf amet nüdle 
                    suspendisse ornare barapli mollis et Spätzle non dignissim schpeck vielmols, libero.</p>
                    <p class="miniMarginArround">Size : M</p>
                    <p class="miniMarginArround">Color : Black</p>
                    <p class="miniMarginArround">Quantity : 2.</p>
                    <p class="right pinkMaterializeColor priceBigCard">45,00€</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row noMarginBottom">
            <div class="col s12">
              <div class="card horizontal maxHeightCardItemsBig">
                <div class="card-image imgCartItem flexIt">
                  <img src="img/pastry.png" alt="unicorn pastry">
                </div>
                <div class="card-stacked flexIt">
                  <div class="card-content tenPadding">
                    <h4 class="">Unicorn pastry</h4>
                    <p class="miniMarginArround">I am a sweet unicorn pastry description. Lorem Elsass ipsum dolor knack risus, rhoncus eget semper bredele
                    munster gal Morbi hopla elementum Chulia Roberstau eleifend habitant Huguette sed rossbolla kuglopf amet nüdle 
                    suspendisse ornare barapli mollis et Spätzle non dignissim schpeck vielmols, libero.</p>
                    <p class="miniMarginArround">Color : Pink</p>
                    <p class="miniMarginArround">Quantity : 1.</p>
                    <p class="right pinkMaterializeColor priceBigCard">5,99€</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="divider"></div>
          
          <div class="row noMarginTop noMarginBottom">
            <div class="col s6">
              <p class="pinkMaterializeColor center">Livraison : Free</p>
            </div>
            <div class="col s6">
              <p class="pinkMaterializeColor center">Total TTC: 50.99€</p>
            </div>
          </div>
          <div class="divider smallMarginBottom"></div>

          <div class="row">
            <div class="col s12 flexIt">
              <button type="submit" class="widthMax btn pink lighten-4 borderPink">Checkout</button>
            </div>
          </div>
        </div>
      
    
<?php
}
}
/* {/block 'body'} */
}
