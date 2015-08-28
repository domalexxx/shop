<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>

<div class="widget widget-woocommerce-currency-rates">
    <?php if (!empty($instance['title'])): ?>
        <h3><?php _e($instance['title']) ?></h3>
    <?php endif; ?>
    <?php echo do_shortcode('[woocs_rates exclude="' . $instance['exclude'] . '" precision="' . $instance['precision'] . '"]'); ?>
</div>

