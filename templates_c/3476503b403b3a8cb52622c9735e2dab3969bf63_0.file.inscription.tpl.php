<?php
/* Smarty version 3.1.31, created on 2017-10-09 07:39:08
  from "/home/ubuntu/workspace/TP1/templates/inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59db279c8f5606_67837016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3476503b403b3a8cb52622c9735e2dab3969bf63' => 
    array (
      0 => '/home/ubuntu/workspace/TP1/templates/inscription.tpl',
      1 => 1507534742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db279c8f5606_67837016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157981374259db279c8e44d5_59449274', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_157981374259db279c8e44d5_59449274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_157981374259db279c8e44d5_59449274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Inscription</h1>
    <form>
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
      
      <h2>Personal information</h2>
      <hr/>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" placeholder="Enter your firstname">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="sex">Sex</label>
            <select class="form-control" id="sex">
              <option>Homme</option>
              <option>Femme</option>
              <option>Undefined</option>
            </select>
          </div>
        </div>
      </div>
    
    <h2>Contact information</h2>
    <hr/>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="phone" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>
      </div>
    </div>
      

    <h2>Delivery information</h2>
    <hr/>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="Enter your address">
        </div>
      </div>
      <div class="col-md-4">        
        <div class="form-group">
          <label for="postalcode">Postal code</label>
          <input type="postalcode" class="form-control" id="postalcode" placeholder="Enter your postal code">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" class="form-control" id="city" placeholder="Enter your city">
        </div>
      </div>
    </div>
      
      <!--
      <div class="form-check">
        <label class="form-check-label">
          <input type="checkbox" class="form-check-input">
          Check me out
        </label>
      </div>
      -->

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
}
}
/* {/block 'body'} */
}
