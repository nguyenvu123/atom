<?php
/**
 * Page
 *
 * @package Page
 */

get_header(); ?>
    <div class="wrapper">

    </div>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_content();
	} // end while
} // end if

get_footer(); ?>