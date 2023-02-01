<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BuddyBoss_Theme
 */

get_header();
?>

<style>
.widget ul a {
    font-size: 12px;

}
    #media_gallery-900{
        margin-top: 30px;
    }
    
    .key-profile img {
   width: 85px;
    height: 85px;
    border-radius: 50%;
    object-fit: cover;
}
.key-profile td {
    padding: 0px 5px;
}

.key-profile td {
    border-bottom: none !important;
}

.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap:before {
    content: none !important;
}
.widget.widget_bp_profile_completion_widget .profile_completion_wrap .pc_detailed_progress_wrap .single_section_wrap {
    margin-left: 5px !important;
}
.Key-designation {
    font-size: 13px;
}
.partner-logo img {
    position: absolute;
    width: 158px;
    left: 0;
    top: -54px;
    right: 0;
    margin: 0 auto;
    filter: drop-shadow(0px 0px 5px #d3d3d3);
}
.key-profile td {
   border-bottom: none !important;
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
    line-height: 24px;
}
.key-profile {
    margin-top: 110px;
}
aside#bp_xprofile_profile_completion_widget-2 {
    position: relative;
}
i{
    color:red;
}

.flex-container aside {
    width: 33%;
    display: inline-block;
    margin: 0px 2px;
}
.flex-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin: 0px;
}
aside#media_gallery-9000 {
    padding: 0px !important;
}
.mobile{
    display:none !important;
}
.desktop{
    display:block !important;
}
.profile_completion_wrap {
    flex-direction: column;
}
.key-profile table {
    border: none;
}
@media only screen and (max-width:640px){
.mobile{
    display:block !important;
}
  .desktop{
    display:none !important;
}  
.partner-logo img {
    width: 121px;
    top: -54px;
}
.key-profile table {
    border: none;
}
}
</style>

