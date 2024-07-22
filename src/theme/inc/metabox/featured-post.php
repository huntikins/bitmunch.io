<?php function bitmunch_featured_post()
{
    add_meta_box('bitmunch_featured_post', __('Featured post', 'bitmunch-textdomain'), 'bitmunch_featured_post_callback', 'post');
}
function bitmunch_featured_post_callback($post)
{
    $featured = get_post_meta($post->ID);
    ?>

    <div class="bitmunch-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if (isset($featured['meta-checkbox']))
                checked($featured['meta-checkbox'][0], 'yes'); ?> />
            <?php _e('', 'bitmunch-textdomain') ?>
        </label>
    </div>

    <?php
}
add_action('add_meta_boxes', 'bitmunch_featured_post');


/**
 * Saves the custom meta input
 */
function bitmunch_featured_post_save($post_id)
{

    // Checks save status
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['bitmunch_nonce']) && wp_verify_nonce($_POST['bitmunch_nonce'], basename(__FILE__))) ? 'true' : 'false';

    // Exits script depending on save status
    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

    // Checks for input and saves
    if (isset($_POST['meta-checkbox'])) {
        update_post_meta($post_id, 'meta-checkbox', 'yes');
    } else {
        update_post_meta($post_id, 'meta-checkbox', '');
    }

}
add_action('save_post', 'bitmunch_featured_post_save');