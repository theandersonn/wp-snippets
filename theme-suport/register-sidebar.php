/*--------------------------------------------------------------
	REGISTER SIDEBARS
--------------------------------------------------------------*/
register_sidebar(
    array(
    'name' => 'Barra lateral',
    'id' => 'barra-lateral',
    'before_widget' => '<div class="">',
    'after_widget' => '</div>',
    'description' => 'Widgets in this area are displayed in the sidebar'
    )
);