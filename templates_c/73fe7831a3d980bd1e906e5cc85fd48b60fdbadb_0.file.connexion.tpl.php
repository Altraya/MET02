<?php
/* Smarty version 3.1.31, created on 2017-10-09 07:05:31
  from "/home/ubuntu/workspace/TP1/templates/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59db1fbb12da41_74573722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fe7831a3d980bd1e906e5cc85fd48b60fdbadb' => 
    array (
      0 => '/home/ubuntu/workspace/TP1/templates/connexion.tpl',
      1 => 1507376559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db1fbb12da41_74573722 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="wrapper" class="container">
    <section id="content">
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
        

        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </section>
  </div>   
<?php }
}
