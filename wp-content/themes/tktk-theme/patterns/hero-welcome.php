<?php
/**
 * Title: Hero Welcome
 * Slug: tktk/hero-welcome
 * Description: Full-width hero section with nature background and centered welcome text
 * Categories: hero
 * Keywords: hero, welcome, cover, nature
 * Viewport Width: 1200
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tktk-header-img.jpg","id":123,"dimRatio":30,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|md","right":"var:preset|spacing|md"}}},"layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--md);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-123" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/tktk-header-img.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"400","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}},"color":{"text":"#ffffff"},"elements":{"link":{"color":{"text":"#ffffff"}}}},"fontFamily":"pp-editorial"} -->
<h1 class="wp-block-heading has-text-align-center has-text-color has-link-color has-pp-editorial-font-family" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--sm);font-size:3.5rem;font-weight:400;line-height:1.1">Welcome</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.4"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--md);font-size:1.25rem;line-height:1.4">Experience natural healing and wellness in the heart of the Berkshires</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"primary-sage","textColor":"white","style":{"border":{"radius":"8px"},"spacing":{"padding":{"left":"var:preset|spacing|md","right":"var:preset|spacing|md","top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-sage-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--md)">Learn More</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->