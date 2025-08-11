<?php
/**
 * Title: About Intro - Media Left
 * Slug: tktk/about-intro
 * Description: About section with portrait on left, text content on right, with background image support
 * Categories: sections
 * Keywords: about, portrait, introduction, background
 * Viewport Width: 1200
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"}},"border":{"radius":"24px"}},"backgroundColor":"warm-cream","layout":{"type":"constrained","wideSize":"1200px"},"metadata":{"name":"About Section"}} -->
<div class="wp-block-group has-warm-cream-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--lg)">

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|lg","left":"var:preset|spacing|lg"}}},"metadata":{"name":"About Columns"}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"40%","metadata":{"name":"Portrait Column"}} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:image {"id":456,"width":"300px","height":"400px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"24px"}},"className":"portrait-style"} -->
<figure class="wp-block-image size-large is-resized portrait-style" style="border-radius:24px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.jpg" alt="Michelle Manto, Licensed Acupuncturist" class="wp-image-456" style="border-radius:24px;object-fit:cover;width:300px;height:400px"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","metadata":{"name":"Content Column"}} -->
<div class="wp-block-column" style="flex-basis:60%">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","right":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md"}},"border":{"radius":"16px"}},"backgroundColor":"soft-beige","layout":{"type":"constrained"},"metadata":{"name":"Text Content Area"}} -->
<div class="wp-block-group has-soft-beige-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)">

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.25rem","fontWeight":"400","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"textColor":"dark-text","fontFamily":"pp-editorial"} -->
<h2 class="wp-block-heading has-dark-text-color has-text-color has-pp-editorial-font-family" style="margin-bottom:var(--wp--preset--spacing--sm);font-size:2.25rem;font-weight:400;line-height:1.2">Hello, I'm Michelle</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"textColor":"dark-text","fontSize":"medium"} -->
<p class="has-dark-text-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--sm);line-height:1.6">I'm delighted to welcome you to Berkshire Acupuncture and Wellness. Nestled in the scenic heart of Great Barrington, I use traditional and modern acupuncture and Chinese Medicine.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"textColor":"dark-text","fontSize":"medium"} -->
<p class="has-dark-text-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--sm);line-height:1.6">At Berkshire Acupuncture and Wellness, we blend the ancient art of acupuncture with evidence based medicine and modern integrative approaches to address a variety of acute and chronic conditions. My practice emphasizes wellcare, not sick care – meaning we think holistically about your lifestyle, supporting your path to optimal health and harmony in their lives.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|md"}}},"textColor":"dark-text","fontSize":"medium"} -->
<p class="has-dark-text-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--md);line-height:1.6">Our goal is to create a warm, welcoming environment where you can explore the benefits of acupuncture, herbal medicine, and other complementary therapies. Together, we'll develop a personalized wellness plan that best addresses your goals and supports your spiritual health.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|sm"}}},"textColor":"dark-text","fontSize":"medium"} -->
<p class="has-dark-text-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--sm);line-height:1.6">Welcome to your place of healing and wellness.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":789,"width":"150px","sizeSlug":"medium","linkDestination":"none","className":"signature-image"} -->
<figure class="wp-block-image size-medium is-resized signature-image"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder.jpg" alt="Michelle's Signature" class="wp-image-789" style="width:150px"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->