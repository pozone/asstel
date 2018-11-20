<?php
/**
* Content/view part for page.php
*
* @author 	Artbees
* @package 	jupiter/views
* @version     5.0.0
*/

global $mk_options;

if (have_posts()) 

	while (have_posts()):
    
	    the_post();
		
		do_action('mk_page_before_content');

	    the_content();

	    do_action('mk_page_after_content');
		?>
		<div class="clearboth"></div>
		<?php

	    wp_link_pages('before=<div id="mk-page-links">' . esc_html__( 'Pages:', 'mk_framework' ) . '&after=</div>');

	endwhile;


 /* INIZIO */ ?>
<div class="accordion_footer" itemprop="mainEntityOfPage">
    <div class="accordion_footer_content">
        <?php


        $post_id = 445; // example post id 
        $post_content = get_post($post_id);
        $content = $post_content->post_content;
        echo do_shortcode( $content );//executing shortcodes


        ?>
    </div>
    </div>
<?php /* fine */ 