<?php 
/*--------------------------------------------------------------
	DISABLE COMMENTS FIELDS
--------------------------------------------------------------*/

add_filter('comment_form_default_fields','disable_comments_fields');

function disable_comments_fields($fields){
	$fields['author'] = '';
	$fields['email'] = ''; 
	$fields['url'] = '';

	return $fields;
}