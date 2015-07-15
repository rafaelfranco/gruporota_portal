<?php /* Static Name: Navigation */ ?>


<style type="text/css">
	.linkgold {
		font: normal 12px/20px Open Sans !important;
		text-transform: uppercase;
		display: inline !important;
		padding: 0px !important;
		border: 0px !important;
		/* color: #444444 !important; */
		color: #b19d33 !important;
	}
	.linkgold:hover {
		/* background: #FFD700 !important; */
		background: none !important;
		font-weight: bold;
		font: bold 12px/20px Open Sans !important;
	}
</style>

<!-- CUSTOM LANGUAGE MENU -->
<div class="menulanguage">
<a href="#" class="linkgold">Português</a> | <a href="#" class="linkgold">Inglês</a> | <a href="#" class="linkgold">Espanhol</a>
</div>





<!-- BEGIN MAIN NAVIGATION -->
<nav class="nav nav__primary clearfix">
<?php if (has_nav_menu('header_menu')) {
	wp_nav_menu( array(
		'container'      => 'ul',
		'menu_class'     => 'sf-menu',
		'menu_id'        => 'topnav',
		'depth'          => 0,
		'theme_location' => 'header_menu',
		'walker'         => new description_walker()
	));
} else {
	echo '<ul class="sf-menu">';
		$ex_page = get_page_by_title( 'Privacy Policy' );
		if ($ex_page === NULL) {
			$ex_page_id = '';
		} else {
			$ex_page_id = $ex_page->ID;
		}
		wp_list_pages( array(
			'depth'    => 0,
			'title_li' => '',
			'exclude'  => $ex_page_id
			)
		);
	echo '</ul>';
} ?>




</nav><!-- END MAIN NAVIGATION -->


<ul class="sf-menu" >
<li class="menu-item menu-item-type-post_type menu-item-object-page" style="background: none; color: #b19d33;
	font: normal 12px/20px Open Sans !important;
	text-transform: uppercase;
	margin-top: 10px;"><a href="#" class="linkgold" style="color: #b19d33 !important;">Imprensa</a> | <a href="#" class="linkgold" style="color: #b19d33 !important;">Investidores</a> | <a href="#" class="linkgold" style="color: #b19d33 !important;">Fornecedores</a> | <a href="#" class="linkgold" style="color: #b19d33 !important;">Fale conosco</a></li>
</ul>