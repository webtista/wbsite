<!DOCTYPE html>
<html <?php language_attributes(); ?> class="font-opensans">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <?php
// Fallbacks
$default_description = get_bloginfo('description');
$default_title = get_bloginfo('name');
$default_url = home_url('/');
$default_image = get_template_directory_uri() . '/assets/img/og-image.jpg';

if (is_singular()) {
    $title = get_the_title() . ' | ' . $default_title;
    $description = get_the_excerpt() ?: $default_description;
    $url = get_permalink();
} elseif (is_archive()) {
    $title = get_the_archive_title() . ' | ' . $default_title;
    $description = term_description() ?: $default_description;

    $queried = get_queried_object();
    if ($queried instanceof WP_Term) {
        $url = get_term_link($queried);
    } else {
        $url = get_post_type_archive_link(get_post_type());
    }
} elseif (is_home()) {
    $title = 'Latest News | ' . $default_title;
    $description = $default_description;
    $url = $default_url;
} elseif (is_search()) {
    $title = 'Search results for "' . get_search_query() . '" | ' . $default_title;
    $description = $default_description;
    $url = $default_url;
} else {
    $title = $default_title;
    $description = $default_description;
    $url = $default_url;
}

// Set OG image
if (is_singular() && has_post_thumbnail()) {
    $image = get_the_post_thumbnail_url(null, 'full');
} else {
    $image = $default_image;
}
?>


  <title><?php echo esc_html($title); ?></title>
  <meta name="description" content="<?php echo esc_attr($description); ?>">


  <!-- Open Graph Meta -->
  <meta property="og:title" content="<?php echo esc_attr($title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($description); ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url($url); ?>">
  <meta property="og:image" content="<?php echo esc_url($image); ?>">

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
  <meta name="twitter:image" content="<?php echo esc_url($image); ?>">

  <!-- Canonical -->
  <link rel="canonical" href="<?php echo esc_url($url); ?>">

  <!-- Favicon (optional) -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

  <!-- Site verification tags for Microsoft and Pinterest -->
  <meta name="msvalidate.01" content="DDFF2D33BE280A899A71B4C8EAD5AB2B" />
  <meta name="p:domain_verify" content="649a4441c99598608e8bfe38c1bff851"/>

  <!-- WordPress hook for enqueuing styles/scripts and injecting title tag dynamically -->
  <?php wp_head(); ?>

  <!-- Google Tag Manager script -->
  <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4S3R2FC');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Asynchronously load reCAPTCHA script for performance -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LcYzoIqAAAAAMaeutzH-t4tDcA6UxHUQtFpJodR" async defer></script>

  <!-- Styles and Scripts Hook -->
  <?php wp_head(); ?>
</head>

  <body <?php body_class('bg-customLight dark:bg-customDark transition duration-500'); ?>>
    <?php get_template_part('parts/main-mega-menu'); ?>
  <?php get_template_part('parts/mobile-menu-header'); ?>
