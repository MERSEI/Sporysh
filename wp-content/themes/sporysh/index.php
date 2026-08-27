<?php
// sporysh v17 - ob_start approach
$html = file_get_contents(get_template_directory() . '/index.html');
$theme_url = get_template_directory_uri();

$html = str_replace('src="./assets/', 'src="' . $theme_url . '/assets/', $html);
$html = str_replace("src='./assets/", "src='" . $theme_url . "/assets/", $html);
$html = str_replace('href="./assets/', 'href="' . $theme_url . '/assets/', $html);
$html = str_replace('src="assets/', 'src="' . $theme_url . '/assets/', $html);
$html = str_replace('href="assets/', 'href="' . $theme_url . '/assets/', $html);
$css_url = $theme_url . '/style.css?v=19.8.0';
$html = str_replace('href="./style.css"', 'href="' . $css_url . '"', $html);
$html = str_replace('href="style.css"', 'href="' . $css_url . '"', $html);
$html = str_replace('src="./app.js"', 'src="' . $theme_url . '/app.js"', $html);
$html = str_replace('src="./config.js"', 'src="' . $theme_url . '/config.js"', $html);
$html = str_replace('src="app.js"', 'src="' . $theme_url . '/app.js"', $html);
$html = str_replace('src="config.js"', 'src="' . $theme_url . '/config.js"', $html);

ob_start(); wp_head(); $wph = ob_get_clean();
ob_start(); wp_footer(); $wpf = ob_get_clean();

$html = str_replace('</head>', $wph . '</head>', $html);
$html = str_replace('</body>', $wpf . '</body>', $html);
echo $html;
?>
