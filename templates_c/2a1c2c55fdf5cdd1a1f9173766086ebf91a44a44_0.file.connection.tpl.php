<?php
/* Smarty version 3.1.31, created on 2017-10-12 14:41:52
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df7f307933b0_83364979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a1c2c55fdf5cdd1a1f9173766086ebf91a44a44' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/connection.tpl',
      1 => 1507819172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df7f307933b0_83364979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153786034659df7f3078b692_58829760', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_153786034659df7f3078b692_58829760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_153786034659df7f3078b692_58829760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      
  <h1>CONNECTION</h1>
  <div class="divider"></div>
  <div class="row">
    
    <!-- Login -->
    <div class="col s6">
      <h2>Login</h2>
      <form id="login">
        <div class="row">
          <div class="input-field col s8">
            <i class="material-icons prefix">account_circle</i>
            <input id="login" type="text" class="validate">
            <label for="login">Login</label>
          </div>
          <div class="col s4">
            
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <i class="material-icons prefix">lock</i>
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <div class="col s4">
          </div>
        </div>
      
        <div class="row">
          <div class="col s8 flexIt">
            <button type="submit" class="mediumButtonCentered btn customLessPinkBackground borderPink">Login</button>
          </div>
          <div class="col s4">
          </div>
        </div>
      </form>
    </div>
    
        <!-- Inscription -->
    <div class="col s6">
      <h2>Create account</h2>
      <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
      <a href="index.php?page=inscription" class="btn right customLessPinkBackground borderPink">Create account</a>
    </div>
  </div>
<?php
}
}
/* {/block 'body'} */
}
