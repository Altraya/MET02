<?php
/* Smarty version 3.1.31, created on 2017-10-09 07:48:23
  from "/home/ubuntu/workspace/TP1/templates/connection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59db29c74c5966_58458510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8b767b17e7181247ae3f8d72060e8dee285a0a' => 
    array (
      0 => '/home/ubuntu/workspace/TP1/templates/connection.tpl',
      1 => 1507534910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db29c74c5966_58458510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115841168459db29c74c08f7_46746896', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_115841168459db29c74c08f7_46746896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_115841168459db29c74c08f7_46746896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <form>
        <h1>Connection</h1>
        <h2> Login information</h2>
        <hr/>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter your user name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="password1">Password</label>
              <input type="password" class="form-control" id="password1" placeholder="Password">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="password2">Type your password again</label>
              <input type="password" class="form-control" id="password2" placeholder="Password">
            </div>
          </div>
        </div>
        

        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </section>
  </div>   
<?php
}
}
/* {/block 'body'} */
}
