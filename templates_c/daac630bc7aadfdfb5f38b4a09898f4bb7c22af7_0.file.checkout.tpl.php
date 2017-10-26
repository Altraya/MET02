<?php
/* Smarty version 3.1.31, created on 2017-10-11 18:48:13
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/checkout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59de676d55e2a9_51229650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daac630bc7aadfdfb5f38b4a09898f4bb7c22af7' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/checkout.tpl',
      1 => 1507747691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59de676d55e2a9_51229650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163172624659de676d556806_04447486', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_163172624659de676d556806_04447486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_163172624659de676d556806_04447486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   <h1>BILLING INFORMATION</h1>
    <form id="formInscription" class="smallMarginBottom">
    <h2>Payement method</h2>
    <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">credit_card</i>
            <input id="address" type="text" class="validate" value="XXXX XXXX XXXX 3333">
            <label for="address">Card number</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s3">
            <i class="material-icons prefix">lock_open</i>
            <input id="address" type="text" class="validate" value="000">
            <label for="address">Secret Number</label>
        </div>
        <div class="input-field col s3">

            <i class="material-icons prefix">date_range</i>
            <input id="month" type="text" class="validate" value="12/18">
            <label for="month">Expiration date</label>

        </div>

    </div>
    <h2>Billing address</h2>
    <hr/>   
    <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">local_post_office</i>
            <input id="address" type="text" class="validate" value="15 rue Belle Vue">
            <label for="address">Address</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <i class="material-icons prefix">location_on</i>
            <input id="postalcode" type="text" class="validate" value="67120">
            <label for="postalcode">Postal Code</label>
        </div>
        <div class="input-field col s8">
            <i class="material-icons prefix">location_city</i>
            <input id="city" type="text" class="validate" value="Molsheim">
            <label for="city">City</label>
        </div>
    </div>
      
    <div class="row">
        <div class="col s4"></div>
        <div class="col s4">
            <button type="submit" class="btn mediumButtonCentered customLessPinkBackground borderPink">Proceed to paiement</button>
        </div>
        <div class="col s4"></div>
      </div>
  </form>
<?php
}
}
/* {/block 'body'} */
}
