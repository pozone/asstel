<div data-mk-stretch-content="true" class="wpb_row vc_row vc_row-fluid  mk-fullwidth-false  attched-false js-master-row  mk-grid mk-in-viewport">
	<div class="vc_col-sm-6 wpb_column column_container _ height-full">
		<?php

		//echo(do_shortcode('[vc_row][vc_column width="1/2"][vc_column_text css=".vc_custom_1539944501722{margin-bottom: 0px !important;}"]I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.[/vc_column_text][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]'));

		if ( ! is_user_logged_in() ) { // Display WordPress login form:
		    $args = array(
		        //'redirect' => admin_url(), 
		        'form_id' => 'loginform-custom',
		        'label_username' => __( '' ),
		        'label_password' => __( '' ),
		        'label_remember' => __( 'Ricordami' ),
		        'label_log_in' => __( 'Accedi' ),
		        'remember' => true
		    );
		    wp_login_form( $args );
		} else { // If logged in:
			$current_user = wp_get_current_user();
			echo(do_shortcode('[vc_message message_box_color="warning" css_animation="fadeIn"]Utente già loggato![/vc_message]'));
			?>
			<h6>Salve <?php echo($current_user->user_login);?>, <a href="<?php echo(wp_logout_url(home_url()));?>" title="Logout">Clicca Qui</a> per uscire.</h6>
			
			<?php
		}
		?>

	</div>
	<div class="vc_col-sm-6 wpb_column column_container   _ height-full">
		
	</div>
</div>

<?php /* INIZIO */ ?>
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
<?php /* fine */ ?>
