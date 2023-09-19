<?php 
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_hide_comments = "";
if (isset($bridge_qode_options['blog_hide_comments'])) {
	$bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
}

$bridge_qode_blog_hide_author = "";
if (isset($bridge_qode_options['blog_hide_author'])) {
    $bridge_qode_blog_hide_author = $bridge_qode_options['blog_hide_author'];
}

$bridge_qode_like = "on";
if (isset($bridge_qode_options['qode_like'])) {
	$bridge_qode_like = $bridge_qode_options['qode_like'];
}
?>
<?php
$bridge_qode_post_format = get_post_format();
?>
<?php
	switch ($bridge_qode_post_format) {
		case "video":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_image">
					<?php $bridge_qode_video_type = get_post_meta(get_the_ID(), "video_format_choose", true);?>
					<?php if($bridge_qode_video_type == "youtube") { ?>
						<iframe name="fitvid-<?php the_ID(); ?>" src="//www.youtube.com/embed/<?php echo get_post_meta(get_the_ID(), "video_format_link", true);  ?>?wmode=transparent" wmode="Opaque" width="805" height="403" allowfullscreen></iframe>
					<?php } elseif ($bridge_qode_video_type == "vimeo"){ ?>
						<iframe name="fitvid-<?php the_ID(); ?>" src="//player.vimeo.com/video/<?php echo get_post_meta(get_the_ID(), "video_format_link", true);  ?>?title=0&amp;byline=0&amp;portrait=0" width="800" height="450" allowfullscreen></iframe>
					<?php } elseif ($bridge_qode_video_type == "self"){ ?> 
						<div class="video"> 
						<div class="mobile-video-image" style="background-image: url(<?php echo get_post_meta(get_the_ID(), "video_format_image", true);  ?>);"></div> 
						<div class="video-wrap"  > 
							<video class="video" poster="<?php echo get_post_meta(get_the_ID(), "video_format_image", true);  ?>" preload="auto"> 
								<?php if(get_post_meta(get_the_ID(), "video_format_webm", true) != "") { ?> <source type="video/webm" src="<?php echo get_post_meta(get_the_ID(), "video_format_webm", true);  ?>"> <?php } ?> 
								<?php if(get_post_meta(get_the_ID(), "video_format_mp4", true) != "") { ?> <source type="video/mp4" src="<?php echo get_post_meta(get_the_ID(), "video_format_mp4", true);  ?>"> <?php } ?> 
								<?php if(get_post_meta(get_the_ID(), "video_format_ogv", true) != "") { ?> <source type="video/ogg" src="<?php echo get_post_meta(get_the_ID(), "video_format_ogv", true);  ?>"> <?php } ?> 
								<object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf"> 
									<param name="movie" value="<?php echo get_template_directory_uri(); ?>/js/flashmediaelement.swf" /> 
									<param name="flashvars" value="controls=true&file=<?php echo get_post_meta(get_the_ID(), "video_format_mp4", true);  ?>" /> 
									<img itemprop="image" src="<?php echo get_post_meta(get_the_ID(), "video_format_image", true);  ?>" width="1920" height="800" title="<?php echo esc_html__('No video playback capabilities', 'bridge'); ?>" alt="<?php echo esc_html__('Video thumb', 'bridge'); ?>" />
								</object> 
							</video>   
						</div></div> 
					<?php } ?>
				</div>
				<div class="post_text">
					<div class="post_text_inner">
						<div class="post_text_holder">
							<div class="blog_column1">
								<div itemprop="dateCreated" class="date entry_date updated">
									<span class="date_day"><?php the_time('d'); ?></span>
									<span class="date_month"><?php the_time('M'); ?></span>
									<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
								</div>
							</div>
							<div class="blog_column2">
								<h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php bridge_qode_excerpt(); ?>
								<div class="post_info">
									<div class="post_info_left">
										<span class="blog_time"><?php the_time('H:i'); ?> / </span>
										<?php the_category(' / '); ?>
										<?php if($bridge_qode_blog_hide_author == "no") { ?>
											<span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
											</span>
										<?php } ?>
									</div>
									<div class="post_info_right">
										<?php if( $bridge_qode_like == "on" ) { ?>
											<div class="blog_like">
												<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
											</div>
										<?php } ?>
										<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
											<?php echo do_shortcode('[social_share]'); ?>	
										<?php } ?>
										<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
											<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
											<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
<?php
		break;
		case "audio":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_image">
					<audio class="blog_audio" src="<?php echo get_post_meta(get_the_ID(), "audio_link", true) ?>" controls="controls">
						<?php esc_html_e("Your browser don't support audio player","bridge"); ?>
					</audio>
				</div>
				<div class="post_text">
					<div class="post_text_inner">
						<div class="post_text_holder">
							<div class="blog_column1">
								<div itemprop="dateCreated" class="date entry_date updated">
									<span class="date_day"><?php the_time('d'); ?></span>
									<span class="date_month"><?php the_time('M'); ?></span>
									<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
								</div>
							</div>
							<div class="blog_column2">
								<h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php bridge_qode_excerpt(); ?>
								<div class="post_info">
									<div class="post_info_left">
										<span class="blog_time"><?php the_time('H:i'); ?> / </span>
										<?php the_category(' / '); ?>
										<?php if($bridge_qode_blog_hide_author == "no") { ?>
											<span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
											</span>
										<?php } ?>
									</div>
									<div class="post_info_right">
										<?php if( $bridge_qode_like == "on" ) { ?>
											<div class="blog_like">
												<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
											</div>
										<?php } ?>
										<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
											<?php echo do_shortcode('[social_share]'); ?>	
										<?php } ?>
										<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
											<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
											<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

