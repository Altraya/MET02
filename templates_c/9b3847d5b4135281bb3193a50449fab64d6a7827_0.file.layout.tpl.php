<?php
/* Smarty version 3.1.31, created on 2017-10-12 14:23:52
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59df7af8684c06_08783132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3847d5b4135281bb3193a50449fab64d6a7827' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/layout.tpl',
      1 => 1507818120,
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
function content_59df7af8684c06_08783132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:include/meta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php $_smarty_tpl->_subTemplateRender('file:include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="bodyPage" class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145445215459df7af8670396_96360141', 'body');
?>

    </section>
    <?php $_smarty_tpl->_subTemplateRender('file:include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="js/materialize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/autocomplete.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100996274259df7af867cf46_48780870', 'jsblock');
?>

</body>
<?php }
/* {block 'body'} */
class Block_145445215459df7af8670396_96360141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_145445215459df7af8670396_96360141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'jsblock'} */
class Block_100996274259df7af867cf46_48780870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jsblock' => 
  array (
    0 => 'Block_100996274259df7af867cf46_48780870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'jsblock'} */
}
