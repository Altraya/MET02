<?php
/* Smarty version 3.1.31, created on 2017-10-12 14:23:52
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/meta.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df7af86c0388_91658191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2e51c4f17ab5520811fd1858dec2f907115275' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/meta.tpl',
      1 => 1507818137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df7af86c0388_91658191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164267149159df7af86b97f3_05072421', 'pageTitle');
?>
</title>
  
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/custom.css">
  
  <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>


  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
  <![endif]-->
</head>
	
<?php }
/* {block 'pageTitle'} */
class Block_164267149159df7af86b97f3_05072421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageTitle' => 
  array (
    0 => 'Block_164267149159df7af86b97f3_05072421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageTitle'} */
}