<?php
		break;
		case "gallery":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post_content_holder">
				<div class="post_image">
					<div class="flexslider">
						<ul class="slides">
							<?php
								$bridge_qode_post_content = get_the_content();
								preg_match('/\[gallery.*ids=.(.*).\]/', $bridge_qode_post_content, $bridge_qode_ids);
								$bridge_qode_array_id = explode(",", $bridge_qode_ids[1]);
								
								foreach($bridge_qode_array_id as $bridge_qode_img_id){ ?>
									<li><a itemprop="url" href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $bridge_qode_img_id, 'full' ); ?></a></li>
								<?php } ?>
						</ul>
					</div>
				</div>
				<div class="post_text">
					<div class="post_text_inner">
						<div class="post_text_holder">
							<div class="blog_column1">
								<div itemprop="dateCreated" class="date entry_date updated">
									<span class="date_day"><?php the_time('d'); ?></span>
									<span class="date_month"><?php the_time('M'); ?></span>
									<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
								</div>
							</div>
							<div class="blog_column2">
								<h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php bridge_qode_excerpt(); ?>
								<div class="post_info">
									<div class="post_info_left">
										<span class="blog_time"><?php the_time('H:i'); ?> / </span>
										<?php the_category(' / '); ?>
										<?php if($bridge_qode_blog_hide_author == "no") { ?>
											<span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
											</span>
										<?php } ?>
									</div>
									<div class="post_info_right">
										<?php if( $bridge_qode_like == "on" ) { ?>
											<div class="blog_like">
												<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
											</div>
										<?php } ?>
										<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
											<?php echo do_shortcode('[social_share]'); ?>	
										<?php } ?>
										<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
											<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
											<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
<?php
		break;
		case "link":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<div class="post_text">
					<div class="post_text_inner">
						<div class="post_text_holder">
							<div class="blog_column1">
								<span class="link_mark icon_link_alt"></span>
							</div>
							<div class="blog_column2">
								<div class="post_title entry_title">
									<p><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
								</div>
								<div class="post_info">
									<div class="post_info_left">
										<span itemprop="dateCreated" class="blog_time entry_date updated"><?php the_time('d F Y'); ?> / <meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
										<?php the_category(' / '); ?>
										<?php if($bridge_qode_blog_hide_author == "no") { ?>
											<span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
											</span>
										<?php } ?>
									</div>
									<div class="post_info_right">
										<?php if( $bridge_qode_like == "on" ) { ?>
											<div class="blog_like">
												<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
											</div>
										<?php } ?>
										<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
											<?php echo do_shortcode('[social_share]'); ?>	
										<?php } ?>
										<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
											<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
											<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
<?php
		break;
		case "quote":
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post_content_holder">
					<div class="post_text">
						<div class="post_text_inner">
							<div class="post_text_holder">
								<div class="blog_column1">
									<span class="qoute_mark icon_quotations"></span>
								</div>
								<div class="blog_column2">
									<div class="post_title entry_title">
										<p><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_post_meta(get_the_ID(), "quote_format", true); ?></a></p>
										<span class="quote_author"><?php the_title(); ?></span>
									</div>
									<div class="post_info">
										<div class="post_info_left">
											<span itemprop="dateCreated" class="blog_time entry_date updated"><?php the_time('d F Y'); ?> / <meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/></span>
											<?php the_category(' / '); ?>
											<?php if($bridge_qode_blog_hide_author == "no") { ?>
												<span class="post_author">
													<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
												</span>
											<?php } ?>
										</div>
										<div class="post_info_right">
											<?php if( $bridge_qode_like == "on" ) { ?>
												<div class="blog_like">
													<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
												</div>
											<?php } ?>
											<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
												<?php echo do_shortcode('[social_share]'); ?>	
											<?php } ?>
											<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
												<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
												<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
												</a>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post_image">
						<a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?>
						</a>
					</div>
				<?php } ?>
				<div class="post_text">
					<div class="post_text_inner">
						<div class="post_text_holder">
							<div class="blog_column1">
								<div itemprop="dateCreated" class="date entry_date updated">
									<span class="date_day"><?php the_time('d'); ?></span>
									<span class="date_month"><?php the_time('M'); ?></span>
									<meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(bridge_qode_get_page_id()); ?>"/>
								</div>
							</div>
							<div class="blog_column2">
								<h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<?php bridge_qode_excerpt(); ?>
								<div class="post_info">
									<div class="post_info_left">
										<span class="blog_time"><?php the_time('H:i'); ?> / </span>
										<?php the_category(' / '); ?>
										<?php if($bridge_qode_blog_hide_author == "no") { ?>
											<span class="post_author">
												<a itemprop="author" class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> / <?php the_author_meta('display_name'); ?></a>
											</span>
										<?php } ?>
									</div>
									<div class="post_info_right">
										<?php if( $bridge_qode_like == "on" ) { ?>
											<div class="blog_like">
												<?php if( function_exists('bridge_core_like') ) bridge_core_like(); ?>
											</div>
										<?php } ?>
										<?php if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") { ?>
											<?php echo do_shortcode('[social_share]'); ?>	
										<?php } ?>
										<?php if($bridge_qode_blog_hide_comments != "yes"){ ?>
											<a itemprop="url" class="post_comments" href="<?php comments_link(); ?>" target="_self">
											<?php comments_number('0 ' . esc_html__('Comments','bridge'), '1 '.esc_html__('Comment','bridge'), '% '.esc_html__('Comments','bridge') ); ?>
											</a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
<?php
}
?>		

