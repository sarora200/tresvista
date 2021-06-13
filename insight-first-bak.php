<?php
ini_set('display_errors',1);
/**
 * The main template file
 * Template Name: Insights
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
$currentid = get_the_ID();
$serviceArr= array('RIS','DIG','CFO','BDS' );
$sectorArr= array('Energy','Materials','Industrials','Consumer Discretionary','Consumer Staples','Healthcare','Financials','Information Technology','Telecommunication Services','Utilities' );
$companyTypeArr= array('Automobiles & Components','Banks','Capital','Goods','Commercial Services & Supplies','Consumer Durables & Apparel','Consumer Service','Diversified Financials','Energy','Food & Staples Retailing','Food, Beverages and Tobacco','Health Care Equipment & Services','Household & Personal Products','Insurance','Materials','Media','Pharmaceuticals','Real Estate', 'Retailing','Software and Services','Telecommunication Services','Transportation','Utilities' );
//$geographyArr= array('Geography','Africa','Asia','Central America','Europe','North America','Oceania','South America','Caribbean');
echo $_REQUEST['select_services'];
?>

	<div class="home-banner-section">
		<div class="vis-container pos-relative">
			<div class="home-banner-slider">
				<?php if( have_rows('banner_slider') ): ?>
				<div class="owl-carousel owl-theme">
					<?php while( have_rows('banner_slider') ): the_row(); 
				        $bannerImage = get_sub_field('banner_image');
				        ?>
				        
    
					<div class="item">
						<div class="banner-caption">
							<div class="banner-right">
								<div id="imgHight_full">
									<img src="<?php echo esc_url($bannerImage['url']); ?>" alt="<?php echo esc_attr($bannerImage['alt']); ?>" title="" class="width100 slidupbanner" />
								</div>
							</div>
							<div class="banner-left">
								<h1 class="slide-caption__title"><?php the_sub_field('banner_heading'); ?>
									
								</h1>
								<p class="slide-caption__sub animate-typing" data-type-speed="20" data-cursor-speed="700" data-type-delay="2000"><?php the_sub_field('banner_subheading'); ?></p>
								<!-- <div class="banner-cta-sing slide-caption__cta"> -->
								<div class="contact_query rm_mgn">
									<?php while( have_rows('banner_cta') ): the_row(); 
				        				$ctaLink = get_sub_field('cta_link');
				        				$ctaText = get_sub_field('cta_text');
				        			?>
									<!-- <div class="cta-inner">
										<a href="<?php echo $ctaLink;?>" data-aos-duration="1000"><span><?php echo $ctaText;?></span></a>
									</div> -->
									
										<a href="<?php echo $ctaLink;?>"><?php echo $ctaText;?></a>
									
									<?php endwhile; ?>
									</div>
								<!-- </div> -->
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
			<div class="downarrow">
				<a href="#home-about-section">
					<div class="scrolldown">
						<div class="chevron"></div>
						<div class="chevron"></div>
						<div class="chevron"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="blank-spacer"></div>
	</div>


<?php include('common-mob-about-contact.php');?>

	<section class="flt_wrp">
		<div class="fltr_shadow">
			<div class="vis-container">
				<div class="filter_section"> <small data-aos="fade-up" data-aos-duration="800">Webinar, Podcasts & Articles</small>
					<h4 data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Our thought-pieces cover a range of topics & deliver unique perspectives to today’s investors.</h4>
					<div class="flt_drp_sec">
						<p>The filters auto apply as soon as you select them.</p>
						<div class="flt_drp_itm">
							<form method="get" action="" id="insight-filter-form">
							<select id="select_services" name="select_services" class="filter-type">
								<option value="">Service</option>
								<?php foreach($serviceArr as $value) { 
									echo $_REQUEST['select_services'];
									?>
									<option <?php echo isset($_REQUEST['select_services']) && $_REQUEST['select_services'] == $value?'selected':''?>><?php echo $value;?></option>
								<?php } ?>
								
							</select>
							<select id="sector" name="sector" class="filter-type">
								<option value="">Sector</option>
								<?php foreach($sectorArr as $value) { 
									echo $_REQUEST['sector'];
									?>
									<option <?php echo isset($_REQUEST['sector']) && $_REQUEST['sector'] == $value?'selected':''?>><?php echo $value;?></option>
								<?php } ?>
							</select>
							<select id="company_type" name="company_type" class="filter-type">
								<option value="">Company type</option>
								<?php foreach($companyTypeArr as $value) { 
									echo $_REQUEST['company_type'];
									?>
									<option <?php echo isset($_REQUEST['company_type']) && $_REQUEST['company_type'] == $value?'selected':''?>><?php echo $value;?></option>
								<?php } ?>
							</select>
							<!--select id="geography" name="geography" class="filter-type">
								<option value="">Geography</option>
								<?php foreach($geographyArr as $value) { 
									echo $_REQUEST['geography'];
									?>
									<option <?php echo isset($_REQUEST['geography']) && $_REQUEST['geography'] == $value?'selected':''?>><?php echo $value;?></option>
								<?php } ?>
							</select-->
							<input type="hidden" name="search" value="1">
							<button type="submit" style="display: none;" id="insight-filter-submit"></button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 

		if(isset($_REQUEST['search']) && $_REQUEST['search']==1) {
			$metaQuery = array();
			if(isset($_REQUEST['select_services']) && !empty($_REQUEST['select_services'])){
				$metaQuery[] = array(
	                'key' => 'select_services',
	                'value' => $_REQUEST['select_services'],
	                'compare' => 'LIKE'
		        );
			}
			if(isset($_REQUEST['sector']) && !empty($_REQUEST['sector'])){
				$metaQuery[] = array(
	                'key' => 'sector',
	                'value' => $_REQUEST['sector'],
	                'compare' => 'LIKE'
		        );
			}
			if(isset($_REQUEST['company_type']) && !empty($_REQUEST['company_type'])){
				$metaQuery[] = array(
	                'key' => 'company_type',
	                'value' => $_REQUEST['company_type'],
	                'compare' => 'LIKE'
		        );
			}
			// if(isset($_REQUEST['geography']) && !empty($_REQUEST['geography'])){
			// 	$metaQuery[] = array(
	        //         'key' => 'geography',
	        //         'value' => $_REQUEST['geography'],
	        //         'compare' => 'LIKE'
		    //     );
			// }
			print_r($metaQuery);
			$iargs = array(
				'post_type'=> 'post',
				'orderby'    => 'ID',
				'post_status' => 'publish',
				'order'    => 'DESC',
				'posts_per_page' => -1,
				'category_name' => 'insights',
		        'meta_query' => $metaQuery
			);

		} else {
			$iargs = array(
				'post_type'=> 'post',
				'orderby'    => 'ID',
				'post_status' => 'publish',
				'order'    => 'DESC',
				'posts_per_page' => -1,
				'category_name' => 'insights'
			);

		}
		
		$iresult = new WP_Query( $iargs );
		?>

		<div class="fltr_result">
			<!-- <div class="vis-container">
				<img src="images/filter-image.jpg" style="width: 100%;padding: 60px 0 0 0;" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
			</div> -->
			<div class="vis-container">
				<div class="work-sample-second-row">
					<?php
						if ( $iresult-> have_posts() ) : ?>
						<?php while ( $iresult->have_posts() ) : $iresult->the_post(); ?>
						<div class="work-sample-card-body">
							<div class="insight-card">
								<div class="work-sample-card-image">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									<div class="overlay"></div>
								</div>
								<div class="work-sample-text">
									<small><?php echo get_field('service_and_sector',get_the_ID()); ?></small>
									<p><?php the_title(); ?></p>
									<h5><?php the_content(); ?></h5>
								</div>
								<div class="download-btn">
									<?php if( get_field('link_type') == 'File URL' ){ ?>
								<a href="<?php echo the_field('url');?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/services/bsd/dwnld-btn.png" alt="">
								</a>
								<?php } elseif( get_field('link_type') == 'External URL' ){ ?>
									<a href="<?php echo the_field('url');?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/insight/watch-btn.png" alt="">
								</a>
								<?php } elseif( get_field('link_type') == 'Youtube URL' ){ ?>
									<a href="<?php echo the_field('url');?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/insight/vido-play-btn.png" alt="">
								</a>
								<?php } else{?>
									<a href="<?php echo the_permalink();?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/insight/vido-play-btn.png" alt="">
								</a>
								<?php } ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php else:?>
							<p class="text-center">Result not found</p>
						<?php endif; wp_reset_postdata(); ?>
				</div>
			</div>
			<!-- <div class="load_more">
				<div class="yellow_bg_button">
					<button class="show_more_btn">Show More</button>
				</div>
			</div> -->
		</div>
	</section>







	<section class="insight_spotlight_section">   <!--explore_blogs_section-->
			<div class="vis-container">
				<div class="spotlight_title">
					<h4><?php echo the_field('spontlignt_heading');?></h4>
					<p><?php echo the_field('spotlight_subheading');?></p>
				</div>
			</div>
		</section>
		<?php 
		$image = get_field('spotlight_banner');
		if( !empty($image) ): ?>
		<div class="home-what-we-do bg_img_rplc" id="spotlight_desc" style="background-image: url(<?php echo $image['url']; ?>);">
			<div class="vis-container">
				<div class="row align-items-center home-what-we-do-min-height">
					<div class="col-lg-6 col-md-8">
						<div class="home-what-we-do-inner">
							<div class="section-heading text-white aos-init" data-aos="fade-up" data-aos-delay="500"><?php echo the_field('spotlight_caption');?></div>
						</div>
						<?php 
						$spotlightcaptionlink = get_field('spotlight_caption_link');
						if( !empty($spotlightcaptionlink) ): ?>
						<div class="learn-more-btn mt-5">
							<a href="<?php echo $spotlightcaptionlink; ?>"><span>Read Here</span></a>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 col-md-8"></div>
				</div>
			</div>
		</div>
		<?php endif; ?>




		<section class="csr-blog blue_bg">
			<div class="vis-container">
				<div class="row">
					<div class="engagement_slider_inner">
						<div class="owl-carousel owl-theme global_slider_sec">
							<?php
							$args = array( 'category' => 25, 'post_type' =>  'post' ); 
							$postslist = get_posts( $args );    
							foreach ($postslist as $post) :  setup_postdata($post); 
							?>  
							
							<div class="work-sample-card-body">
								<div class="insight-card">
									<div class="work-sample-card-image">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										<div class="overlay"></div>
									</div>
									<div class="work-sample-text">
										<small><?php echo get_field('service_and_sector',get_the_ID()); ?></small>
										<p><?php the_title(); ?></p>
										<h5><?php the_content(); ?></h5>
									</div>
									<div class="download-btn">
										<?php if( get_field('link_type') == 'File URL' ){ ?>
									<a href="<?php echo the_field('url');?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/services/bsd/dwnld-btn.png" alt="">
									</a>
									<?php } elseif( get_field('link_type') == 'External URL' ){ ?>
										<a href="<?php echo the_field('url');?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/insight/watch-btn.png" alt="">
									</a>
									<?php } elseif( get_field('link_type') == 'Youtube URL' ){ ?>
										<a href="<?php echo the_field('url');?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/insight/vido-play-btn.png" alt="">
									</a>
									<?php } else{?>
										<a href="<?php echo the_permalink();?>">
										<img src="<?php echo get_template_directory_uri(); ?>/images/insight/watch-btn.png" alt="">
									</a>
									<?php } ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?> 
							
						</div>
					</div>
				</div>
			</div>
		</section>  



		
		<section class="csr-blog">
			<div class="vis-container">
				<div class="row">
					<div class="engagement_slider_inner">
						<h4 data-aos="fade-up" data-aos-delay="200"
							data-aos-duration="800">Webinars</h4>
						<div class="owl-carousel owl-theme global_slider_sec">
							
							<?php
						$args = array( 'category' => 24, 'post_type' =>  'post' ); 
						$postslist = get_posts( $args );    
						foreach ($postslist as $post) :  setup_postdata($post); 
						?>  
						
						<div class="item global_slider_item">
							<?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
							<p class="global_slider_item_desc"><?php echo the_title();?></p>
							<div class="read_more">
								<a href="<?php echo the_permalink();?>">Read More</a>
							</div>
						</div>
						<?php endforeach; ?> 
						
						</div>
					</div>
				</div>
			</div>
		</section>


	

	<section class="solution_webniar">
		<div class="vis-container">
			<?php if( have_rows('webinar_content') ): ?>
				<?php while( have_rows('webinar_content') ): the_row(); 
				        ?>
			<div class="solution_webniar_inner">
				<div class="center_txt">
					<h4><?php the_sub_field('left_main_text'); ?></h4>
				</div>
				<div class="post_wrp">
					<h4><?php the_sub_field('section_heading'); ?></h4>
					<div class="post_list">
						<?php while( have_rows('webinar_list') ): the_row(); 
							$webinarImage = get_sub_field('webinar_image');
				        ?>
						<a href="<?php the_sub_field('webinar_link'); ?>" class="post_item_link">
							<div class="post_item">
								<div class="post_thumb">
									<img src="<?php echo esc_url($webinarImage['url']); ?>" />
								</div>
								<div class="post_content"> <small>Webinar, <?php the_sub_field('webinar_date'); ?></small>
									<h5><?php the_sub_field('webinar_title'); ?></h5>
								</div>
							</div>
						</a>
						<?php endwhile; ?>
					</div>
					<!-- <button class="blue_bg_btn">Explore all virtual events & webinars</button> -->
					<div class="banner-cta-sing slide-caption__cta">
						<div class="cta-inner">
							<a href="<?php the_sub_field('cta_text'); ?>" data-aos-duration="1000"><span><?php the_sub_field('cta_text'); ?></span></a>
							</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif;?>
		</div>
	</section>

<!--end webinaar-->

<?php 
		$sportlightinvestorbanner = get_field('sportlight_investor_banner');
		if( !empty($sportlightinvestorbanner) ): ?>
<section class="msg-from-mgmt bg_image_change" id="tres_investor" style="background-image: url(<?php echo $sportlightinvestorbanner['url']; ?>);">
            <div class="vis-container">
                <div class="row align-items-top">

					<div class="col-lg-7 col-md-1"></div>
                    <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="msg-right">
                            <div class="mgmt-msg-heading">
                                <?php echo the_field('sportlight_investor_heading');?>
                            </div>
                            <p> <?php echo the_field('sportlight_investor_subheading');?></p>
							<?php 
							$sportlightinvestorlink = get_field('sportlight_investor_link');
							if( !empty($sportlightinvestorlink) ): ?>
							<div class="learn-more-btn">
								<a href="<?php echo $sportlightinvestorlink; ?>"><span>Read Here</span></a>
							</div>
							<?php endif; ?>
                        </div>
                    </div>
                    
                </div>
        </div></section>
		<?php endif; ?>

		
		<section class="csr-blog">
			<div class="vis-container">
				<div class="row">
					<div class="engagement_slider_inner">
					<div class="engag_heading">
							<h4>TresVista Talk</h4>
							<p>Lorem Ipsum is simply dummy text</p>
						</div>
						<div class="owl-carousel owl-theme global_slider_sec">
							
						<?php
						$args = array( 'category' => 23, 'post_type' =>  'post' ); 
						$postslist = get_posts( $args );    
						foreach ($postslist as $post) :  setup_postdata($post); 
						?>  
						<div class="item global_slider_item">
						<div class="work-sample-card-body">
							<div class="insight-card">
								<div class="work-sample-card-image">
									<?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
									<div class="overlay"></div>
								</div>
								<div class="work-sample-text">
									<!-- <small><?php echo get_field('service_and_sector',get_the_ID()); ?></small> -->
									<p><?php the_title(); ?></p>
									<h5><?php the_content(); ?></h5>
								</div>
								<div class="download-btn">
									<a href="<?php echo the_field('url');?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/images/insight/vido-play-btn.png" alt="">
									</a>
								</div>
							</div>
						</div>
						</div>
						<?php endforeach; 
						wp_reset_query();
						?> 
						</div>
					</div>
				</div>
			</div>
		</section>
	
	
		


<?php include('comma-form.php');?>

	

<section class="forward_links_wrp">
	<div class="vis-container">
		<div class="forward_links">
			<?php if( have_rows('forward_links_item') ): ?>
			<?php while( have_rows('forward_links_item') ): the_row();
			?>
			<div class="forward_links_item">
				<img src="<?php echo get_template_directory_uri(); ?>/new-image/forward-link-left.png" />
				<a href="<?php echo site_url();?>/<?php the_sub_field('backward_link'); ?>" target="_blank">
					<small>Back</small>
					<?php the_sub_field('backward_link_text'); ?>
				</a>
			</div>
			<div class="forward_links_item">
				<img src="<?php echo get_template_directory_uri(); ?>/new-image/forward-link-left.png" />
				<a href="<?php echo site_url();?>/<?php the_sub_field('forward_links'); ?>" target="_blank">
					<small>Next</small>
					<?php the_sub_field('forward_links_text'); ?>
				</a>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>



<?php get_footer(); ?>
<script type="text/javascript">
	$(document).on('change','.filter-type', function(){
		$('#insight-filter-submit').trigger('click');
	});
</script>