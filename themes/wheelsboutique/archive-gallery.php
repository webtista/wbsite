<?php get_header(); ?>

<main class="container mx-auto px-4 py-15">
  <header class="mb-6 text-center">
    <h1 class="text-4xl leading-7 font-bold text-customDark dark:text-customLight font-specialgothic tracking-wider uppercase text-center">
      <?php
      if (is_tax()) {
        $term = get_queried_object();

        if ($term && $term->parent) {
          $parent = get_term($term->parent, $term->taxonomy);
          echo esc_html($parent->name) . ' ' . esc_html($term->name);
        } else {
          echo esc_html($term->name);
        }
        echo '<br><span class="text-base font-normal leading-1">Vehicle Gallery | Custom Wheels & Upgrades</span>';
      } else {
        echo 'Customer Vehicles<br><span class="text-base font-normal leading-1">Portfolio</span>';
      }
      ?>
    </h1>



    <p class="text-sm dark:text-customLightText py-5">
      <?php
      if (is_tax()) {
        $term = get_queried_object();

        if ($term->parent) {
          $parent = get_term($term->parent, $term->taxonomy);
          $name = $parent->name . ' ' . $term->name;
        } else {
          $name = $term->name;
        }

        echo esc_html($name) . ' builds featuring custom wheels, suspension, exhaust systems, and aerodynamic upgrades.<br>To request pricing or discuss your next project, contact us via email, phone, or our website form.';
      } else {
        echo 'Builds featuring custom wheels, suspension, exhaust systems, and aerodynamic upgrades.<br>To request pricing or discuss your next project, contact us via email, phone, or our website form.';
      }
      ?>
    </p>

  </header>



  <?php get_template_part('parts/search-section'); ?>


  <!-- Grid of Archive Cards -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" aria-label="Gallery Results">

    <?php
    $current_term = get_queried_object();

    $taxonomy = 'galleries'; // fallback
    $term_id = 0;

    if ($current_term instanceof WP_Term && isset($current_term->taxonomy)) {
        $taxonomy = $current_term->taxonomy;
        $term_id = $current_term->term_id;
    }

    $args = [
        'post_type'      => 'gallery',
        'posts_per_page' => 21,
        'paged'          => max(1, get_query_var('paged')),
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    ];

    if ($term_id) {
        $args['tax_query'] = [
            [
                'taxonomy' => $taxonomy,
                'field'    => 'term_id',
                'terms'    => $term_id,
            ],
        ];
    }

    $gallery_query = new WP_Query($args);

    if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
          <article class="bg-transparent dark:customDark transition" itemscope itemtype="https://schema.org/VisualArtwork">
            <a href="<?php the_permalink(); ?>" itemprop="url">
              <div class="overflow-hidden rounded-sm border border-stone-300 dark:border-stone-700">
                <img src="<?php the_post_thumbnail_url('full'); ?>"
                     alt="<?php the_title_attribute(); ?>"
                     class="w-full aspect-video object-cover transition-transform duration-300 transform hover:scale-110"
                     itemprop="image">
              </div>

              <div class="pt-4">
                <h2 class="text-sm font-bold mb-1 text-customDark dark:text-customLight uppercase tracking-wider" itemprop="name"><?php the_title(); ?></h2>
                <meta itemprop="dateCreated" content="<?php echo esc_attr(get_the_date('c')); ?>">
              </div>
            </a>
          </article>
        <?php endwhile; ?>
      </section>

      <!-- Pagination -->
      <?php wheelsboutique_custom_pagination(); ?>

    <?php else : ?>
      <p class="col-span-full text-center text-gray-500 dark:text-gray-400">No galleries found.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
