<?php
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_id = get_the_ID();

$bridge_qode_portfolio_qode_like = "on";
if (isset($bridge_qode_options['portfolio_qode_like'])) {
	$bridge_qode_portfolio_qode_like = $bridge_qode_options['portfolio_qode_like'];
}

//is lightbox turned on for image single project?
$bridge_qode_lightbox_single_project = "no";
if (isset($bridge_qode_options['lightbox_single_project'])){
	$bridge_qode_lightbox_single_project = $bridge_qode_options['lightbox_single_project'];
}

//is lightbox turned on for video single project?
$bridge_qode_lightbox_video_single_project  = 'no';
if (isset($bridge_qode_options['lightbox_video_single_project'])) {
	$bridge_qode_lightbox_video_single_project = $bridge_qode_options['lightbox_video_single_project'];
}

if(get_post_meta($bridge_qode_id, "qode_page_background_color", true) != ""){
	$bridge_qode_background_color = get_post_meta($bridge_qode_id, "qode_page_background_color", true);
}else{
	$bridge_qode_background_color = "";
}

$bridge_qode_portfolio_text_follow = "portfolio_single_follow";
if (isset($bridge_qode_options['portfolio_text_follow'])) {
    $bridge_qode_portfolio_text_follow = $bridge_qode_options['portfolio_text_follow'];
}

$bridge_qode_porftolio_template = 1;
$bridge_qode_portfolio_class = 'portfolio_template_1';
if(get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true) != ""){
    $bridge_qode_porftolio_template = get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);
    $bridge_qode_portfolio_class = 'portfolio_template_'.get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);
}elseif(isset($bridge_qode_options['portfolio_style'])){
    $bridge_qode_porftolio_template = $bridge_qode_options['portfolio_style'];
    $bridge_qode_porftolio_class = 'portfolio_template_'.$bridge_qode_options['portfolio_style'];
}

$porftolio_single_template = get_post_meta(get_the_ID(), "qode_choose-portfolio-single-view", true);

$bridge_qode_columns_number = "v4";
if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) != ""){
	if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 2){
		$bridge_qode_columns_number = "v2";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 3){
		$bridge_qode_columns_number = "v3";
	} else if(get_post_meta(get_the_ID(), "qode_choose-number-of-portfolio-columns", true) == 4){
		$bridge_qode_columns_number = "v4";
	}
}else{
	if(isset($bridge_qode_options['portfolio_columns_number'])){
		if($bridge_qode_options['portfolio_columns_number'] == 2){
			$bridge_qode_columns_number = "v2";
		} else if($bridge_qode_options['portfolio_columns_number'] == 3) {
			$bridge_qode_columns_number = "v3";
		} else if($bridge_qode_options['portfolio_columns_number'] == 4) {
			$bridge_qode_columns_number = "v4";
		}
	}
}

