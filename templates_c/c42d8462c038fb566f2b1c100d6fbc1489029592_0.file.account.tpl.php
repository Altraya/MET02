<?php
/* Smarty version 3.1.31, created on 2017-10-11 09:56:29
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ddeacd0a9be2_46386096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42d8462c038fb566f2b1c100d6fbc1489029592' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/account.tpl',
      1 => 1507715785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ddeacd0a9be2_46386096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199149204859ddeacd0a23e8_58054117', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_199149204859ddeacd0a23e8_58054117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_199149204859ddeacd0a23e8_58054117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>ACCOUNT INFORMATION</h1>
    <form id="formInscription" class="smallMarginBottom">

      <h2>Personal information</h2>
      <hr/>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="first_name" type="text" class="validate" value="Baptiste">
          <label for="first_name">First Name</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="last_name" type="text" class="validate" value="Oberbach">
          <label for="last_name">Last Name</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="email" type="email" class="validate" value="o.baptiste@wanadoo.fr">
          <label for="email" data-error="Wrong email">Contact email</label>
        </div>
        
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" value="06 46 69 04 54">
          <label for="icon_telephone">Phone number</label>
        </div>
      </div>
    
      

      <h2>Delivery information</h2>
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
            <button type="submit" class="btn mediumButtonCentered customLessPinkBackground borderPink">Modify Account Information</button>
        </div>
        <div class="col s4"></div>
      </div>
    </form>
<?php
}
}
/* {/block 'body'} */
}
