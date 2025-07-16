<?php get_header(); ?>
<main class="container mx-auto px-4 py-8">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class("mb-10"); ?>>
        <header class="mb-4">
          <h1 class="text-3xl font-bold">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h1>
          <p class="text-sm text-gray-500">
            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            · by <?php the_author(); ?>
          </p>
        </header>
        <div class="prose max-w-none">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <nav class="pagination">
      <?php
        the_posts_pagination([
          'mid_size' => 2,
          'prev_text' => __('← Previous'),
          'next_text' => __('Next →'),
        ]);
      ?>
    </nav>
  <?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
