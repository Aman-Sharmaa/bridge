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

$bridge_qode_enable_social_share = 'no';
if(isset($bridge_qode_options['enable_social_share'])  && $bridge_qode_options['enable_social_share'] == "yes") {
    $bridge_qode_enable_social_share = 'yes';
}

$bridge_qode_post_layout = bridge_qode_check_post_layout(get_the_ID());
$bridge_qode_gallery_post_layout = bridge_qode_check_gallery_post_layout(get_the_ID());

$bridge_qode_params = array(
    'blog_hide_comments' => $bridge_qode_blog_hide_comments,
    'blog_hide_author' => $bridge_qode_blog_hide_author,
    'qode_like' => $bridge_qode_like,
    'enable_social_share' => $bridge_qode_enable_social_share,
    'gallery_post_layout' => $bridge_qode_gallery_post_layout
);

$bridge_qode_post_format = get_post_format();
?>

<?php
switch ($bridge_qode_post_format) {
    case "video": ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <?php get_template_part('templates/blog-parts/compound/title'); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/video','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/text','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/meta','',$bridge_qode_params); ?>
            </div>
        </article>
    <?php
    break;
    case "gallery": ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <?php get_template_part('templates/blog-parts/compound/title'); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/gallery','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/text','',$bridge_qode_params); ?>
                <?php bridge_qode_get_template_part('templates/blog-parts/compound/meta','',$bridge_qode_params); ?>
            </div>
        </article>
    <?php
    break;
    default:
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <?php get_template_part('templates/blog-parts/compound/title'); ?>
                <?php switch ($bridge_qode_post_layout){
                    case 'split': ?>
                        <div class="two_columns_50_50">
                            <div class="column1">
                                <div class="column_inner">
                                    <?php bridge_qode_get_template_part('templates/blog-parts/compound/image', '', array('image_size' => 'portfolio_masonry_tall')); ?>
                                </div>
                            </div>
                            <div class="column2">
                                <div class="column_inner">
                                    <?php bridge_qode_get_template_part('templates/blog-parts/compound/text','',$bridge_qode_params); ?>
                                </div>
                            </div>
                        </div>
                        <?php bridge_qode_get_template_part('templates/blog-parts/compound/meta','',$bridge_qode_params); ?>
                        <?php break;
                    default:
                        bridge_qode_get_template_part('templates/blog-parts/compound/image', '', array('image_size' => 'full'));
                        bridge_qode_get_template_part('templates/blog-parts/compound/text','',$bridge_qode_params);
                        bridge_qode_get_template_part('templates/blog-parts/compound/meta','',$bridge_qode_params);
                        break;
                } ?>
            </div>
        </article>
    <?php
    break;
}
?>

