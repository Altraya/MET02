<?php
/* Smarty version 3.1.31, created on 2017-10-26 13:23:07
  from "/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f1e1bbe8d811_04468760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb8c7fb7e386a2938340801ff29fae1cc1b4086' => 
    array (
      0 => '/home/ubuntu/workspace/MyLittleUnicornShop/templates/include/header.tpl',
      1 => 1509024175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/miniCart.tpl' => 1,
  ),
),false)) {
function content_59f1e1bbe8d811_04468760 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>

	<nav id="topNavbar" class="pink lighten-2">
		<div class="nav-wrapper">
			<a href="index.php" class="brand-logo">MyLittleUnicornShop</a>
			<a href="#" data-activates="mobile-top-menu" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=account">Account</a></li>
				<li><a href="index.php?page=cart">Cart</a></li>
				<li><a href="index.php?page=connection">Log in</a></li>
			</ul>
			<ul class="side-nav right" id="mobile-top-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?page=account">Account</a></li>
				<li><a href="index.php?page=cart">Cart</a></li>
				<li><a href="index.php?page=connexion">Log in</a></li>
				
				<div class="divider"></div>

				<li><a href="index.php?page=catalog&category=animals">Animals</a></li>
				<li><a href="index.php?page=catalog&category=plushes">Plushes</a></li>
				<li><a href="index.php?page=catalog&category=candyandpastry">Candy and Pastry</a></li>
				<li><a href="index.php?page=catalog&category=papershop">Papershop</a></li>
				<li><a href="index.php?page=catalog&category=clothes">Clothes</a></li>
		        <li><a href="index.php?page=catalog&category=cart"><i class="material-icons right">shopping_cart</i>Cart</a></li>
			</ul>
		</div>
	</nav>

	<div id="banner" class="pink lighten-4 widthMax show-on-medium-and-up">
		<div class="row widthMax noMarginBottom flexIt">
			<div class="col s1">
				
			</div>
			<div class="col s3">
				<img src="img/mainLogoUnicornNarval.png" class="widthMax"></img>
			</div>
			<div class="col s4">
				
			</div>
			<div class="col s3 valign-wrapper">
				<nav>
					<div class="nav-wrapper">
					<form>
						<div class="input-field">
							<input id="search" class="jsAutocomplete" type="search" required>
							<label class="label-icon searchIconCorrectionHack" for="search"><i class="material-icons">search</i></label>
							<i class="material-icons">close</i>
						</div>
					</form>
				</div>
				</nav>
				
			</div>
			<div class="col s1">
				
			</div>
		</div>
	</div>

	<nav id="mainNavbar" class="pink lighten-2 show-on-medium-and-up">
		<div class="nav-wrapper">
			<ul class="left">
				<li><a href="index.php?page=catalog&category=animals" class="active">Animals</a></li>
				<li><a href="index.php?page=catalog&category=plushes">Plushes</a></li>
				<li><a href="index.php?page=catalog&category=candyandpastry">Candy and Pastry</a></li>
				<li><a href="index.php?page=catalog&category=papershop">Papershop</a></li>
				<li><a href="index.php?page=catalog&category=clothes">Clothes</a></li>
			</ul>
			<ul class="right smallPaddingRight">
		        <li class="miniCartMenu">
		        	<a href="index.php?page=cart"><i class="material-icons right">shopping_cart</i>Cart</a>
    				<?php $_smarty_tpl->_subTemplateRender('file:include/miniCart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		        </li>
			</ul>
		</div>
	</nav>
</header><?php }
}
