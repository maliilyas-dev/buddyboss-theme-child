<?php
/*
 * Template name: Partner
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BuddyBoss_Theme
 */

get_header();
?>

<style>
    .row {
  display: flex;
  flex-wrap: wrap;
}

.col {
    margin: 13px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: flex-start;
}
.col a img {
    max-width: 200px;
    border: 1px solid #7A7A7A;
    filter: drop-shadow(0px 0px 4px #54595F);
    border-radius: 5px;
}

.search {
    float: right;
    width: 300px;
    display: inline-block;
    position: relative;
    top: 85px;
    right: 33px;
}
.asp_content {
    display: flex !important;
    flex-direction: row !important;
    align-items: center !important;
}
.mobile{
    display:none;
}
@media only screen and (max-width:640px) {
    .mobile{
        display:block;
    }
    .col a img {
    max-width: 135px;
  
}
.col {
    flex: 1 0 16%;
    
   }
.search {
    width: 100%;
    display: block;
    position: relative;
    top: 0;
    right: 0;
    float: none;
}
section.partner-page > div > h2 {
    text-align: center !important;
}
.app-page {
    text-align: center;
    margin: 15px 0px 5px 0px;
    display: flex;
    align-items: center;
    flex-direction: column;
}
}
</style>
         <section class="partner-page">
                <div class="search"><?php echo do_shortcode('[wd_asp id=1]');?></div>
                <div class="test">This is custom branch settings</div>
                <div class="app-page">
                <img class="mobile" src="https://efcnetwork.com.au/wp-content/uploads/2021/04/cropped-EFC-NetworkLogo.png" width="40">
                </div>
			   <div class="row">
                      <h1 class="col" style="margin: 8px 10px;display: flex;color: black;align-items: center;flex-direction: column;"><?php the_title(); ?></h1>
                </div>
                <div class="row">
                <h2 class="col" style="margin: 7px 13px;text-align: left;font-weight: bold;font-size: 19px;font-style: italic;background: #c90527;padding: 0px 12px;color: #ffffff;display: inline-block;">Co- Major Partners</h2>
                </div>
			   
			   <div class="row">
			        <?php $eventpagePartners = new WP_Query(array(
        			      'posts_per_page' => -1,
        			      'post_type' => 'partner',
                          'orderby' => 'title',
                          'order'   => 'ASC',
                          'category_name' => 'featured-business'
        			    ));
        			    
        			    while($eventpagePartners->have_posts()) {
        			        $eventpagePartners->the_post(); ?>
        			        
        			          <div class="col">
        			               	<a href="<?php the_permalink(); ?>">
			                            	     <?php 
                                                $limage = get_field('add_logo');
                                                if( !empty( $limage ) ): ?>
                	                          <img src="<?php echo esc_url($limage['url']); ?>" alt="<?php echo esc_attr($limage['alt']); ?>">  
                	                          <p style="visibility:hidden;font-size: 1px !important;line-height: 0px;margin: 0px;"> <?php echo the_title(); ?>  </p>                     
                	                          <?php endif; ?>
			                            	</a>      
        			          </div>
        			   <?php }
        			    ?>       
                </div>

                <div class="row">
                <h2 class="col" style="margin-top: 20px !important;margin: 7px 13px;text-align: left;font-weight: bold;font-size: 19px;font-style: italic;background: #c90527;padding: 0px 12px;color: #ffffff;display: inline-block;">Premium Partner</h2>
                </div>  
			   <div class="row">
			        <?php $eventpagePartners = new WP_Query(array(
        			      'posts_per_page' => -1,
        			      'post_type' => 'partner',
                          'orderby' => 'title',
                          'order'   => 'ASC',
                          'category_name' => '2nd-tier-business'
        			    ));
        			    
        			    while($eventpagePartners->have_posts()) {
        			        $eventpagePartners->the_post(); ?>
        			        
        			          <div class="col">
        			               	<a href="<?php the_permalink(); ?>">
			                            	     <?php 
                                                $limage = get_field('add_logo');
                                                if( !empty( $limage ) ): ?>
                	                          <img src="<?php echo esc_url($limage['url']); ?>" alt="<?php echo esc_attr($limage['alt']); ?>">                      
                	                          <?php endif; ?>
			                            	</a>	              
        			          </div> 
        			   <?php }
        			    ?>      
                </div>

                <div class="row">
                <h2 class="col" style="margin-top: 20px !important;margin: 7px 13px;text-align: left;font-weight: bold;font-size: 19px;font-style: italic;background: #c90527;padding: 0px 12px;color: #ffffff;display: inline-block;">EFC Network Business Partners</h2>
                </div>
			   <div class="row">
			        <?php $eventpagePartners = new WP_Query(array(
        			      'posts_per_page' => -1,
        			      'post_type' => 'partner',
                          'orderby' => 'title',
                          'order'   => 'ASC',
                          'category_name' => '3rd-tier-business'
        			    ));
        			    
        			    while($eventpagePartners->have_posts()) {
        			        $eventpagePartners->the_post(); ?>
        			        
        			          <div class="col">
        			               	<a href="<?php the_permalink(); ?>">
			                            	     <?php 
                                                $limage = get_field('add_logo');
                                                if( !empty( $limage ) ): ?>
                	                          <img src="<?php echo esc_url($limage['url']); ?>" alt="<?php echo esc_attr($limage['alt']); ?>">  
                	                          <?php endif; ?>
			                            	</a>
        			          </div>
        			   <?php }
        			    ?>
                </div>
		</section>
<?php
get_footer();





