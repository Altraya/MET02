<?php
/* Smarty version 3.1.31, created on 2017-10-09 07:33:46
  from "/home/ubuntu/workspace/TP1/templates/include/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59db265a077fa1_82332414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449a88751f116e3aea88db26605249bd2dd61b8e' => 
    array (
      0 => '/home/ubuntu/workspace/TP1/templates/include/header.tpl',
      1 => 1507534422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59db265a077fa1_82332414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>

	<nav id="topNavbar" class="navbar navbar-expand-lg navbar-light customGreyColorBackground">
		<a class="navbar-brand" href="#">MyLittleUnicornShop</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse rowReverser" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link active" href="#">Home</a>
				<a class="nav-item nav-link" href="#">Account</a>
				<a class="nav-item nav-link" href="#">Cart</a>
				<a class="nav-item nav-link" href="#">Log in</a>
			</div>
		</div>
	</nav>

	<div id="banner" class="customLessPinkBackground">
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-3">
				<img src="img/mainLogoUnicornNarval.png" class="imgLogoConstraintWidth"></img>
			</div>
			<div class="col-md-4">
				
			</div>
			<div class="col-md-3 align-self-center">

				<div class="input-group">
					<input type="text" class="form-control formSearch" placeholder="Search for..." aria-label="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-secondary formSearch" type="button">Search</button>
					</span>
				</div>

			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>


	<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light customPinkBackground">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Animals</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Plushes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Candy and Pastry</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Papershop</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Clothes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						Cart 
						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header><?php }
}
