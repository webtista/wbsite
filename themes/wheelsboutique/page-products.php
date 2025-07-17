<?php
/* Template Name: Products Page */
get_header(); ?>

<main class="container mx-auto px-4 py-12">

  <!-- Page Title -->
  <header class="mb-16 text-center">
    <h1 class="text-4xl font-bold uppercase text-customDark dark:text-customLight font-specialgothic">Our Products</h1>
    <p class="text-lg mt-4 text-gray-600 dark:text-customLightText">Explore high-end parts for your vehicle</p>
  </header>

  <section class="mb-24">
    <div class="ruledGrid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <?php
      $categories = ['Wheels', 'Exhausts', 'Exterior', 'Suspension', 'Brakes', 'ECU Tunes', 'Brakes', 'ECU Tunes'];
      $total = count($categories);
      $columns = 4;
      $rows = ceil($total / $columns);

      foreach ($categories as $index => $category):
        $currentRow   = floor($index / $columns) + 1;
        $isLastColumn = ($index + 1) % $columns === 0;
        $isLastRow    = $currentRow === $rows;

        $itemClasses = ['gridItem'];
        if ($isLastColumn) $itemClasses[] = 'no-vertical-line';
        if ($isLastRow)    $itemClasses[] = 'no-bottom-line';
      ?>
        <div class="<?php echo implode(' ', $itemClasses); ?> flex flex-col items-center text-center p-6">
          
          <h3 class="text-lg font-bold text-customDark dark:text-customLight">
            <?php echo esc_html($category); ?>
          </h3>
          <p class="text-sm text-gray-600 dark:text-gray-400">
            Shop premium <?php echo strtolower($category); ?> upgrades.
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>



<style>
.ruledGrid .gridItem {
  position: relative;
}

/* Right vertical line between items */
.ruledGrid .gridItem::before {
  content: "";
  display: inline-block;
  width: 1px;
  height: calc(100% - 20px);
  background-color: var(--color-customDark, #111827);
  position: absolute;
  right: 0;
  top: 10px;
  bottom: 10px;
  margin: auto;
}

/* Bottom horizontal line */
.ruledGrid .gridItem::after {
  content: "";
  display: inline-block;
  height: 1px;
  width: calc(100% - 20px);
  background-color: var(--color-customDark, #111827);
  position: absolute;
  left: 10px;
  right: 10px;
  bottom: 0;
  margin: auto;
}

/* Suppress right line on last column */
.ruledGrid .no-vertical-line::before {
  display: none;
}

/* Suppress horizontal line on last row */
.ruledGrid .no-bottom-line::after {
  display: none;
}



</style>

  <!-- Featured Products Section -->
  <section>
    <h2 class="text-2xl font-semibold mb-8 text-customDark dark:text-customLight">Featured Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      <?php for ($i = 1; $i <= 8; $i++): ?>
        <div class="bg-white dark:bg-customDark rounded-sm shadow hover:shadow-lg overflow-hidden transition">
          <img src="https://placehold.co/400x250?text=Product+<?php echo $i; ?>" alt="Product <?php echo $i; ?>" class="w-full h-48 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-bold text-customDark dark:text-customLight">Product Title <?php echo $i; ?></h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">Brief description of product <?php echo $i; ?> goes here.</p>
            <p class="text-md font-semibold text-customDark dark:text-customLight mt-2">$999.00</p>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
