<?php
/**
 * outils
 */
function veilleTech_remove_menu_pages() {
	remove_menu_page( 'tools.php' );
}

add_action( 'admin_menu', 'veilleTech_remove_menu_pages' );