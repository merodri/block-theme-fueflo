<?php
/**
 * Title: Hero Banner
 * Slug: block-theme/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri() . '/assets/img/default-banner.png'); ?>","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"metadata":{"name":"Hero Banner"},"align":"full","className":"desco-theme-hero-banner at-pos at-z-idx","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light desco-theme-hero-banner at-pos at-z-idx"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/default-banner.png'); ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->