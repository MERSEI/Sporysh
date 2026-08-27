<?php
function sporysh_enqueue_assets() {
    wp_enqueue_style('sporysh-style', get_template_directory_uri() . '/style.css', [], '20.7.0');
    wp_enqueue_script('sporysh-app', get_template_directory_uri() . '/app.js', [], '9.7.0', true);
    wp_enqueue_script('sporysh-config', get_template_directory_uri() . '/config.js', [], '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'sporysh_enqueue_assets');
function sporysh_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'sporysh_setup');

// Force our static index.html for the front page (priority 999 = after Elementor)
add_filter('template_include', function($template) {
    if (is_front_page()) {
        return get_template_directory() . '/index.php';
    }
    return $template;
}, 999);

// Chunked base64 upload handler (admin only)
add_action('wp_ajax_sporysh_chunk_upload', function() {
    if (!current_user_can('manage_options')) wp_die('Unauthorized', 403);
    $chunk    = $_POST['chunk']    ?? '';
    $offset   = intval($_POST['offset']   ?? 0);
    $total    = intval($_POST['total']    ?? 1);
    $filename = sanitize_file_name($_POST['filename'] ?? 'upload.bin');
    $tmp = sys_get_temp_dir() . '/sporysh_b64_' . md5($filename) . '.txt';
    file_put_contents($tmp, $chunk, $offset === 0 ? 0 : FILE_APPEND);
    if ($offset + 1 >= $total) {
        $binary = base64_decode(file_get_contents($tmp));
        @unlink($tmp);
        $dest = get_template_directory() . '/assets/' . $filename;
        file_put_contents($dest, $binary);
        wp_send_json_success(['saved' => $filename, 'size' => strlen($binary)]);
    } else {
        wp_send_json_success(['received' => $offset + 1, 'of' => $total]);
    }
});
