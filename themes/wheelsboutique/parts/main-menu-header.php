<header class="bg-customLight dark:bg-customDark border-b border-stone-300 dark:border-stone-700 transition duration-500" x-data="{
  mobileMenuIsOpen: false,
  darkMode: false,
  init() {
    this.darkMode = localStorage.getItem('theme') === 'dark';
    document.documentElement.classList.toggle('dark', this.darkMode);
  },
  toggleTheme() {
    this.darkMode = !this.darkMode;
    document.documentElement.classList.toggle('dark', this.darkMode);
    localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
  }
}">
  <nav x-on:click.away="mobileMenuIsOpen = false"
       class="mx-auto flex container items-center justify-between gap-4 px-6 py-4"
       aria-label="penguin ui menu">

    <!-- Brand Logo -->
    <a href="/" class="text-2xl font-bold text-purple-800 dark:text-white">
      <img src="<?php echo get_template_directory_uri(); ?>/images/wblogo.webp"
           alt="wheels boutique brand logo"
           class="w-70" />
    </a>


		<?php
		wp_nav_menu([
		  'theme_location' => 'primary',
		  'container' => false,
		  'menu_class' => 'hidden items-center gap-8 shrink-0 sm:flex',
		  'fallback_cb' => false,
      'walker' => new Tailwind_Nav_Walker()
		]);
		?>
    <!-- Mobile Menu Button -->
    <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen"
            x-bind:aria-expanded="mobileMenuIsOpen"
            x-bind:class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null"
            type="button"
            class="flex text-slate-600 dark:text-violet-100 sm:hidden"
            aria-label="mobile menu"
            aria-controls="mobileMenu">
      <svg x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none"
           aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
      <svg x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none"
           aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M6 18 18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Mobile Menu -->
		<!-- Mobile Menu -->
		<ul x-show="mobileMenuIsOpen" x-cloak
		    x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
		    x-transition:enter-start="-translate-y-full"
		    x-transition:enter-end="translate-y-0"
		    x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
		    x-transition:leave-start="translate-y-0"
		    x-transition:leave-end="-translate-y-full"
		    class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col rounded-b-2xl bg-gray-100 px-8 pb-6 pt-10 dark:bg-black sm:hidden">

		  <?php
		  wp_nav_menu([
		    'theme_location' => 'primary',
		    'container' => false,
		    'menu_class' => '', // leave empty since we're already inside a styled <ul>
		    'items_wrap' => '%3$s', // only output <li> items
		    'menu_id' => 'mobile-menu', // used to trigger mobile-specific styling in filter
		    'fallback_cb' => false,
        'walker' => new Tailwind_Nav_Walker()
		  ]);
		  ?>


		</ul>


		    <!-- Dark Mode Toggle -->
		    <button @click="toggleTheme"
		            class="p-2 text-slate-600 hover:bg-slate-300/30 rounded-full dark:text-violet-100 dark:hover:bg-slate-700"
		            aria-label="Toggle dark mode">
		      <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
		           viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
		        <path stroke-linecap="round" stroke-linejoin="round"
		              d="M12 3v1m6.364 1.636l-.707.707M21 12h-1m-1.636 6.364l-.707-.707M12 21v-1m-6.364-1.636l.707-.707M3 12h1m1.636-6.364l.707.707M12 5.5a6.5 6.5 0 0 1 0 13 6.5 6.5 0 0 1 0-13z" />
		      </svg>
		      <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
		           viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
		        <path stroke-linecap="round" stroke-linejoin="round"
		              d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
		      </svg>
		    </button>

  </nav>
</header>
