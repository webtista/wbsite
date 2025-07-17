<?php get_header(); ?>
<main class="container mx-auto px-4 py-15">
  <header class="mb-6 text-center">
    <h1 class="text-4xl font-bold text-customDark dark:text-customLight font-specialgothic tracking-wider uppercase">Performance, Precision, Prestige<br>Delivered Worldwide</h1>
    <p class="text-xl dark:text-customLightText py-2 font-medium">Let’s talk about your next customization project</p>
  </header>
  <div class="mx-auto  px-4 py-7 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center lg:text-left">
    <!-- Phone -->
    <div>
      <h4 class="font-semibold uppercase">Phone</h4>
      <p class="text-sm">Sales: +1 (786) 249-0127 <br />
      Toll Free: 1-866-51-WHEEL
      </p>
    </div>
    <!-- Email -->
    <div>
      <h4 class="font-semibold uppercase">Email</h4>
      <p class="text-sm">info@wheelsboutique.com</p>
    </div>

    <!-- Hours & Location -->
    <div>
      <h4 class="font-semibold uppercase">Hours of Operations</h4>
      <p class="text-sm">
        Mo - Fr | 9:30am-6pm E.S.T.<br />
        <em>Wheels Boutique Shop</em>
      </p>
    </div>
    <!-- Chat / FAQ -->
    <div>
      <h4 class="font-semibold uppercase">Address</h4>
      <p class="text-sm">2845 SW 69th CT<br> Miami, FL. 33155</p>
    </div>
    <!-- WhatsApp -->
    <div>
      <h4 class="font-semibold uppercase">WhatsApp 24Hr</h4>
      <p class="text-sm"></p>
    </div>

    <!-- Social Media -->
    <div>
      <h4 class="font-semibold uppercase">Social Media</h4>
      <p class="text-sm">
        Instagram: @wheelsboutique<br />
        YouTube: @wheelsboutique
      </p>
    </div>
  </div>
  <div class="flex justify-center">
    <div class="w-full max-w-[960px]">
      <?php echo do_shortcode('[leads_form]'); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
