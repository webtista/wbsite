<?php
/**
 * The template for displaying the footer
 *
 * @package wheelsboutique
 */
?>

<footer class="text-sm py-8 transition-colors duration-500 text-customDark dark:text-customLight border-t border-stone-300 dark:border-stone-700">
  <div class="container mx-auto px-4">
    <nav class="mb-4" aria-label="Footer navigation">
      <ul class="flex flex-wrap justify-center gap-4">
        <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:underline hover:text-customRed dark:hover:text-lime-400">About Us</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:underline hover:text-customRed dark:hover:text-lime-400">Contact</a></li>
        <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:underline hover:text-customRed dark:hover:text-lime-400">Privacy Policy</a></li>
        <li><a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:underline hover:text-customRed dark:hover:text-lime-400">Terms</a></li>
        <li><a href="<?php echo esc_url(home_url('/sitemap.xml')); ?>" class="hover:underline hover:text-customRed dark:hover:text-lime-400">Sitemap</a></li>
      </ul>
    </nav>

    <address class="not-italic text-center mb-2">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </address>

    <p class="text-center text-xs text-gray-500 dark:text-gray-400">
      Built with semantic HTML5, optimized for speed and SEO.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
