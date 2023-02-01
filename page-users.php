<?php
/*
 * Template name: Users
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
    top: 42px;
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
    #members-list.bp-list.grid li {
    margin-bottom: 20px;
    width: 176px;}
    .grid>li .list-wrap .list-title {
    padding: 0;
    text-align: center;
    margin-top: 15px;
}
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
                <div class="app-page">
                <img class="mobile" src="https://efcnetwork.com.au/wp-content/uploads/2021/04/cropped-EFC-NetworkLogo.png" width="40">
                </div>
			   <div class="row">
                      <h1 class="col" style="margin: 8px 10px;display: flex;color: black;align-items: center;flex-direction: column;"><?php the_title(); ?></h1>
                </div>
               
			   <div class="row">
			      <div class="screen-content members-directory-content">       
                    <div id="members-dir-list" class="members dir-list" data-bp-list="members" style="">
                     	<ul id="members-list" class="item-list members-list bp-list grid">
                	        
			        <?php 
                        // Add Lisa's user id,  14, in an array.
                        $include_list = array(27,28,29,30,31,32,34,41,42,44,46,47,70,83,97,114,116,119,120,121,138,144,154,162,167,169,170,178,181,182,184,188,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,209,210,213,214,211);
                         
                        $args = array(
                            'role' => 'Subscriber',
                            'include' => $include_list
                        );
                         
                        // Custom query.
                        $my_user_query = new WP_User_Query( $args );
                         
                        // Get query results.
                        $users = $my_user_query->get_results();
                         
                        // Check for editors
                        if ( ! empty( $users ) ) {
                         
                                // Loop over editors.
                                foreach ( $users as $user ) {
                                    
                                    $avatar = get_avatar_url( $user->ID );
                                    
                                    $user_url = bbp_get_user_profile_url( $user->ID );
                                    
                                    // Get each editor's data.
                                    
                                    $user_info = get_userdata( $user->ID );  ?>
                                    
                                    
                                   <li class="item-entry odd is-online is-current-user" data-bp-item-id="<?php echo $user_info->user_ID; ?>" data-bp-item-component="members"> 
                				<div class="list-wrap follow-active primary-button">
                					<div class="list-wrap-inner">
                						<div class="user-box">
                							<a href="<?php echo $user_url; ?>">
                							
                								<img src="<?php echo esc_url( $avatar ); ?>" class="avatar user-24-avatar avatar-300 photo" width="150" height="150" alt="Profile photo of <?php echo $user_info->display_name ?>">
                							</a>
                						</div>
                						<div class="item">
                							<div class="item-block">
                								<h2 class="list-title member-name">
                									<a href="<?php echo $user_url; ?>"><?php echo $user_info->display_name; ?></a>
                								</h2>
                							</div>
                						</div>
                			     	</div>
                				</div>
                             	</li>		 
                                     
                           <?php }
                         
                        } else {
                         
                            // Display "no editors found" message.
                            echo __( 'No editors found!', 'tutsplus' );
                         
                        }
                         
                        ?>

                		       
    			       </ul>
    			   </div>
			   </div>
			          
			            
                </div>
		</section>
<?php
get_footer();


