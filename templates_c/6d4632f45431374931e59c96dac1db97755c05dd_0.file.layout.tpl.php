<?php
/* Smarty version 3.1.31, created on 2017-10-09 07:40:20
  from "/home/ubuntu/workspace/TP1/templates/include/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59db27e4128821_28791210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d4632f45431374931e59c96dac1db97755c05dd' => 
    array (
      0 => '/home/ubuntu/workspace/TP1/templates/include/layout.tpl',
      1 => 1507534816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/meta.tpl' => 1,
    'file:include/header.tpl' => 1,
    'file:include/footer.tpl' => 1,
  ),
),false)) {
function content_59db27e4128821_28791210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:include/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="bodyPage" class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127725460159db27e41217d5_20048592', 'body');
?>

    </section>
    <?php $_smarty_tpl->_subTemplateRender('file:include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
<?php }
/* {block 'body'} */
class Block_127725460159db27e41217d5_20048592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_127725460159db27e41217d5_20048592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
