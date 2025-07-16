<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

<main class="max-w-screen-lg mx-auto px-4 py-16">
  <section class="text-center mb-12">
    <h1 class="text-4xl font-bold text-customDark dark:text-customLight mb-4">About Wheels Boutique</h1>
    <p class="text-lg text-stone-600 dark:text-stone-400">
      Passion. Precision. Performance. Get to know the team behind the builds.
    </p>
  </section>

  <!-- Company Overview -->
  <section class="mb-16">
    <h2 class="text-2xl font-semibold mb-4 text-customDark dark:text-customLight">Who We Are</h2>
    <div class="prose dark:prose-invert max-w-none">
      <?php
        // Use Gutenberg or classic editor content
        while (have_posts()) : the_post();
          the_content();
        endwhile;
      ?>
    </div>
  </section>

  <!-- Team Section (Optional) -->
  <section class="mb-16">
    <h2 class="text-2xl font-semibold mb-6 text-customDark dark:text-customLight">Our Team</h2>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
      <?php
      // Example static team — replace with ACF, CPT, or dynamic data if needed
      $team = [
        ['name' => 'Carlos Valle', 'title' => 'Founder & CEO', 'img' => '/images/team1.jpg'],
        ['name' => 'Maria Lopez', 'title' => 'Operations Manager', 'img' => '/images/team2.jpg'],
        ['name' => 'Kevin Tran', 'title' => 'Lead Designer', 'img' => '/images/team3.jpg'],
      ];
      foreach ($team as $member) :
      ?>
        <div class="text-center">
          <img src="<?php echo esc_url(get_template_directory_uri() . $member['img']); ?>"
               alt="<?php echo esc_attr($member['name']); ?>"
               class="mx-auto mb-4 rounded-full w-32 h-32 object-cover border border-stone-300 dark:border-stone-700">
          <h3 class="font-semibold text-customDark dark:text-customLight"><?php echo $member['name']; ?></h3>
          <p class="text-sm text-stone-500 dark:text-stone-400"><?php echo $member['title']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="text-center">
    <h2 class="text-2xl font-semibold mb-2 text-customDark dark:text-customLight">Want to Work With Us?</h2>
    <p class="mb-6 text-stone-600 dark:text-stone-400">Whether you're looking to build your dream car or join the team — we’re ready.</p>
    <a href="/contact" class="inline-block px-6 py-3 bg-black text-white dark:bg-white dark:text-black rounded-full hover:opacity-90 transition">
      Contact Us
    </a>
  </section>
</main>

<?php get_footer(); ?>
