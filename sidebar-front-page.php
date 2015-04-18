<?php
/**
 * Front Page Sidebar.
 *
 * @package Toivo Lite
 */
?>

	<aside id="sidebar-front-page" class="sidebar-front-page sidebar" role="complementary" aria-labelledby="sidebar-front-page-header" <?php hybrid_attr( 'sidebar', 'front-page' ); ?>>
		<h2 class="screen-reader-text" id="sidebar-front-page-header"><?php echo esc_attr_x( 'Front Page Sidebar', 'Sidebar aria label', 'toivo-lite' ); ?></h2>
		
		<div class="wrap">
			<div class="wrap-inside">
			
			<?php if ( is_active_sidebar( 'front-page' ) ) : ?>
			
				<?php dynamic_sidebar( 'front-page' ); ?>
					
			<?php else: ?>
			
				<?php 
					/* Arguments for the default widget. */
					$args = array(
						'before_widget' => '<section class="widget widget_search">',
						'after_widget'  => '</section>',
						'before_title'  => '<h3 class="widget-title">',
						'after_title'   => '</h3>'
					);
				?>
				
				<?php the_widget( 'WP_Widget_Text', array( 'title' => __( 'Front Page Widget I', 'toivo-lite' ), 'text' => 'Ne sit ipsum melius ponderum, an duo quem saperet deleniti, definitiones mediocritatem in qui. Dicat debitis argumentum ne eam, ad per odio efficiendi definitionem.' ), $args ); ?> 
				
				<?php the_widget( 'WP_Widget_Text', array( 'title' => __( 'Front Page Widget II', 'toivo-lite' ), 'text' => 'Ne sit ipsum melius ponderum, an duo quem saperet deleniti, definitiones mediocritatem in qui. Dicat debitis argumentum ne eam, ad per odio efficiendi definitionem.' ), $args ); ?> 
				
			<?php endif; // End check for front page sidebar. ?>
		
			</div><!-- .wrap-inside -->	
		</div><!-- .div -->

	</aside><!-- #sidebar-front-page .sidebar -->
	