<div id="content" class="site-content" style="padding-top: 45px;">
	<div class="container">
		<div class="bb-grid site-content-grid">
		    
		          
					<div id="secondary" class="widget-area sm-grid-1-1 sidebar-left" role="complementary">
			            	<div  style="">
				              	<aside id="bp_xprofile_profile_completion_widget-2" class="widget widget_bp_profile_completion_widget widget buddypress desktop">
				              	    
				              	    <div class="profile_completion_wrap">

                                      	<div class="partner-logo">
                                            	 <?php 
                                                $limage = get_field('add_logo');
                                                if( !empty( $limage ) ): ?>
                	                          <img src="<?php echo esc_url($limage['url']); ?>" alt="<?php echo esc_attr($limage['alt']); ?>">  
                	                          
                	                          
                	                          
                	                          <?php endif; ?>
                	                          
                	                        
                                	    </div>
                                	    <div class="key-profile">
                                	          <table>
                                	              <tr>
                                	                 
                                	                  <td> <a href="<?php the_field('key_connection_profile_link'); ?>">
                                	                      
                                	                          <?php 
                                                                $pimage = get_field('upload_key_profile_picture');
                                                                if( !empty( $pimage ) ): ?>
                                	                          <img src="<?php echo esc_url($pimage['url']); ?>" alt="<?php echo esc_attr($pimage['alt']); ?>">  
                                	                          <?php endif; ?>
                                	                      </a>
                                	                      
                                	                      </td>
                                	                  <td>
                                	                       <div class="elementor-image-box-title" style="font-weight: bolder;"> <a href="<?php the_field('key_connection_profile_link'); ?>"><?php the_field('key_connect_name'); ?>  </a></div>
                                	                       <div class="Key-designation"> <a href="<?php the_field('key_connection_profile_link'); ?>"><?php the_field('key_connect_designation'); ?>  </a></div>
                                	                  </td>
                                	                
                                	              </tr>
                                	          </table>
                                	    </div>
                                
                                       	<div class="pc_detailed_progress_wrap">
                                
                                		<ul class="pc_detailed_progress">
                                		        <?php  if ( is_user_logged_in() ) { ?>
                                                        <li class="single_section_wrap">
                                						<i class="_mi _before buddyboss bb-icon-phone" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a href="tel:<?php the_field('add_contact_number'); ?>" class="group_link"><?php the_field('add_contact_number'); ?></a>
                                					</li>
                                					<li class="single_section_wrap">
                                						<i class="_icon buddyboss bb-icon-at-sign" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a href="mailto:<?php the_field('add_email_address'); ?>" class="group_link"><?php the_field('add_email_address'); ?></a>
        
                                               <?     } else {
                                                       // your code for logged out user 
                                                    } ?>
                                		                                   					</li>
                                						<li class="single_section_wrap">
                                						<i class="_icon buddyboss bb-icon-globe" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a target="_blank" href="https://<?php the_field('website_link'); ?>" class="group_link"><?php the_field('website_link'); ?></a>
                                					</li>
                                                    <li class="single_section_wrap">
                                					   	<i class="_mi _before buddyboss bb-icon-droplet" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><?php the_field('add_address'); ?>
                                					</li>
                                		</ul>
                                
                                	</div>
                                
                                    </div>
                              </aside>
		                    </div>
			         </div>
		    
		    
		    
		    
		    
                    <div id="primary" class="content-area bs-bp-container">
                            	<aside id="bp_xprofile_profile_completion_widget-2" class="widget widget_bp_profile_completion_widget widget buddypress mobile">
				              	    
				              	    <div class="profile_completion_wrap">

                                      	<div class="partner-logo">
                                            	 <?php 
                                                $limage = get_field('add_logo');
                                                if( !empty( $limage ) ): ?>
                	                          <img src="<?php echo esc_url($limage['url']); ?>" alt="<?php echo esc_attr($limage['alt']); ?>">  
                	                          
                	                          
                	                          
                	                          <?php endif; ?>
                	                          
                	                        
                                	    </div>
                                	    <div class="key-profile">
                                	          <table>
                                	              <tr>
                                	                 
                                	                  <td> <a href="<?php the_field('key_connection_profile_link'); ?>">
                                	                      
                                	                          <?php 
                                                                $pimage = get_field('upload_key_profile_picture');
                                                                if( !empty( $pimage ) ): ?>
                                	                          <img src="<?php echo esc_url($pimage['url']); ?>" alt="<?php echo esc_attr($pimage['alt']); ?>">  
                                	                          <?php endif; ?>
                                	                      </a>
                                	                      
                                	                      </td>
                                	                  <td>
                                	                       <div class="elementor-image-box-title" style="font-weight: bolder;"> <a href="<?php the_field('key_connection_profile_link'); ?>"><?php the_field('key_connect_name'); ?>  </a></div>
                                	                       <div class="Key-designation"> <a href="<?php the_field('key_connection_profile_link'); ?>"><?php the_field('key_connect_designation'); ?>  </a></div>
                                	                  </td>
                                	                
                                	              </tr>
                                	          </table>
                                	    </div>
                                
                                       	<div class="pc_detailed_progress_wrap">
                                
                                		<ul class="pc_detailed_progress">
                                		        <?php  if ( is_user_logged_in() ) { ?>
                                                        <li class="single_section_wrap">
                                						<i class="_mi _before buddyboss bb-icon-phone" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a href="tel:<?php the_field('add_contact_number'); ?>" class="group_link"><?php the_field('add_contact_number'); ?></a>
                                					</li>
                                					<li class="single_section_wrap">
                                						<i class="_icon buddyboss bb-icon-at-sign" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a href="mailto:<?php the_field('add_email_address'); ?>" class="group_link"><?php the_field('add_email_address'); ?></a>
        
                                               <?     } else {
                                                       // your code for logged out user 
                                                    } ?>
                                		                                   					</li>
                                						<li class="single_section_wrap">
                                						<i class="_icon buddyboss bb-icon-globe" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><a target="_blank" href="https://<?php the_field('website_link'); ?>" class="group_link"><?php the_field('website_link'); ?></a>
                                					</li>
                                                    <li class="single_section_wrap">
                                					   	<i class="_mi _before buddyboss bb-icon-droplet" aria-hidden="true" style="margin: 0px 8px 0px 0px;"></i><?php the_field('add_address'); ?>
                                					</li>
                                		</ul>
                                
                                	</div>
                                
                                    </div>
                              </aside>
		                  
                    	<main id="main" class="site-main">
                    				
                            <article id="post-8" class="bp_activity type-bp_activity post-8 page type-page status-publish hentry user-has-not-earned">
                            	<div class="entry-content">
                            		<div id="buddypress" class="buddypress-wrap bp-dir-hori-nav">    
                            		        <div class="banner">
                                                  <?php 
                                                    $bimage = get_field('add_partner_banner');
                                                    if( !empty( $bimage ) ): ?>
                    	                          <img src="<?php echo esc_url($bimage['url']); ?>" alt="<?php echo esc_attr($bimage['alt']); ?>">  
                    	                          <?php else: ?> <img src="/wp-content/uploads/2021/04/EFCNetworkBanner2.jpg"> 
                    	                          <?php endif; ?>
                                            </div>
                                     </div>
                                </div>
                            </article>
    
                    	    <aside id="media_gallery-900" class="widget widget_media_gallery">
                    	        <div id="gallery-1" class="gallery galleryid-8 gallery-columns-3 gallery-size-large">
                    	           <?php the_field('add_description_'); ?>
                    		    </div>
                            </aside>
                            
                              <?php if( get_field('latest_promotions') ): ?> <h2 class="widget-title">LATEST PROMOTIONS BY <?php the_title(); ?></h2>   <?php endif; ?>
                            <div class="flex-container">
                                <?php if( get_field('latest_promotions') ): ?>
                                             
                                                <?php while( the_repeater_field('latest_promotions') ): ?>
                                                               <aside id="media_gallery-9000" class="widget widget_media_gallery" >    
                                                             <a href="<?php the_sub_field('promo_url'); ?>"><img src="<?php the_sub_field('promo_image'); ?>" /></a>     
                                                               </aside>
                                                <?php endwhile; ?>
                                             <?php endif; ?>
                            
                    	    
                           </div>
                    
                    	</main><!-- #main -->
                    </div><!-- #primary -->


			         
      </div><!-- .bb-grid -->
   </div><!-- .container -->
</div>


<?php
get_footer();