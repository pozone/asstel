<?php
/**
 * @package jupiter
 * Template Name: Area Login
 *
 */

/**
 *
 ** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php
 ** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php
 *
 */
?>
<?php get_header();


mk_build_main_wrapper( mk_get_view('templates', 'page-login', true) );


get_footer();
  ?>

