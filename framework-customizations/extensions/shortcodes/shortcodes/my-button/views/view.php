<?php

if (!defined('FW')) {
    die('Forbidden');
}
?>

<button
    id="shortcode-<?php echo esc_attr($atts['id']); ?>"
    class="button button-<?php echo $atts['size']; ?> button-<?php echo $atts['style']; ?>">
    <?php echo $atts['label']; ?>
</button>