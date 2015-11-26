<?php

//modo manutenção
function maintenace_mode() {
  if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
  	get_template_part('splash/splash');
    die();
  }
}
add_action('get_header', 'maintenace_mode');
