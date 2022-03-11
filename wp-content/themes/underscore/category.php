<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */

get_header();
?>

	<main id="primary" class="site-main">


		<?php 
		$categories = get_the_category();
		$category_id = $categories[0]->cat_ID;
	
		if($category_id == 6)
		{
			echo do_shortcode('[pafe-template id="1054"]');
		}
		else if($category_id == 8)
		{

			echo do_shortcode('[pafe-template id="1054"]');
		}
		else if($category_id == 7)
		{
			
			echo do_shortcode('[pafe-template id="1032"]');
		}
		else if($category_id == 4)
		{
			echo do_shortcode('[pafe-template id="1040"]');
		}
		else if($category_id == 3)
		{
			echo do_shortcode('[pafe-template id="1052"]');
		}
		else if($category_id == 9)
		{
			echo do_shortcode('[pafe-template id="1056"]');
		}
		else if($category_id == 10)
		{
			echo do_shortcode('[pafe-template id="1058"]');
		}
		
		?>

	</main><!-- #main -->
<?php
get_footer();
?>