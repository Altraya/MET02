<?php
/* Smarty version 3.1.31, created on 2017-11-09 15:41:02
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a04770ed7e560_35186476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8fef4f18a21ac5b367856f077e4bccc16c5ba40' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/404.tpl',
      1 => 1510242053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04770ed7e560_35186476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3258177715a04770ed7aa46_36337587', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "include/layout.tpl");
}
/* {block 'body'} */
class Block_3258177715a04770ed7aa46_36337587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3258177715a04770ed7aa46_36337587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    <h1>
        404
    </h1>
    <h2>
        Ressource not found
    </h2>
</div>

<?php
}
}
/* {/block 'body'} */
}
