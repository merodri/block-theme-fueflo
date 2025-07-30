<?php
/**
 * Title: Imagen y Texto Numerado
 * Slug: block-theme/imagen-textonumerado
 * Categories: fueflo
 * Description: A layout with a title, content and a image in the left column.
 *
 */
?>
<!-- wp:group {"metadata":{"name":"Imagen y Texto Numerado","categories":["ollie/features"],"patternName":"ollie/image-and-numbered-features"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/img/imagen1.webp' ) ); ?>","id":62,"dimRatio":0,"customOverlayColor":"#8e765d","isUserOverlayColor":false,"minHeightUnit":"px","style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"5px"}}} -->
<div class="wp-block-cover" style="border-radius:5px"><img class="wp-block-cover__image-background wp-image-62" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/imagen1.webp' ) ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#8e765d"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"metadata":{"name":"Feature"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"}},"border":{"radius":"100px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">1</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"h3"} -->
<h3 class="wp-block-heading has-h-3-font-size">Super simple customization</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add your splash of colors, pick your header, choose your favorite font — all with a few quick clicks. No coding skills required.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Feature"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"13px","right":"14px"}},"border":{"radius":"100px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;padding-top:5px;padding-right:14px;padding-bottom:5px;padding-left:13px"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pixel-perfect patterns</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Your website deserves to look pixel-perfect on every device. Ollie ensures your entire design scales down gracefully automagically.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Feature"},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"14px","right":"13px"}},"border":{"radius":"100px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;padding-top:5px;padding-right:13px;padding-bottom:5px;padding-left:14px"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">3</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Blazing fast by default</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We obsess over performance so you don't have to. Ollie is super lightweight and scores top marks on Google PageSpeed Insights.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->