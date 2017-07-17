<?php
get_header();
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
