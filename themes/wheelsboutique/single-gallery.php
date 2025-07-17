<?php get_header(); ?>

<main class="container mx-auto px-4 py-16">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Featured Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 items-start">
      <!-- Featured Image -->
      <div class="md:col-span-2 overflow-hidden rounded-xl border border-stone-300 dark:border-stone-700">
        <?php if (has_post_thumbnail()) : ?>
          <img
            src="<?php the_post_thumbnail_url('large'); ?>"
            alt="<?php the_title(); ?>"
            class="w-full aspect-video object-cover hover:scale-105 transition-transform duration-300"
            itemprop="image"
          >
        <?php endif; ?>
      </div>

      <!-- Content -->
      <div class="md:col-span-1 space-y-4">
        <h1 class="text-3xl font-bold text-customDark dark:text-customLight font-specialgothic tracking-wider uppercase">
          <?php the_title(); ?>
        </h1>

        <div class="text-xs text-stone-500 dark:text-stone-400">
          <?php
        $taxonomies = ['category', 'galleries', 'wheel-galleries'];
        $all_terms = [];

        foreach ($taxonomies as $taxonomy) {
            $terms = get_the_terms(get_the_ID(), $taxonomy);
            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    // Get parent term if exists
                    if ($term->parent) {
                        $parent_term = get_term($term->parent, $taxonomy);
                        if ($parent_term && !is_wp_error($parent_term)) {
                            $all_terms[$parent_term->term_id] = $parent_term;
                        }
                    }
                    $all_terms[$term->term_id] = $term;
                }
            }
        }
        ?>

        <?php if (!empty($all_terms)) : ?>
          <div class="flex flex-wrap gap-2 mt-4">
            <?php foreach ($all_terms as $term) : ?>
              <a href="<?php echo esc_url(get_term_link($term)); ?>"
                 class="text-xs px-3 py-1 rounded-sm bg-customDark text-customLight hover:bg-customRed transition">
                #<?php echo esc_html($term->name); ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>


        </div>

        <!-- Fitment Info -->
        <div>
          <h2 class="text-lg font-black text-wbblack border-t border-t-wbblack pt-4">FITMENT INFORMATION</h2>
          <div class="prose prose-sm text-wbblack">
            <?php
            $value = rwmb_meta('wb_vehicle_specs');
            echo !empty($value) ? wpautop($value) : '<p>Please contact us to get the specifications on this product.</p>';
            ?>
          </div>
        </div>

        <!-- Post Content -->
        <div class="prose prose-sm mt-4 text-gray-500">
          <?php the_content(); ?>
        </div>




 <?php require_once get_template_directory() . '/parts/popup-form-button.php'; ?>






















        <!-- Disclaimer -->
        <div class="mt-6">
          <div class="text-xs text-gray-500 leading-tight">
            <span class="text-wbred">*</span>
            Disclaimer: The information provided on this page is for general informational purposes only and may contain errors or inaccuracies.
            For the most up-to-date and verified information, please contact us directly at
            <a href="tel:17862490127" class="underline">786.249.0127</a> or email us at
            <a href="mailto:info@wheelsboutique.com" class="underline">info@wheelsboutique.com</a>.

          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section>
      <ul role="list" class="grid grid-cols-1 gap-y-8 sm:grid-cols-1 lg:grid-cols-2 xl:gap-x-8">
        <?php
        $images = rwmb_meta('wb_vehicle_gallery', ['size' => 'single-gallery-images rounded-xl']);
        $max_images = 20;
        $count = 0;
        foreach ($images as $image) :
          if ($count >= $max_images) break;
        ?>
          <li class="relative">
            <div class="w-full bg-gray-200 rounded-xl overflow-hidden">
              <img loading="lazy"
                x-data="{ loaded: false }"
                x-init="() => { const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            observer.unobserve(img);
                        }
                    });
                }); observer.observe($el); }"
                @load="loaded = true"
                :class="loaded ? 'opacity-100' : 'opacity-0'"
                class="w-full object-cover transition-opacity duration-700 border border-gray-300 rounded-xl"
                data-src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr(get_the_title()); ?>"
              />
            </div>
          </li>
        <?php $count++; endforeach; ?>
      </ul>
    </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
