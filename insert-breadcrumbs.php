<?php
/*--------------------------------------------------------------
	INSERINDO BREADCRUMBS
--------------------------------------------------------------*/
function btwp_breadcrumbs() {
	echo '<ul class="breadcrumbs">';
		if ( !is_home() ) {
			echo '<li><a href="';
			echo get_option('home');
			echo '">';
			echo 'Home';
			echo "</a> » </li>";
		
			if ( is_category() || is_single() ) {
				echo '<li>';
				the_category(' </li><li> ');

				if ( is_single() ) {
					echo "</li><li>";
					the_title();
					echo '</li>';
				}
			
			} elseif ( is_page() ) {
				echo '<li>';
				echo the_title();
				echo '</li>';
			}
		}

		elseif ( is_tag() ) { single_tag_title(); }
		elseif ( is_day() ) { echo"<li>Arquivo(s) para "; the_time('F jS, Y'); echo'</li>'; }
		elseif ( is_month() ) { echo"<li>Arquivo(s) para "; the_time('F, Y'); echo'</li>'; }
		elseif ( is_year() ) { echo"<li>Arquivo(s) para "; the_time('Y'); echo'</li>'; }
		elseif ( is_author() ) { echo"<li>Arquivo(s) do autor"; echo'</li>'; }
		elseif ( isset($_GET['paged'] ) && !empty($_GET['paged'])) { echo "<li>Arquivo(s)"; echo'</li>'; }
		elseif ( is_search() ) { echo"<li>Resultado(s) da busca"; echo'</li>'; }
	echo '</ul>';
}

?>

<!-- Insira -->
<?php //btwp_breadcrumb(); ?>