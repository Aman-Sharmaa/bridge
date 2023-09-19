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

$params = array(
    'blog_hide_comments' => $bridge_qode_blog_hide_comments,
    'blog_hide_author' => $bridge_qode_blog_hide_author,
    'qode_like' => $bridge_qode_like,
    'enable_social_share' => $bridge_qode_enable_social_share,
    'gallery_post_layout' => $bridge_qode_gallery_post_layout
);

$bridge_qode_post_format = get_post_format();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 itemprop="name" class="entry_title"><a itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
</article>

