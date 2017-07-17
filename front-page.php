<?php
get_header();

//get_template_part( 'partials/slider' );

$the_query = new WP_Query( array(
	'posts_per_page' => 1,
	'post_type' => 'any'
));

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) : $the_query->the_post();
		get_template_part( 'partials/latest' );
	endwhile;
	wp_reset_postdata();
}

while ( have_posts() ) : the_post();
	get_template_part( 'partials/post', get_post_type() );
endwhile;

// Previous/next page navigation.
the_posts_pagination( array(
	'prev_text'          => '&larr;',
	'next_text'          => '&rarr;',
	'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
) );

get_footer();
