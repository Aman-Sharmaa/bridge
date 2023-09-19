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
$bridge_qode_thumb_size_temp = get_post_meta(get_the_ID(),"qode_post_style_masonry_gallery",true);
$bridge_qode_post_size_class = 'default';
switch ($bridge_qode_thumb_size_temp) {
	case 'large-height':
		$bridge_qode_thumb_size = 'portfolio_masonry_tall';
        $bridge_qode_post_size_class = $bridge_qode_thumb_size_temp;
		break;
	case 'large-width':
		$bridge_qode_thumb_size = 'portfolio_masonry_wide';
        $bridge_qode_post_size_class = $bridge_qode_thumb_size_temp;
		break;
	case 'large-width-height':
		$bridge_qode_thumb_size = 'portfolio_masonry_large';
        $bridge_qode_post_size_class = $bridge_qode_thumb_size_temp;
		break;
	default:
		$bridge_qode_thumb_size = 'portfolio_masonry_regular';
		break;
}

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
                <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/link','',$bridge_qode_params); ?>
			</article>
<?php
		break;
		case "gallery":
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
                <div class="post_content_holder">
                    <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/gallery','',$bridge_qode_params); ?>
                    <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/text','',$bridge_qode_params); ?>
                </div>
			</article>
<?php
		break;
		case "quote":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
            <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/quote','',$bridge_qode_params); ?>
		</article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
            <div class="post_content_holder">
                <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/image','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/masonry-gallery/text','',$bridge_qode_params); ?>
            </div>
		</article>
<?php
}
?>		

