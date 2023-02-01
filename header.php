<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BuddyBoss_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-grid-only@1.0.0/bootstrap.css">
		<?php wp_head(); ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-8SL0GK638D"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-8SL0GK638D');
		</script>

	</head>

	<body <?php body_class(); ?>>

        <?php wp_body_open(); ?>

		<?php if (!is_singular('llms_my_certificate')):
		 
			do_action( THEME_HOOK_PREFIX . 'before_page' ); 
	
		endif; ?>

		<div id="page" class="site">

			<?php do_action( THEME_HOOK_PREFIX . 'before_header' ); ?>

			<header id="masthead" class="<?php echo apply_filters( 'buddyboss_site_header_class', 'site-header site-header--bb' ); ?>">
				<?php do_action( THEME_HOOK_PREFIX . 'header' ); ?>
			</header>

			<?php do_action( THEME_HOOK_PREFIX . 'after_header' ); ?>

			<?php do_action( THEME_HOOK_PREFIX . 'before_content' ); ?>

			<div id="content" class="site-content">

				<?php do_action( THEME_HOOK_PREFIX . 'begin_content' ); ?>

				<div class="container">
					<?php  
					    global $post;
						if($post->ID == '8'){ ?>
                        <div class="row custom-row">
							<div class="col-md-6">
							<h1 class="custom-heading">Latest News</h1>
							</div>
							<div class="col-md-6 text-right">
							<a href="/blogs" class="view-all">View All News</a>
							</div>
						</div>	
					<div class="row">
                         <?php 
						    $query_args = array(
								'posts_per_page' => 4,
								'post_type' => 'post',
								'post_status' => 'publish',
								'order' => 'ASC',
								'category_name' => 'featured'
							);
							
							// The Query
							$the_query = new WP_Query( $query_args );
							
							// The Loop
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post(); ?>
									<div class="col-md-3 padd-right">
										<div class="post-box">
											<a href="<?php echo the_permalink(); ?>" class="post-link">
												<?php echo the_post_thumbnail(); ?>
												<h2 class="post-heading"><?php echo the_title(); ?></h2>
												<div class="post-content"><?php echo the_excerpt(); ?></div>
												<div class="post-meta"><?php echo get_the_date(); ?> | <?php echo get_the_time(); ?>  </div>
											</a>			
										</div>
									</div>
									
						    <?php		}
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							} ?>			
					</div>						
					<?php	}	?>
					<div class="<?php echo apply_filters( 'buddyboss_site_content_grid_class', 'bb-grid site-content-grid' ); ?>">