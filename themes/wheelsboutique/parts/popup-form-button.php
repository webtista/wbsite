<!-- Trigger Button -->
<button
  id="openSidebarBtn"
  class="mt-4 flex w-full items-center justify-center rounded-lg border border-transparent bg-customRed px-8 py-3 text-base font-medium text-white hover:bg-customDark focus:outline-none focus:ring-2 focus:ring-customRed focus:ring-offset-2 transition"
>
  Request a Quote
</button>

<!-- Sidebar Overlay -->
<div id="sidebarOverlay"
     class="fixed inset-0 z-50 hidden bg-black/70 backdrop-blur-sm transition-opacity duration-300"
>
  <!-- Sidebar Panel -->
  <div id="sidebarPanel"
       class="absolute right-0 top-[32px] h-[calc(100%-32px)] w-full max-w-lg bg-white dark:bg-neutral-900 shadow-xl transform translate-x-full transition-transform duration-300 flex flex-col justify-center"
  >
    <!-- Close Button -->
    <button
      id="closeSidebarBtn"
      class="absolute left-4 top-4 text-xl font-bold text-red-600 hover:text-black dark:hover:text-white transition z-10"
      aria-label="Close Sidebar"
    >
      &times;
    </button>

    <!-- Sidebar Content -->
    <div class="p-6 pt-14 overflow-y-auto">
      <h2 class="text-lg font-bold text-center text-black dark:text-white mb-4">
        Contact us today to secure your personalized quote.
      </h2>

      <?php require_once get_template_directory() . '/parts/leads-form.php'; ?>
    </div>
  </div>
</div>
