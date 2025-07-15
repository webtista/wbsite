<div class="sticky top-0 left-0 z-20 hidden sm:block ">
  <header x-data="{
    isOpen: false,
    isHovering: false,
    selectedProductSubMenu: 'chocolate',
    isHamburgerOpen: false,
    isMobileCountrySelectorOpen: false,
    navHeight: 0,
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
  }" class="layout-header-container z-10" @keydown.escape.window="isOpen = false">

    <div x-show="isOpen" x-transition class="fixed inset-0 bg-black/50 pointer-events-none z-10"></div>

    <div
      x-init="$nextTick(() => { navHeight = $el.offsetHeight })"

      class="layout-header bg-customLight relative z-20 transition-transform duration-500 xl:hover:!translate-y-0 xl:focus-within:!translate-y-0"
    >


    <div class="flex justify-between h-[75px] w-full bg-customLight dark:bg-customDark border-b border-stone-300 dark:border-stone-700 transition duration-500">
            <div class="menu-main hidden items-center pl-12  sm:hidden md:flex lg:flex">
              <a href="/" class="text-2xl font-bold text-purple-800 dark:text-white">
                <img src="<?php echo get_template_directory_uri(); ?>/images/red.png"
                     alt="wheels boutique brand logo"
                     class="w-70" />
              </a>
            </div>
            <div class="menu-main hidden items-center mx-auto pr-70 sm:hidden md:flex lg:flex">
              <ul class="list-none flex items-center gap-x-3">
                <li class="group" @mouseenter="isOpen = true" @mouseleave="isOpen = false">
                  <button class="tracking-[0.1em] font-black  uppercase py-4 px-6 text-sm text-customDark dark:text-customLight relative before:content-[''] before:absolute before:w-full before:h-[80px] before:top-1/2 before:left-0 before:-translate-y-1/2 hover:font-extrabold transition" @click="isOpen = !isOpen" aria-label="Open Product Menu">
                    Products
                  </button>
                  <div x-show="isOpen" x-transition:enter="transition ease-in-out duration-200" x-transition:enter-start="scale-y-0 opacity-0" x-transition:enter-end="scale-y-100 opacity-100" x-transition:leave="transition ease-in-out duration-200 pointer-events-none" x-transition:leave-start="scale-y-10 opacity-100" x-transition:leave-end="scale-y-0 opacity-0" class="layout-header-dropdown origin-top p-12 ray-background absolute inset-x-0 top-full z-10 bg-customLight group-focus-within:!block max-h-[calc(100dvh_-_75px)] overflow-auto" style="display: none;">
                    <div class="flex bg-off-white border-4 border-black rounded-lg">
                      <div class="flex flex-col border-r-4 border-black min-w-[230px]">
                        <ul class="list-none flex-1"><li x-data="{ menuTitle: 'chocolate' }">
                                <a class="block font-bold text-[25px]  text-left uppercase py-4 pl-8 w-full hover:bg-black hover:text-white transition bg-black text-white" :class="{ 'bg-black text-white': selectedProductSubMenu ==  menuTitle }" @mouseenter="selectedProductSubMenu = menuTitle" @click="selectedProductSubMenu = menuTitle" href="/collections/chocolate">
                                  chocolate
                                </a>
                              </li><li x-data="{ menuTitle: 'cups' }">
                                <a class="block font-bold text-[25px]  text-left uppercase py-4 pl-8 w-full hover:bg-black hover:text-white transition" :class="{ 'bg-black text-white': selectedProductSubMenu ==  menuTitle }" @mouseenter="selectedProductSubMenu = menuTitle" @click="selectedProductSubMenu = menuTitle" href="/collections/cups">
                                  cups
                                </a>
                              </li><li x-data="{ menuTitle: 'Bundles' }">
                                <a class="block text-[25px]  text-left uppercase py-4 pl-8 w-full hover:bg-black hover:text-white transition" :class="{ 'bg-black text-white': selectedProductSubMenu ==  menuTitle }" @mouseenter="selectedProductSubMenu = menuTitle" @click="selectedProductSubMenu = menuTitle" href="/collections/bundles">
                                  Bundles
                                </a>
                              </li><li x-data="{ menuTitle: 'Limited Time' }">
                                <a class="block font-bold text-[25px]  text-left uppercase py-4 pl-8 w-full hover:bg-black hover:text-white transition" :class="{ 'bg-black text-white': selectedProductSubMenu ==  menuTitle }" @mouseenter="selectedProductSubMenu = menuTitle" @click="selectedProductSubMenu = menuTitle" href="/collections/limited-time-offers">
                                  Limited Time
                                </a>
                              </li></ul></div><div class="sub-nav-wide flex flex-col flex-1 md:flex-col lg:flex-row justify-center items-center" x-show="selectedProductSubMenu == 'chocolate'" style="">
                            <div class="class-1 flex flex-wrap flex-row justify-center gap-4 p-8 3xl:p-12">

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/birthday-cake-batter">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157" alt="Birthday Cake Batter" width="1214" height="2122" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Birthday Cake Batter</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/milk-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Milk_60g_Carton.png?v=1728500121&amp;width=157"  alt="Milk Chocolate King Size (60g) - USCL1003" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Chocolate</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/peanut-butter-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_PB_60g_Carton.png?v=1728500199&amp;width=157"  alt="Peanut Butter King Size (60g) - USCL1007" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/milk-crunch-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Milk_Crunch_60g_Carton.png?v=1728500159&amp;width=157"  alt="Milk Crunch King Size (60g) - USCL1006" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Crunch</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/peanut-butter-crunch-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_PBC_60g_Carton.png?v=1728500237&amp;width=157"  alt="Peanut Butter Crunch King Size (60g) - USCL1009" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Crunch</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/almond-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Almond_60g_Carton.png?v=1728499681&amp;width=157"  alt="Almond Chocolate King Size (60g) - USCL1001" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Almond</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/dark-chocolate">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Dark_60g_Carton.png?v=1728499954&amp;width=157"  alt="Dark Chocolate King Size (60g) - USCL1000" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Dark Chocolate</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/dark-chocolate-sea-salt">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Dark_SeaSalt_60g_Carton.png?v=1728500071&amp;width=157"  alt="Dark Chocolate Sea Salt King Size (60g) - USCL1004" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Dark Chocolate Sea Salt</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/cookies-creme">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_CookiesCreme_60g_Carton.png?v=1745519325&amp;width=157"  alt="Cookies &amp; Creme King Size (60g) - USCL1008" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Cookies &amp; Creme</p>
        </div>
      </a>
    </div></div></div><div class="sub-nav-wide flex flex-col flex-1 md:flex-col lg:flex-row justify-center items-center" x-show="selectedProductSubMenu == 'cups'" style="display: none;">
                            <div class="class-1 flex flex-wrap flex-row justify-center gap-4 p-8 3xl:p-12">

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/peanut-butter-cups">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Cups_PB_1ct.png?v=1741633576&amp;width=157" alt="Creamy Peanut Butter Cups (2 cups) - USCP2202" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Cups</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/hazelnut-cups">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Cups_HN_1ct.png?v=1750094979&amp;width=157"  alt="Hazelnut Cups" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Hazelnut Cups</p>
        </div>
      </a>
    </div></div></div><div class="sub-nav-wide flex flex-col flex-1 md:flex-col lg:flex-row justify-center items-center" x-show="selectedProductSubMenu == 'Bundles'" style="display: none;">
                            <div class="class-1 flex flex-wrap flex-row justify-center gap-4 p-8 3xl:p-12">

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/sampler-pack">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/SamplerPack_2x_4b677e6c-1a70-4407-8687-adbdc5431b15.png?v=1731697145&amp;width=157" alt="Sampler Pack" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Sampler Pack</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/milk-chocolate-pack">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=157" srcset="//feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=157, //feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=314 2x" alt="Milk Chocolate Pack" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Chocolate Pack</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/peanut-butter-pack">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=157" srcset="//feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=157, //feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=314 2x" alt="Peanut Butter Pack" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Pack</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/milk-crunch-pack">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=157" srcset="//feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=157, //feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=314 2x" alt="Milk Crunch Pack" width="2558" height="1334" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Crunch Pack</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/value-pack">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=157" srcset="//feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=157, //feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=314 2x" alt="Value Pack" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Value Pack</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/snack-size-variety-bag">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=157" srcset="//feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=157, //feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=314 2x" alt="Snack-Size Variety Bag" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Snack-Size Variety Bag</p>
        </div>
      </a>
    </div></div></div><div class="sub-nav-wide flex flex-col flex-1 md:flex-col lg:flex-row justify-center items-center" x-show="selectedProductSubMenu == 'Limited Time'" style="display: none;">
                            <div class="class-1 flex flex-wrap flex-row justify-center gap-4 p-8 3xl:p-12">

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/birthday-cake-batter">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157" srcset="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157, //feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=314 2x" alt="Birthday Cake Batter" width="1214" height="2122" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Birthday Cake Batter</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/mrbeast-x-jlab-head-phones">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=314 2x" alt="Headphones - MrBeast X JLAB" width="1410" height="1708" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Headphones - MrBeast X JLAB</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/beast-tower-headset-stand">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=314 2x" alt="Headset Stand - Beast Tower" width="1464" height="1464" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Headset Stand - Beast Tower</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/mrbeast-briefcase-collectors-edition">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=314 2x" alt="MrBeast Briefcase Collector's Edition" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">MrBeast Briefcase Collector's Edition</p>
        </div>
      </a>
    </div>

    <div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
      <a class="card-link block focus-visible:ring" href="/products/beast-games-box">
        <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">
          <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/BeastGamesBox.png?v=1733518794&amp;width=157" srcset="//feastables.com/cdn/shop/files/BeastGamesBox.png?v=1733518794&amp;width=157, //feastables.com/cdn/shop/files/BeastGamesBox.png?v=1733518794&amp;width=314 2x" alt="Beast Games Box" width="2535" height="2316" loading="lazy">
        </picture>
        <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
          <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Beast Games Box</p>
        </div>
      </a>
    </div></div></div></div>
                  </div>
                </li><li class="">
                    <a href="/customer-vehicles" class="tracking-[0.1em] font-black  text-sm text-customDark dark:text-customLight  text-center py-4 px-6 uppercase break-keep hover:font-extrabold  transition">Customer Vehicles</a>
                  </li>
                  <li class="">
                      <a href="/resources" class="tracking-[0.1em] font-black  text-sm text-customDark dark:text-customLight  text-center py-4 px-6 uppercase break-keep hover:font-extrabold  transition">Resources</a>
                    </li>
                    <li class="">
                        <a href="/about-us" class="tracking-[0.1em] font-black  text-sm text-customDark dark:text-customLight  text-center py-4 px-6 uppercase break-keep hover:font-extrabold  transition">About Us</a>
                      </li>
                      <li class="">
                          <a href="/request-a-quote" class="tracking-[0.1em] font-black text-sm text-customDark dark:text-customLight  text-center py-4 px-6 uppercase break-keep hover:font-extrabold  transition">Request a quote</a>
                        </li>
                </ul>

            </div>
            <div class="menu-main hidden items-center pr-12  sm:hidden md:flex lg:flex">
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
</div>
          </div>

        </header>
      </div>
</div>
