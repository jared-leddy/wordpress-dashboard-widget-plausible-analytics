<?php

// Create new widget
add_action('wp_dashboard_setup', 'plausible_widget');

// Setup widget settings
function plausible_widget() {
  // format
	global $wp_meta_boxes;
  // add widget to dashboard
	wp_add_dashboard_widget('plausible_widgets', 'Plausible | Analytics', 'custom_dashboard_widget');
}

function custom_dashboard_widget() {
    // Plausible code pasted inside a variable
    $string .= '<iframe plausible-embed src="https://plausible.io/share/carbondigital.us?auth=wMVXsYPRZm2jO_5oqg_Qu&embed=true&theme=light" scrolling="no" frameborder="0" loading="lazy" style="width: 1px; min-width: 100%; height: 1600px;"></iframe><div style="font-size: 14px; padding-bottom: 14px;">Stats powered by <a target="_blank" style="color: #4F46E5; text-decoration: underline;" href="https://plausible.io">Plausible Analytics</a></div><script async src="https://plausible.io/js/embed.host.js"></script>';

    // Form code printed
    echo $string;
}

?>
