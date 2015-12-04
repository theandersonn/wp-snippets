<?php
/*--------------------------------------------------------------
	ADICIONAR MAIS RECURSOS NO EDITOR DE TEXTO
--------------------------------------------------------------*/
function insert_more_buttons_editor($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'del';
  $buttons[] = 'sub';
  $buttons[] = 'sup';
  $buttons[] = 'fontselect';
  $buttons[] = 'fontsizeselect';
  $buttons[] = 'cleanup';
  $buttons[] = 'styleselect';
  return $buttons;
}
add_filter("mce_buttons_3", "insert_more_buttons_editor");
