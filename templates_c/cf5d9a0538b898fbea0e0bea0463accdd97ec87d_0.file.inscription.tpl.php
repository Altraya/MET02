<?php
/* Smarty version 3.1.31, created on 2017-10-12 15:00:36
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df8394b076d9_47744412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5d9a0538b898fbea0e0bea0463accdd97ec87d' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/inscription.tpl',
      1 => 1507820432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df8394b076d9_47744412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9074570459df8394aed135_13442151', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'jsblock'} */
class Block_149936446559df8394af88c7_18178740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo '<script'; ?>
 type="text/javascript" src="js/inscription.js"><?php echo '</script'; ?>
>
  <?php
}
}
/* {/block 'jsblock'} */
/* {block 'body'} */
class Block_9074570459df8394aed135_13442151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9074570459df8394aed135_13442151',
  ),
  'jsblock' => 
  array (
    0 => 'Block_149936446559df8394af88c7_18178740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>INSCRIPTION</h1>
    <form id="formInscription" class="smallMarginBottom">
      <h2> Login information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="login" type="text" class="validate">
          <label for="login">Login</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="password2" type="password" class="validate">
          <label for="password2">Password confirmation</label>
        </div>
      </div>
      
      <h2>Personal information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s4">
          <i class="material-icons prefix">cake</i>
          <input id="birthdate" type="text" class="datepicker">
          <label for="birthdate">Birthdate</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="email" class="validate" onchange="checkMail()">
          <label for="email" data-error="Wrong email">Contact email</label>
        </div>
        
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="phone" type="tel" class="validate" onchange="checkPhone()">
          <label for="phone" data-error="Wrong phone number">Phone number</label>
        </div>
      </div>
    
      

      <h2>Delivery information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">local_post_office</i>
          <input id="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <i class="material-icons prefix">location_on</i>
          <input id="postalcode" type="text" class="validate">
          <label for="postalcode">Postal Code</label>
        </div>
        <div class="input-field col s8">
          <i class="material-icons prefix">location_city</i>
          <input id="city" type="text" class="validate">
          <label for="city">City</label>
        </div>
        
      </div>
      <div class="row">
        <div class="col s4"></div>
        <div class="col s4">
            <button type="submit" class="btn mediumButtonCentered customLessPinkBackground borderPink">Submit</button>
        </div>
        <div class="col s4"></div>
      </div>
    </form>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149936446559df8394af88c7_18178740', 'jsblock', $this->tplIndex);
?>


<?php
}
}
/* {/block 'body'} */
}