$bridge_qode_disable_portfolio_single_title_label = true;
if(isset($bridge_qode_options['disable_portfolio_single_title_label']) && $bridge_qode_options['disable_portfolio_single_title_label'] === 'yes'){
    $bridge_qode_disable_portfolio_single_title_label = false;
}
?>
<?php if(post_password_required()) {
	echo get_the_password_form();
} else { ?>

	<?php if($bridge_qode_porftolio_template != "7"){
       $bridge_qode_protocol = is_ssl() ? "https:" : "http:";
	?>
	<div class="portfolio_single <?php echo esc_attr($bridge_qode_portfolio_class); ?>">
	<?php switch ($bridge_qode_porftolio_template) {
		case 1: ?>
			<div class="two_columns_66_33 clearfix portfolio_container">
				<div class="column1">
					<div class="column_inner">
						<div class="portfolio_images">
							<?php

							$bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
							if ($bridge_qode_portfolio_m_images){
								$bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
								foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
									$bridge_qode_title = get_the_title($bridge_qode_gimg_id);
									$bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
									$bridge_qode_image_src = wp_get_attachment_image_src( $bridge_qode_gimg_id, 'full' );
									if (is_array($bridge_qode_image_src)) $bridge_qode_image_src = $bridge_qode_image_src[0];
									?>
									<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
										<a itemprop="image" class="lightbox_single_portfolio" title="<?php echo esc_attr( $bridge_qode_title ); ?>" href="<?php echo esc_url( $bridge_qode_image_src ); ?>" data-rel="prettyPhoto[single_pretty_photo]">
											<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_html( $bridge_qode_alt ); ?>" />
										</a>
									<?php } else { ?>
										<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_html( $bridge_qode_alt ); ?>" />
								<?php }
								}
							}
							$bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
							if ($bridge_qode_portfolio_images){
								usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
								foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
									?>

									<?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>
										<?php
										$bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
										$bridge_qode_title = get_the_title($bridge_qode_id);
										$bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
										?>
										<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
											<a itemprop="image" class="lightbox_single_portfolio" title="<?php echo esc_attr( $bridge_qode_title ); ?>" href="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" data-rel="prettyPhoto[single_pretty_photo]">
												<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
											</a>
										<?php } else { ?>
											<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
										<?php } ?>

									<?php }else{ ?>

										<?php
										$bridge_qode_portfoliovideotype = "";
										if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
										switch ($bridge_qode_portfoliovideotype){
											case "youtube": ?>
												<?php if($bridge_qode_lightbox_video_single_project == "yes"){ ?>
													<?php
														$bridge_qode_vidID = $bridge_qode_portfolio_image['portfoliovideoid'];
													    $bridge_qode_url = "http://gdata.youtube.com/feeds/api/videos/".$bridge_qode_vidID."?alt=json";
													    $bridge_qode_xml = json_decode(bridge_qode_generate_portfolio_xml($bridge_qode_url), true);

													    if(is_array($bridge_qode_xml['entry']['title'])){
													    	$bridge_qode_video_title = array_shift($bridge_qode_xml['entry']['title']);
													    } else {
													    	$bridge_qode_video_title = "";
													    }
													    
													    $bridge_qode_thumbnail = "http://img.youtube.com/vi/".$bridge_qode_vidID."/maxresdefault.jpg";
													?>
													<a itemprop="image" class="lightbox_single_portfolio video_in_lightbox" title="<?php echo esc_attr( $bridge_qode_video_title ); ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//www.youtube.com/watch?feature=player_embedded&v=<?php echo esc_attr( $bridge_qode_vidID ); ?>" rel="prettyPhoto[single_pretty_photo]">
														<i class="fa fa-play"></i>
														<img itemprop="image" width="100%" src="<?php echo esc_url( $bridge_qode_thumbnail ); ?>"></img>
													</a>
												<?php } else { ?>
													<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
												<?php } ?>
												<?php	break;
											case "vimeo": ?>
												<?php if($bridge_qode_lightbox_video_single_project == "yes"){ ?>
													<?php
														$bridge_qode_vidID = $bridge_qode_portfolio_image['portfoliovideoid'];
														$bridge_qode_url = "http://vimeo.com/api/v2/video/".$bridge_qode_vidID.".php";
													    $bridge_qode_xml = unserialize(bridge_qode_generate_portfolio_xml( $bridge_qode_url ));

												   		$bridge_qode_video_title = $bridge_qode_xml[0]['title'];
													    $bridge_qode_thumbnail = $bridge_qode_xml[0]['thumbnail_large'];
													?>
													<a itemprop="image" class="lightbox_single_portfolio video_in_lightbox" title="<?php echo esc_attr( $bridge_qode_video_title ); ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//vimeo.com/<?php echo esc_attr( $bridge_qode_vidID ); ?>" rel="prettyPhoto[single_pretty_photo]">
														<i class="fa fa-play"></i>
														<img itemprop="image" width="100%" src="<?php echo esc_url( $bridge_qode_thumbnail ); ?>"></img>
													</a>
												<?php } else { ?>
													<iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
												<?php } ?>
												<?php break;
											case "self": ?>
												<div class="video">
													<div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
													<div class="video-wrap"  >
														<video class="video" poster="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
															<?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
															<?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
															<?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
															<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
																<param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
																<param name="flashvars" value="controls=true&file=<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
																<img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
															</object>
														</video>
													</div></div>
												<?php break;
										} ?>

									<?php } ?>
								<?php
								}
							}
							?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="portfolio_detail <?php echo esc_attr( $bridge_qode_portfolio_text_follow ); ?> clearfix">
							<?php
							$bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
							if ($bridge_qode_portfolios){
								usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
								foreach($bridge_qode_portfolios as $bridge_qode_portfolio){
									?>
									<div class="info portfolio_custom_field">
										<?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
											<h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
										<?php endif; ?>
										<p>
											<?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
												<a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
													<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
												</a>
											<?php else:?>
												<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
											<?php endif; ?>
										</p>
									</div>
								<?php
								}
							}
							?>
							<?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
								<div class="info portfolio_custom_date">
									<h6><?php esc_html_e('Date','bridge'); ?></h6>
									<p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
								</div>
							<?php endif; ?>
							<?php
							$bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
							$bridge_qode_counter = 0;
							$bridge_qode_all = count($bridge_qode_terms);
							if($bridge_qode_all > 0){
								?>
								<div class="info portfolio_categories">
									<h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

													foreach($bridge_qode_terms as $bridge_qode_term) {
														$bridge_qode_counter++;
														if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
														else{ $bridge_qode_after = ''; }
														echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
													}
													?>
													</span>
								</div>
							<?php } ?>
							<?php
							$bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

							if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
								foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
									$bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
								}

								?>
								<div class="info portfolio_tags">
									<h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                                        <span class="category">
                                                            <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                                        </span>
								</div>

							<?php } ?>
							<?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
								<h6><?php echo esc_html_e('About This Project','bridge'); ?></h6>
							<?php } ?>
							<div class="info portfolio_content">
								<?php the_content(); ?>
							</div>
							<div class="portfolio_social_holder">
								<?php echo do_shortcode('[social_share]'); ?>
								<?php if($bridge_qode_portfolio_qode_like == "on") { ?>
									<span class="dots"><i class="fa fa-square"></i></span>
									<div class="portfolio_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php get_template_part('templates/portfolio','navigation'); ?>

			<?php	break;
		case 2: ?>
			<div class="two_columns_66_33 clearfix portfolio_container">
				<div class="column1">
					<div class="column_inner">
						<div class="flexslider">
							<ul class="slides">
								<?php
								$bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
								if ($bridge_qode_portfolio_m_images){
									$bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
									foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
										$bridge_qode_title = get_the_title($bridge_qode_gimg_id);
										$bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
									$bridge_qode_image_src = wp_get_attachment_image_src( $bridge_qode_gimg_id, 'full' );
									if (is_array($bridge_qode_image_src)) $bridge_qode_image_src = $bridge_qode_image_src[0];
										?>
											<li class="slide">
												<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
											</li>
									<?php
									}
								}
								$bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
								if ($bridge_qode_portfolio_images){
									usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
									foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
										?>

										<?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>
											<?php
                                            $bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
											$bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
											?>
											<li class="slide">
												<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
											</li>
										<?php }else{ ?>

											<?php
											$bridge_qode_portfoliovideotype = "";
											if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
											switch ($bridge_qode_portfoliovideotype){
												case "youtube": ?>
													<li class="slide">
														<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
													</li>
													<?php	break;
												case "vimeo": ?>
													<li class="slide">
														<iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
													</li>
													<?php break;
												case "self": ?>
													<li class="slide">
														<div class="video">
															<div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
															<div class="video-wrap"  >
																<video class="video" poster="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
																	<?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
																	<?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
																	<?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
																	<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
																		<param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
																		<param name="flashvars" value="controls=true&file=<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
																		<img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
																	</object>
																</video>
															</div></div>
													</li>
													<?php break;

											} ?>

										<?php } ?>

									<?php
									}
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="portfolio_detail">
							<?php
							$bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
							if ($bridge_qode_portfolios){
								usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
								foreach($bridge_qode_portfolios as $bridge_qode_portfolio){

									?>
									<div class="info portfolio_custom_field">
										<?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
											<h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
										<?php endif; ?>
										<p>
											<?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
												<a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
													<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
												</a>
											<?php else:?>
												<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
											<?php endif; ?>
										</p>
									</div>
								<?php
								}
							}
							?>
							<?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
								<div class="info portfolio_custom_date">
									<h6><?php esc_html_e('Date','bridge'); ?></h6>
									<p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
								</div>
							<?php endif; ?>
							<?php
							$bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
							$bridge_qode_counter = 0;
							$bridge_qode_all = count($bridge_qode_terms);
							if($bridge_qode_all > 0){
								?>
								<div class="info portfolio_categories">
									<h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

													foreach($bridge_qode_terms as $bridge_qode_term) {
														$bridge_qode_counter++;
														if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
														else{ $bridge_qode_after = ''; }
														echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
													}
													?>
													</span>
								</div>
							<?php } ?>
							<?php
							$bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

							if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
								foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
									$bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
								}

								?>
								<div class="info portfolio_tags">
									<h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                                        <span class="category">
                                                            <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                                        </span>
								</div>

							<?php } ?>
							<div class="info portfolio_content">
								<?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
									<h6><?php echo esc_html_e('About This Project','bridge'); ?></h6>
								<?php } ?>
								<?php the_content(); ?>
							</div>
							<div class="portfolio_social_holder">
								<?php echo do_shortcode('[social_share]'); ?>
								<?php if($bridge_qode_portfolio_qode_like == "on") { ?>
									<span class="dots"><i class="fa fa-square"></i></span>
									<div class="portfolio_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php get_template_part('templates/portfolio','navigation'); ?>

			<?php	break;
		case 3: ?>
			<div class="flexslider">
				<ul class="slides">
					<?php
					$bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
					if ($bridge_qode_portfolio_m_images){
						$bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
						foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
							$bridge_qode_title = get_the_title($bridge_qode_gimg_id);
							$bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
									$bridge_qode_image_src = wp_get_attachment_image_src( $bridge_qode_gimg_id, 'full' );
									if (is_array($bridge_qode_image_src)) $bridge_qode_image_src = $bridge_qode_image_src[0];
							?>
								<li class="slide">
									<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
								</li>
						<?php
						}
					}
					$bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
					if ($bridge_qode_portfolio_images){
						foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
							usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
							?>

							<?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>
								<?php
                                $bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
								$bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
								?>
								<li class="slide">
									<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
								</li>
							<?php }else{ ?>

								<?php
								$bridge_qode_portfoliovideotype = "";
								if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
								switch ($bridge_qode_portfoliovideotype){
									case "youtube": ?>
										<li class="slide">
											<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
										</li>
										<?php	break;
									case "vimeo": ?>
										<li class="slide">
											<iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
										</li>
										<?php break;
									case "self": ?>
                                        <li class="slide">
                                            <div class="video">
                                                <div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
                                                <div class="video-wrap"  >
                                                    <video class="video" poster="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
                                                        <object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
                                                            <param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
                                                            <param name="flashvars" value="controls=true&file=<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
                                                            <img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
                                                        </object>
                                                    </video>
                                                </div></div>
                                        </li>
										<?php break;
								} ?>

							<?php } ?>

						<?php
						}
					}
					?>
				</ul>
			</div>
			<div class="two_columns_75_25 clearfix portfolio_container">
				<div class="column1">
					<div class="column_inner">
						<div class="portfolio_single_text_holder">
							<?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
								<h3><?php echo esc_html_e('About This Project','bridge'); ?></h3>
							<?php } ?>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="portfolio_detail">
							<?php
							$bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
							if ($bridge_qode_portfolios){
								usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
								foreach($bridge_qode_portfolios as $bridge_qode_portfolio){
									?>
									<div class="info portfolio_custom_field">
										<?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
											<h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
										<?php endif; ?>
										<p>
											<?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
												<a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
													<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
												</a>
											<?php else:?>
												<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
											<?php endif; ?>
										</p>
									</div>
								<?php
								}
							}
							?>
							<?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
								<div class="info portfolio_custom_date">
									<h6><?php esc_html_e('Date','bridge'); ?></h6>
									<p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
								</div>
							<?php endif; ?>
							<?php
							$bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
							$bridge_qode_counter = 0;
							$bridge_qode_all = count($bridge_qode_terms);
							if($bridge_qode_all > 0){
								?>
								<div class="info portfolio_categories">
									<h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

													foreach($bridge_qode_terms as $bridge_qode_term) {
														$bridge_qode_counter++;
														if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
														else{ $bridge_qode_after = ''; }
														echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
													}
													?>
													</span>
								</div>
							<?php } ?>
							<?php
							$bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

							if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
								foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
									$bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
								}

								?>
								<div class="info portfolio_tags">
									<h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                                        <span class="category">
                                                            <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                                        </span>
								</div>

							<?php } ?>
							<div class="portfolio_social_holder">
								<?php echo do_shortcode('[social_share]'); ?>
								<?php if($bridge_qode_portfolio_qode_like == "on") { ?>
									<span class="dots"><i class="fa fa-square"></i></span>
									<div class="portfolio_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php get_template_part('templates/portfolio','navigation'); ?>

			<?php	break;
		case 4: ?>
			<?php the_content(); ?>

            <?php get_template_part('templates/portfolio','navigation'); ?>
			<?php	break;
		case 5: ?>
			<div class="portfolio_images">
				<?php
				$bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
				if ($bridge_qode_portfolio_m_images){
					$bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
					foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
						$bridge_qode_title = get_the_title($bridge_qode_gimg_id);
						$bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
									$bridge_qode_image_src = wp_get_attachment_image_src( $bridge_qode_gimg_id, 'full' );
									if (is_array($bridge_qode_image_src)) $bridge_qode_image_src = $bridge_qode_image_src[0];
						?>
						<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
							<a itemprop="image" class="lightbox_single_portfolio" title="<?php echo esc_attr( $bridge_qode_title ); ?>" href="<?php echo esc_url( $bridge_qode_image_src ); ?>" data-rel="prettyPhoto[single_pretty_photo]">
								<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
							</a>
						<?php } else { ?>
							<img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
					<?php }
					}
				}
				$bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
				if ($bridge_qode_portfolio_images){
					usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
					foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
						?>

						<?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>

							<?php
                            $bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
							$bridge_qode_title = get_the_title($bridge_qode_id);
							$bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
							?>

							<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
								<a itemprop="image" class="lightbox_single_portfolio" title="<?php echo esc_attr( $bridge_qode_title ); ?>" href="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" data-rel="prettyPhoto[single_pretty_photo]">
									<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
								</a>
							<?php } else { ?>
								<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
							<?php } ?>

						<?php }else{ ?>

							<?php
							$bridge_qode_portfoliovideotype = "";
							if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
							switch ($bridge_qode_portfoliovideotype){
								case "youtube": ?>
									<?php if($bridge_qode_lightbox_video_single_project == "yes"){ ?>
										<?php
											$bridge_qode_vidID = $bridge_qode_portfolio_image['portfoliovideoid'];  
										    $bridge_qode_url = "http://gdata.youtube.com/feeds/api/videos/".$bridge_qode_vidID."?alt=json";
										    $bridge_qode_xml = json_decode(bridge_qode_generate_portfolio_xml( $bridge_qode_url ), true);

										    if(is_array($bridge_qode_xml['entry']['title'])){
										    	$bridge_qode_video_title = array_shift($bridge_qode_xml['entry']['title']);
										    } else {
										    	$bridge_qode_video_title = "";
										    }
										    
										    $bridge_qode_thumbnail = "http://img.youtube.com/vi/".$bridge_qode_vidID."/maxresdefault.jpg";
										?>
										<a itemprop="image" class="lightbox_single_portfolio video_in_lightbox" title="<?php echo esc_attr( $bridge_qode_video_title ); ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//www.youtube.com/watch?feature=player_embedded&v=<?php echo esc_attr( $bridge_qode_vidID ); ?>" rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
											<img itemprop="image" width="100%" src="<?php echo esc_url( $bridge_qode_thumbnail ); ?>"></img>
										</a>
									<?php } else { ?>
										<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
									<?php } ?>
									<?php	break;
								case "vimeo": ?>
									<?php if($bridge_qode_lightbox_video_single_project == "yes"){ ?>
										<?php
											$bridge_qode_vidID = $bridge_qode_portfolio_image['portfoliovideoid'];
											$bridge_qode_url = "http://vimeo.com/api/v2/video/".$bridge_qode_vidID.".php";
										    $bridge_qode_xml = unserialize(bridge_qode_generate_portfolio_xml( $bridge_qode_url ));

									   		$bridge_qode_video_title = $bridge_qode_xml[0]['title'];
										    $bridge_qode_thumbnail = $bridge_qode_xml[0]['thumbnail_large'];
										?>
										<a itemprop="image" class="lightbox_single_portfolio video_in_lightbox" title="<?php echo esc_attr( $bridge_qode_video_title ); ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//vimeo.com/<?php echo esc_attr( $bridge_qode_vidID ); ?>" rel="prettyPhoto[single_pretty_photo]">
											<i class="fa fa-play"></i>
											<img itemprop="image" width="100%" src="<?php echo esc_url( $bridge_qode_thumbnail ); ?>"></img>
										</a>
									<?php } else { ?>
										<iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
									<?php } ?>
									<?php break;
								case "self": ?>
									<div class="video">
										<div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
										<div class="video-wrap"  >
											<video class="video" poster="<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
												<?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
												<?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
												<?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
												<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
													<param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
													<param name="flashvars" value="controls=true&file=<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
													<img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
												</object>
											</video>
										</div></div>
									<?php break;
							} ?>

						<?php } ?>

					<?php
					}
				}
				?>
			</div>
			<div class="two_columns_75_25 clearfix portfolio_container">
				<div class="column1">
					<div class="column_inner">
						<div class="portfolio_single_text_holder">
							<?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
								<h3><?php echo esc_html_e('About This Project','bridge'); ?></h3>
							<?php } ?>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="portfolio_detail <?php echo esc_attr( $bridge_qode_portfolio_text_follow ); ?>">
							<?php
							$bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
							if ($bridge_qode_portfolios){
								usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
								foreach($bridge_qode_portfolios as $bridge_qode_portfolio){
									?>
									<div class="info portfolio_custom_field">
										<?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
											<h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
										<?php endif; ?>
										<p>
											<?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
												<a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
													<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
												</a>
											<?php else:?>
												<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
											<?php endif; ?>
										</p>
									</div>
								<?php
								}
							}
							?>
							<?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
								<div class="info portfolio_custom_date">
									<h6><?php esc_html_e('Date','bridge'); ?></h6>
									<p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
								</div>
							<?php endif; ?>
							<?php
							$bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
							$bridge_qode_counter = 0;
							$bridge_qode_all = count($bridge_qode_terms);
							if($bridge_qode_all > 0){
								?>
								<div class="info portfolio_categories">
									<h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

													foreach($bridge_qode_terms as $bridge_qode_term) {
														$bridge_qode_counter++;
														if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
														else{ $bridge_qode_after = ''; }
														echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
													}
													?>
													</span>
								</div>
							<?php } ?>
							<?php
							$bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

							if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
								foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
									$bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
								}

								?>
								<div class="info portfolio_tags">
									<h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                                        <span class="category">
                                                            <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                                        </span>
								</div>

							<?php } ?>
							<div class="portfolio_social_holder">
								<?php echo do_shortcode('[social_share]'); ?>
								<?php if($bridge_qode_portfolio_qode_like == "on") { ?>
									<span class="dots"><i class="fa fa-square"></i></span>
									<div class="portfolio_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php get_template_part('templates/portfolio','navigation'); ?>
			<?php	break;
		case 6: ?>
			<div class="portfolio_gallery">
				<?php
				$bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
                if ($bridge_qode_portfolio_m_images){
                    $bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
                    foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
                        $bridge_qode_title = get_the_title($bridge_qode_gimg_id);
                        $bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
						$bridge_qode_portfolio_gallery_thumb_size = get_post_meta($bridge_qode_id, 'qode_portfolio_gallery_image_orientation', true);
						$bridge_qode_portfolio_gallery_thumb_size = (!empty($bridge_qode_portfolio_gallery_thumb_size)) ? get_post_meta($bridge_qode_id, 'qode_portfolio_gallery_image_orientation', true) : 'full';

						$bridge_qode_original_img = wp_get_attachment_image_src($bridge_qode_gimg_id, 'full');
						if(is_array($bridge_qode_original_img)) {
							$bridge_qode_original_img = $bridge_qode_original_img[0];
						}

                        $bridge_qode_image_src = wp_get_attachment_image_src($bridge_qode_gimg_id, $bridge_qode_portfolio_gallery_thumb_size);
                        if (is_array($bridge_qode_image_src)) {
							$bridge_qode_image_src = $bridge_qode_image_src[0];
						}

                        ?>
                        <?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
                            <a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" title="<?php echo esc_attr( $bridge_qode_title );  ?>" href="<?php echo esc_url( $bridge_qode_original_img ); ?>" data-rel="prettyPhoto[single_pretty_photo]">
                                <span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_title );  ?></h6></span></span>
                                <img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
                            </a>
                        <?php } else { ?>
                            <a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" href="#">
                                <span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_title );  ?></h6></span></span>
                                <img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
                            </a>
                        <?php }
                    }
                }
				$bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
				if ($bridge_qode_portfolio_images){
					usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
					foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
						?>

						<?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>
							<?php
                            $bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
							$bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
							?>
							<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
								<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" title="<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?>" href="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" data-rel="prettyPhoto[single_pretty_photo]">
									<span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?></h6></span></span>
									<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
								</a>
							<?php } else { ?>
								<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" href="#">
									<span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?></h6></span></span>
									<img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
								</a>
							<?php } ?>

						<?php }else{ ?>

							<?php
							$bridge_qode_portfoliovideotype = "";
							if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
							switch ($bridge_qode_portfoliovideotype){
								case "youtube": ?>
									<?php if($bridge_qode_lightbox_single_project == "yes"){ ?>
										<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" title="<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle']);  ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//www.youtube.com/watch?feature=player_embedded&v=<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] ); ?>" rel="prettyPhoto[single_pretty_photo]">
											<span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?></h6></span></span>
											<img itemprop="image" width="100%" src="//img.youtube.com/vi/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>/maxresdefault.jpg" />
										</a>
									<?php } else { ?>
										<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" href="#">
											<iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
										</a>
									<?php } ?>
									<?php	break;
								case "vimeo": ?>
									<?php if($bridge_qode_lightbox_single_project == "yes"){

										$bridge_qode_videoid = $bridge_qode_portfolio_image['portfoliovideoid'];
										$bridge_qode_url = "http://vimeo.com/api/v2/video/".$bridge_qode_videoid.".php";
										$bridge_qode_xml = unserialize(bridge_qode_generate_portfolio_xml( $bridge_qode_url ));
										$bridge_qode_xml_pic = $bridge_qode_xml[0]['thumbnail_large']; ?>
										<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" title="<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?>" href="<?php echo esc_attr( $bridge_qode_protocol );?>//vimeo.com/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] ); ?>" rel="prettyPhoto[single_pretty_photo]">
											<span class="gallery_text_holder"><span class="gallery_text_inner"><h6><?php echo esc_attr( $bridge_qode_portfolio_image['portfoliotitle'] );  ?></h6></span></span>
											<img itemprop="image" width="100%" src="<?php echo esc_url( $bridge_qode_xml_pic );  ?>" />
										</a>
									<?php } else { ?>
										<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" href="">
											<iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
										</a>
									<?php } ?>

									<?php break;
								case "self": ?>

									<a itemprop="image" class="lightbox_single_portfolio <?php echo esc_attr( $bridge_qode_columns_number ); ?>" onclick='return false;' href="#">
										<div class="video">
											<div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
											<div class="video-wrap"  >
												<video class="video" poster="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
													<?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
													<?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
													<?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
													<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
														<param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
														<param name="flashvars" value="controls=true&file=<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
														<img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
													</object>
												</video>
											</div>
										</div>
									</a>

									<?php break;
							} ?>

						<?php } ?>

					<?php
					}
				}
				?>
			</div>
			<div class="two_columns_75_25 clearfix portfolio_container">
				<div class="column1">
					<div class="column_inner">
						<div class="portfolio_single_text_holder">
							<?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
								<h3><?php echo esc_html_e('About This Project','bridge'); ?></h3>
							<?php } ?>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="column2">
					<div class="column_inner">
						<div class="portfolio_detail">
							<?php
							$bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
							if ($bridge_qode_portfolios){
								usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
								foreach($bridge_qode_portfolios as $bridge_qode_portfolio){
									?>
									<div class="info portfolio_custom_field">
										<?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
											<h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
										<?php endif; ?>
										<p>
											<?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
												<a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
													<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
												</a>
											<?php else:?>
												<?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
											<?php endif; ?>
										</p>
									</div>
								<?php
								}
							}
							?>
							<?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
								<div class="info portfolio_custom_date">
									<h6><?php esc_html_e('Date','bridge'); ?></h6>
									<p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
								</div>
							<?php endif; ?>
							<?php
							$bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
							$bridge_qode_counter = 0;
							$bridge_qode_all = count($bridge_qode_terms);
							if($bridge_qode_all > 0){
								?>
								<div class="info portfolio_categories">
									<h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

													foreach($bridge_qode_terms as $bridge_qode_term) {
														$bridge_qode_counter++;
														if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
														else{ $bridge_qode_after = ''; }
														echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
													}
													?>
													</span>
								</div>
							<?php } ?>
							<?php
							$bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

							if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
								foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
									$bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
								}

								?>
								<div class="info portfolio_tags">
									<h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                                        <span class="category">
                                                            <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                                        </span>
								</div>

							<?php } ?>
							<div class="portfolio_social_holder">
								<?php echo do_shortcode('[social_share]'); ?>
								<?php if($bridge_qode_portfolio_qode_like == "on") { ?>
									<span class="dots"><i class="fa fa-square"></i></span>
									<div class="portfolio_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php get_template_part('templates/portfolio','navigation'); ?>
			<?php
        break;
        case 8: ?>
            <div class="flexslider">
                <ul class="slides">
                    <?php
                    $bridge_qode_portfolio_m_images = get_post_meta(get_the_ID(), "qode_portfolio-image-gallery", true);
                    if ($bridge_qode_portfolio_m_images){
                        $bridge_qode_portfolio_image_gallery_array=explode(',',$bridge_qode_portfolio_m_images);
                        foreach($bridge_qode_portfolio_image_gallery_array as $bridge_qode_gimg_id){
                            $bridge_qode_title = get_the_title($bridge_qode_gimg_id);
                            $bridge_qode_alt = get_post_meta($bridge_qode_gimg_id, '_wp_attachment_image_alt', true);
                            $bridge_qode_image_src = wp_get_attachment_image_src( $bridge_qode_gimg_id, 'full' );
                            if (is_array($bridge_qode_image_src)) $bridge_qode_image_src = $bridge_qode_image_src[0];
                            ?>
                            <li class="slide">
                                <img itemprop="image" src="<?php echo esc_url( $bridge_qode_image_src ); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
                            </li>
                        <?php
                        }
                    }
                    $bridge_qode_portfolio_images = get_post_meta(get_the_ID(), "qode_portfolio_images", true);
                    if ($bridge_qode_portfolio_images){
                        foreach($bridge_qode_portfolio_images as $bridge_qode_portfolio_image){
                            usort($bridge_qode_portfolio_images, "bridge_qode_compare_portfolio_images");
                            ?>

                            <?php if($bridge_qode_portfolio_image['portfolioimg'] != ""){ ?>
                                <?php
                                $bridge_qode_id = bridge_qode_get_attachment_id_from_url( $bridge_qode_portfolio_image['portfolioimg'] );
                                $bridge_qode_alt = get_post_meta($bridge_qode_id, '_wp_attachment_image_alt', true);
                                ?>
                                <li class="slide">
                                    <img itemprop="image" src="<?php echo stripslashes($bridge_qode_portfolio_image['portfolioimg']); ?>" alt="<?php echo esc_attr( $bridge_qode_alt ); ?>" />
                                </li>
                            <?php }else{ ?>

                                <?php
                                $bridge_qode_portfoliovideotype = "";
                                if (isset($bridge_qode_portfolio_image['portfoliovideotype'])) $bridge_qode_portfoliovideotype = $bridge_qode_portfolio_image['portfoliovideotype'];
                                switch ($bridge_qode_portfoliovideotype){
                                    case "youtube": ?>
                                        <li class="slide">
                                            <iframe width="100%" src="//www.youtube.com/embed/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
                                        </li>
                                        <?php	break;
                                    case "vimeo": ?>
                                        <li class="slide">
                                            <iframe src="//player.vimeo.com/video/<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideoid'] );  ?>?title=0&amp;byline=0&amp;portrait=0" width="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                        </li>
                                        <?php break;
                                    case "self": ?>
                                        <li class="slide">
                                            <div class="video">
                                                <div class="mobile-video-image" style="background-image: url(<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>);"></div>
                                                <div class="video-wrap"  >
                                                    <video class="video" poster="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" preload="auto">
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideowebm'])) { ?> <source type="video/webm" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideowebm'] ); ?>"> <?php } ?>
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideomp4'])) { ?> <source type="video/mp4" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>"> <?php } ?>
                                                        <?php if(!empty($bridge_qode_portfolio_image['portfoliovideoogv'])) { ?> <source type="video/ogg" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoogv'] ); ?>"> <?php } ?>
                                                        <object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf">
                                                            <param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" />
                                                            <param name="flashvars" value="controls=true&file=<?php echo esc_attr( $bridge_qode_portfolio_image['portfoliovideomp4'] ); ?>" />
                                                            <img itemprop="image" src="<?php echo esc_url( $bridge_qode_portfolio_image['portfoliovideoimage'] ); ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
                                                        </object>
                                                    </video>
                                                </div></div>
                                        </li>
                                        <?php break;
                                } ?>

                            <?php } ?>

                        <?php
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="icon_social_holder">
                <?php echo do_shortcode('[social_share show_share_icon="yes"]'); ?>
                <div class="qode_print">
                    <a href="#" onClick="window.print();return false;" class="qode_print_page">
                        <span class="icon-basic-printer qode_icon_printer"></span>
                        <span class="eltd-printer-title"><?php esc_html_e("Print page", "bridge") ?></span>
                    </a>
                </div>
                <?php if($bridge_qode_portfolio_qode_like == "on") { ?>
                    <div class="qode_like"><?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?></div>
                <?php } ?>
            </div>
            <div class="two_columns_75_25 clearfix portfolio_container">
                <div class="column1">
                    <div class="column_inner">
                        <div class="portfolio_single_text_holder">
                            <?php if($bridge_qode_disable_portfolio_single_title_label) { ?>
								<h3><?php echo esc_html_e('About This Project','bridge'); ?></h3>
							<?php } ?>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="column2">
                    <div class="column_inner">
                        <div class="portfolio_detail">
                            <?php
                            $bridge_qode_portfolios = get_post_meta(get_the_ID(), "qode_portfolios", true);
                            if ($bridge_qode_portfolios){
                                usort($bridge_qode_portfolios, "bridge_qode_compare_portfolio_options");
                                foreach($bridge_qode_portfolios as $bridge_qode_portfolio){
                                    ?>
                                    <div class="info portfolio_custom_field">
                                        <?php if($bridge_qode_portfolio['optionLabel'] != ""): ?>
                                            <h6><?php echo stripslashes($bridge_qode_portfolio['optionLabel']); ?></h6>
                                        <?php endif; ?>
                                        <p>
                                            <?php if($bridge_qode_portfolio['optionUrl'] != ""): ?>
                                                <a itemprop="url" href="<?php echo esc_url( $bridge_qode_portfolio['optionUrl'] ); ?>" target="_blank">
                                                    <?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
                                                </a>
                                            <?php else:?>
                                                <?php echo do_shortcode(stripslashes($bridge_qode_portfolio['optionValue'])); ?>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                            <?php if(get_post_meta(get_the_ID(), "qode_portfolio_date", true)) : ?>
                                <div class="info portfolio_custom_date">
                                    <h6><?php esc_html_e('Date','bridge'); ?></h6>
                                    <p class="entry_date updated"><?php echo get_post_meta(get_the_ID(), "qode_portfolio_date", true); ?><meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></p>
                                </div>
                            <?php endif; ?>
                            <?php
                            $bridge_qode_terms = wp_get_post_terms(get_the_ID(),'portfolio_category');
                            $bridge_qode_counter = 0;
                            $bridge_qode_all = count($bridge_qode_terms);
                            if($bridge_qode_all > 0){
                                ?>
                                <div class="info portfolio_categories">
                                    <h6><?php esc_html_e('Category ','bridge'); ?></h6>
													<span class="category">
													<?php

                                                    foreach($bridge_qode_terms as $bridge_qode_term) {
                                                        $bridge_qode_counter++;
                                                        if($bridge_qode_counter < $bridge_qode_all){ $bridge_qode_after = ', ';}
                                                        else{ $bridge_qode_after = ''; }
                                                        echo esc_attr( $bridge_qode_term->name.$bridge_qode_after );
                                                    }
                                                    ?>
													</span>
                                </div>
                            <?php } ?>
                            <?php
                            $bridge_qode_portfolio_tags = wp_get_post_terms(get_the_ID(),'portfolio_tag');

                            if(is_array($bridge_qode_portfolio_tags) && count($bridge_qode_portfolio_tags)) {
                                foreach ($bridge_qode_portfolio_tags as $bridge_qode_portfolio_tag) {
                                    $bridge_qode_portfolio_tags_array[] = $bridge_qode_portfolio_tag->name;
                                }

                                ?>
                                <div class="info portfolio_tags">
                                    <h6><?php esc_html_e('Tags', 'bridge') ?></h6>
                                    <span class="category">
                                        <?php echo implode(', ', $bridge_qode_portfolio_tags_array) ?>
                                    </span>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('templates/portfolio','navigation'); ?>
        <?php break;
	}
	?>
	</div>
			<?php } ?>
			<?php switch ($bridge_qode_porftolio_template) {
				case 7: ?>
					<div class="full_width">
						<div class="full_width_inner">
							<div class="portfolio_single">
								<?php the_content(); ?>

								<div class="container">
									<div class="container_inner clearfix">
                                        <?php get_template_part('templates/portfolio','navigation'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php break;
			} ?>
<?php } ?>
