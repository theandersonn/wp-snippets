<?php 

/*--------------------------------------------------------------
	INSERT MENU AND SUBMENU TOOLBAR
--------------------------------------------------------------*/ 
add_action('admin_bar_menu', 'btwp_add_toolbar_items', 100);

function btwp_add_toolbar_items($admin_bar){

	$admin_bar->add_menu( array(
		'id'    => 'my-item',
		'title' => 'My Item',
		'href'  => '#',
		'meta'  => array(
			'title' => __('My Item'),			
		),
	));

	$admin_bar->add_menu( array(
		'id'    => 'my-sub-item',
		'parent' => 'my-item',
		'title' => 'My Sub Menu Item',
		'href'  => 'http://www.google.com',
		'meta'  => array(
			'title' => __('My Sub Menu Item'),
			'target' => '_blank',
			'class' => 'my_menu_item_class'
		),
	));

	$admin_bar->add_menu( array(
		'id'    => 'my-second-sub-item',
		'parent' => 'my-item',
		'title' => 'My Second Sub Menu Item',
		'href'  => '#',
		'meta'  => array(
			'title' => __('My Second Sub Menu Item'),
			'target' => '_blank',
			'class' => 'my_menu_item_class'
		),
	));

}