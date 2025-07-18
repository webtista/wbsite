<?php get_header(); ?>

<main class="container mx-auto px-4 py-15">
  <header class="mb-6 text-center">
    <h1 class="text-3xl font-bold text-customDark dark:text-customLight">Customer Vehicles Portfolio</h1>
    <p class="text-sm dark:text-customLightText">Real vehicles on real wheels. Filter by brand, model, or wheel.</p>
  </header>

  <?php get_template_part('parts/search-section'); ?>

  <!-- Page counter -->
  <section class="page-counter">
    <?php wheelsboutique_page_counter(); ?>
  </section>

  <!-- Gallery Grid -->
  <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" aria-label="Gallery Results">
    <?php
    $current_term = get_queried_object();

    if ($current_term instanceof WP_Term) {
        $taxonomy = $current_term->taxonomy;
        $term_id = $current_term->term_id;
    } else {
        $taxonomy = 'galleries';
        $term_id = 0;
    }

    $args = [
        'post_type'      => 'gallery',
        'posts_per_page' => 21,
        'paged'          => max(1, get_query_var('paged')),
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'tax_query'      => [
            [
                'taxonomy' => $taxonomy,
                'field'    => 'term_id',
                'terms'    => $term_id,
            ],
        ],
    ];

    $gallery_query = new WP_Query($args);

    if ($gallery_query->have_posts()) :
        while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
          <article class="bg-transparent dark:customDark transition" itemscope itemtype="https://schema.org/VisualArtwork">
            <a href="<?php the_permalink(); ?>" itemprop="url">
              <div class="overflow-hidden rounded-sm border border-stone-300 dark:border-stone-700">
                <img src="<?php the_post_thumbnail_url('medium') ?>"
                     alt="<?php the_title(); ?>"
                     class="w-full aspect-video object-cover transition-transform duration-300 transform hover:scale-110"
                     itemprop="image">
              </div>

              <div class="p-2">
                <h2 class="text-sm font-semibold mb-1 text-black dark:text-customLight" itemprop="name"><?php the_title(); ?></h2>
                <meta itemprop="dateCreated" content="<?php echo get_the_date('c'); ?>">
              </div>
            </a>
          </article>
        <?php endwhile; ?>
  </section>

  <!-- Pagination -->
  <?php wheelsboutique_custom_pagination(); ?>

<?php
    else :
        echo '<p class="text-center text-stone-500 dark:text-stone-400">No vehicles found for this category.</p>';
    endif;

    wp_reset_postdata();
?>
</main>

<?php get_footer(); ?>
