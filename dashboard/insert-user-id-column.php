<?php 
/*--------------------------------------------------------------
	INSERT USER ID COLUMN
--------------------------------------------------------------*/ 
// Adding the column
add_filter( 'manage_users_columns', 'btwp_user_id_column' );

function btwp_user_id_column( $columns ) {
	$columns['user_id'] = 'ID';
	return $columns;
}

// Column content
add_action( 'manage_users_custom_column',  'btwp_user_id_column_content', 10, 3 );

function btwp_user_id_column_content( $value, $column_name, $user_id ) {
	if ( 'user_id' == $column_name )
		return $user_id;
	return $value;
}


// Column style
add_action( 'admin_head-users.php',  'btwp_user_id_column_style' );

function btwp_user_id_column_style() {
	echo '<style>.column-user_id{width: 5%}</style>';
}