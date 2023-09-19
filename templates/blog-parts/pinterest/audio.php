<div class="post_image">
    <audio class="blog_audio" src="<?php echo get_post_meta(get_the_ID(), "audio_link", true) ?>" controls="controls">
        <?php esc_html_e("Your browser don't support audio player","bridge"); ?>
    </audio>
</div>