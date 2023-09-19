<?php
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_enable_social_share = "";
if(isset($bridge_qode_options['enable_social_share'])){
	$bridge_qode_blog_enable_social_share = $bridge_qode_options['enable_social_share'];
}

$bridge_qode_blog_hide_author = "";
if(isset($bridge_qode_options['blog_hide_author'])){
	$bridge_qode_blog_hide_author = $bridge_qode_options['blog_hide_author'];
}

$bridge_qode_post_format = get_post_format();
$bridge_qode_thumb_size = 'portfolio_masonry_regular';
$bridge_qode_post_size_class = 'default';

$bridge_qode_params = array(
	'blog_enable_social_share' => $bridge_qode_blog_enable_social_share,
	'blog_hide_author' => $bridge_qode_blog_hide_author,
	'thumb_size' => $bridge_qode_thumb_size
);

?>
<?php
switch ($bridge_qode_post_format) {
	case "link":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<?php bridge_qode_get_template_part('templates/blog-parts/chequered/link','',$bridge_qode_params); ?>
		</article>
		<?php
		break;
	case "gallery":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<div class="post_content_holder">
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/gallery','',$bridge_qode_params); ?>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/text','',$bridge_qode_params); ?>
			</div>
		</article>
		<?php
		break;
	case "quote":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<?php bridge_qode_get_template_part('templates/blog-parts/chequered/quote','',$bridge_qode_params); ?>
		</article>
		<?php
		break;
	case "video":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<div class="post_content_holder">
				<span class="video_icon arrow_triangle-right"></span>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/image','',$bridge_qode_params); ?>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/text','',$bridge_qode_params); ?>
			</div>
		</article>
		<?php
		break;
	case "audio":
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<div class="post_content_holder">
				<span class="video_icon icon_music"></span>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/image','',$bridge_qode_params); ?>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/text','',$bridge_qode_params); ?>
			</div>
		</article>
		<?php
		break;
	default:
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
			<div class="post_content_holder">
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/image','',$bridge_qode_params); ?>
				<?php bridge_qode_get_template_part('templates/blog-parts/chequered/text','',$bridge_qode_params); ?>
			</div>
		</article>
		<?php
}
?>		

