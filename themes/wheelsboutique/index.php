<?php get_header(); ?>

<main class="container mx-auto px-4 py-15">
  <header class="mb-6 text-center">
    <h1 class="text-4xl font-bold text-customDark dark:text-customLight font-specialgothic tracking-wider uppercase">Latest Articles</h1>
    <p class="text-sm dark:text-customLightText">Insights, updates, and stories from the Wheels Boutique team.</p>
  </header>

  <?php
  $paged = max(1, get_query_var('paged'));

  // Featured post (page 1 only)
  if ($paged === 1) {
    $featured_query = new WP_Query([
      'post_type'      => 'post',
      'posts_per_page' => 1,
      'orderby'        => 'date',
      'order'          => 'DESC',
      'post_status'    => 'publish',
    ]);

    if ($featured_query->have_posts()) :
      $featured_query->the_post();
      ?>
      <!-- Featured Post -->
      <section class="mb-12">
        <div class="grid md:grid-cols-3 gap-6 items-center">
          <a href="<?php the_permalink(); ?>" class="block md:col-span-2 overflow-hidden rounded-sm border border-stone-300 dark:border-stone-700">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('large'); ?>"
                   alt="<?php the_title(); ?>"
                   class="w-full aspect-video object-cover hover:scale-105 transition-transform duration-300"
                   itemprop="image">
            <?php endif; ?>
          </a>
          <div class="md:col-span-1">
            <h2 class="text-2xl font-bold text-customDark dark:text-customLight mb-2 font-specialgothic tracking-wider uppercase">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="text-xs text-stone-500 dark:text-stone-400 mb-3">
              <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                <?php echo get_the_date(); ?>
              </time>
              ·
              <?php
              $categories = get_the_category();
              if ($categories) {
                  echo esc_html($categories[0]->name);
              }
              ?>
            </div>
            <p class="text-sm text-stone-600 dark:text-stone-400 line-clamp-3"><?php echo get_the_excerpt(); ?></p>
          </div>
        </div>
      </section>

      <?php
      wp_reset_postdata();
    endif;
  }

  // Main post grid
  $args = [
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post_status'    => 'publish',
  ];

  // Exclude featured post from page 1
  if ($paged === 1) {
    $args['offset'] = 1;
  }

  $blog_query = new WP_Query($args);

  if ($blog_query->have_posts()) : ?>
    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" aria-label="Blog Posts">
      <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
        <article class="bg-transparent dark:bg-customDark transition" itemscope itemtype="https://schema.org/BlogPosting">
          <a href="<?php the_permalink(); ?>" itemprop="url">
            <div class="overflow-hidden rounded-sm border border-stone-300 dark:border-stone-700">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>"
                     alt="<?php the_title(); ?>"
                     class="w-full aspect-video object-cover transition-transform duration-300 transform hover:scale-110"
                     itemprop="image">
              <?php endif; ?>
            </div>

            <div class="p-2">
              <h2 class="text-base font-semibold mb-1 text-black dark:text-customLight " itemprop="headline">
                <?php the_title(); ?>
              </h2>

              <div class="text-xs text-stone-500 dark:text-stone-400 mb-1">
                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished">
                  <?php echo get_the_date(); ?>
                </time>
                ·
                <span itemprop="about">
                  <?php
                    $categories = get_the_category();
                    if ($categories) {
                        echo esc_html($categories[0]->name);
                    }
                  ?>
                </span>
              </div>
            </div>
          </a>
        </article>
      <?php endwhile; ?>
    </section>

    <!-- Pagination -->
    <div class="mt-10">
      <?php
      the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('← Prev', 'textdomain'),
        'next_text' => __('Next →', 'textdomain'),
        'class'     => 'pagination',
      ]);
      ?>
    </div>

  <?php else : ?>
    <p class="text-center text-stone-500 dark:text-stone-400">No blog posts found.</p>
  <?php endif;

  wp_reset_postdata();
  ?>
</main>

<?php get_footer(); ?>
