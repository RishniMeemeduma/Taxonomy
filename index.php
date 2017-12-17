<?php
/*
plugin name:Films Taxonomy
plugin URI:http://www.wordpress.com
author:Rishni Meemeduma
author URI:http://www.ris.tt
version:1.6

*/

// Register Custom Taxonomy
function Films_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Films', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Films', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Films', 'text_domain' ),
		'all_items'                  => __( 'All Films', 'text_domain' ),
		'parent_item'                => __( 'Parent film', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent film', 'text_domain' ),
		'new_item_name'              => __( 'New film name', 'text_domain' ),
		'add_new_item'               => __( 'Add new film', 'text_domain' ),
		'edit_item'                  => __( 'Edit film', 'text_domain' ),
		'update_item'                => __( 'Update film', 'text_domain' ),
		'view_item'                  => __( 'View film', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate film with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or Remove films', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from most used film', 'text_domain' ),
		'popular_items'              => __( 'popular items', 'text_domain' ),
		'search_items'               => __( 'Search films', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'Films', array( 'post' ), $args );

}
add_action( 'init', 'Films_taxonomy', 0 );

?>