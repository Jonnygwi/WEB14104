<?php

define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');

//$data = array("alpaca", "buffalo", "cat", "tiger");

// create empty array
$data = array();


// WP loop to get all the courses into an array

// http://generatewp.com/wp_query/
// WP_Query arguments
$args = array (
	'category_name'          => 'courses',
	'pagination'             => false,
	'posts_per_page'         => '200',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) 
    {
		$query->the_post();
        $data[] = array (
            
            "title" => get_the_title(),
            "link" => get_permalink()
        );
	}
}


echo json_encode($data);
?>