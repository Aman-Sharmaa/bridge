<?php

$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_blog_hide_comments = "";
if (isset($bridge_qode_options['blog_hide_comments'])) {
	$bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
}

$bridge_qode_params = array(
    'blog_hide_comments' => $bridge_qode_blog_hide_comments
);

$bridge_qode_post_format = get_post_format();
?>
<?php
	switch ($bridge_qode_post_format) {
		case "video":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/video'); ?>
            <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/text','',$bridge_qode_params); ?>
		</article>

<?php
		break;
		case "audio":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/audio'); ?>
            <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/text','',$bridge_qode_params); ?>
		</article>
<?php
		break;
		case "link":
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/link'); ?>
			</article>
<?php
		break;
        case "quote":
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/quote'); ?>
            </article>
            <?php
        break;
		case "gallery":
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/gallery'); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/text','',$bridge_qode_params); ?>
			</article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php bridge_qode_get_template_part('templates/blog-parts/pinterest/image'); ?>
            <?php bridge_qode_get_template_part('templates/blog-parts/pinterest/text','',$bridge_qode_params); ?>
		</article>
<?php
}
?>		

