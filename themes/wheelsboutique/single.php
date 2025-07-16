<?php get_header(); ?>

<main class="mx-auto max-w-[720px] px-4 py-16">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article itemscope itemtype="https://schema.org/BlogPosting">
      <!-- Title -->
      <header class="mb-4 mx-auto">
        <h1 class="text-3xl font-bold text-customDark dark:text-customLight font-specialgothic tracking-wider uppercase" itemprop="headline">
          <?php the_title(); ?>
        </h1>
        <div class="mt-2 text-sm text-stone-500 dark:text-stone-400">
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
      </header>
      <!-- Featured Image -->
      <?php if (has_post_thumbnail()) : ?>
        <div class="mb-6 overflow-hidden rounded-md border  border-stone-300 dark:border-stone-700">
          <img src="<?php the_post_thumbnail_url('large'); ?>"
               alt="<?php the_title(); ?>"
               class="w-full object-cover"
               itemprop="image">
        </div>
      <?php endif; ?>



      <!-- Content -->
      <div class="prose dark:prose-invert max-w-none mb-10" itemprop="articleBody">
        <?php the_content(); ?>
      </div>


      <!-- Category Tags as Tag Cloud -->
      <?php
        $post_categories = get_the_category();
        if (!empty($post_categories)) :
      ?>
        <footer class="mt-10">
          <h2 class="text-sm uppercase font-semibold text-stone-500 dark:text-stone-400 mb-3">Categories</h2>
          <div class="flex flex-wrap gap-2">
            <?php foreach ($post_categories as $category) : ?>
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                 class="text-xs px-3 py-1 rounded-sm bg-black text-customLight hover:bg-customRed transition">
                #<?php echo esc_html($category->name); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </footer>
      <?php endif; ?>

    </article>

  <?php endwhile; else : ?>
    <p class="text-center text-stone-500 dark:text-stone-400">Sorry, no post found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
