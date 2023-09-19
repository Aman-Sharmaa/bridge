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
$bridge_qode_thumb_height = 800;
$bridge_qode_thumb_width = 645;
$bridge_qode_post_size_class = 'default';


$bridge_qode_params = array(
    'blog_enable_social_share' => $bridge_qode_blog_enable_social_share,
    'blog_hide_author' => $bridge_qode_blog_hide_author,
    'thumb_width' => $bridge_qode_thumb_width,
    'thumb_height' => $bridge_qode_thumb_height
);

?>
<?php
	switch ($bridge_qode_post_format) {
		case "gallery":
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
                <div class="post_content_holder">
					<div class="post_overlay"></div>
                    <?php bridge_qode_get_template_part('templates/blog-parts/gallery/gallery','',$bridge_qode_params); ?>
                    <?php bridge_qode_get_template_part('templates/blog-parts/gallery/text','',$bridge_qode_params); ?>
                </div>
			</article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class($bridge_qode_post_size_class); ?>>
            <div class="post_content_holder">
				<div class="post_overlay"></div>
                <?php bridge_qode_get_template_part('templates/blog-parts/gallery/image','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/gallery/text','',$bridge_qode_params); ?>
            </div>
		</article>
<?php
}
?>		

