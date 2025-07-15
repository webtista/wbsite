<div class="block sm:hidden sticky top-0 left-0 z-20"><header x-data="{
    isOpen: false,
    isHovering: false,
    selectedProductSubMenu: 'chocolate',
    isHamburgerOpen: false,
    isMobileCountrySelectorOpen: false,
  }" class="layout-header-container z-10">
  <div x-show="isOpen" x-transition="" class="fixed inset-0 bg-black/50 -z-1 pointer-events-none" style="display: none;">
  </div>
  <div
    x-data="{ navHeight: 0, isHamburgerOpen: false, navHidden: false }"
    x-init="$nextTick(() => { navHeight = $el.offsetHeight })"
    x-trap.inert.noscroll="isHamburgerOpen"
    :class="{ '-translate-y-full': navHidden }"
    class="layout-header bg-customLight relative z-1 transition-transform duration-500 xl:hover:!translate-y-0 xl:focus-within:!translate-y-0"
  >
    <div x-show="false" class="layout-header-load-spacer h-[75px] w-full border-b-4 border-black border-soild" style="display: none;"></div>


<div class="grid grid-cols-3 h-[75px] w-full border-b-4 border-black border-soild">
        <div class="menu-toggle col-span-1 flex justify-start items-center relative">
          <button
            @click="isHamburgerOpen = !isHamburgerOpen"
            x-cloak
            class="block lg:hidden col-span-1 flex items-center justify-center p-3 w-[60px] h-[60px]"
          >
            <span class="sr-only">Toggle Menu</span>

            <!-- Hamburger (shown when closed) -->
            <div x-show="!isHamburgerOpen" x-transition>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10 text-current"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </div>

            <!-- X (shown when open) -->
            <div x-show="isHamburgerOpen" x-transition>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-8 h-8 text-current"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </div>
          </button>
        </div>
        <div class="menu-logo col-span-1 flex justify-center items-center relative">
          <a href="/" class="text-2xl font-bold text-purple-800 dark:text-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/wblogo.webp"
                 alt="wheels boutique brand logo"
                 class="w-70" />
          </a>
        </div><div class="layout-header-dropdown p-2 ray-background absolute inset-x-0 top-full z-2 bg-customLight h-[calc(100dvh_-_75px)] overflow-auto" x-show="isHamburgerOpen" style="display: none;">
          <div class="bg-off-white border-4 border-black rounded-lg">
            <ul>
              <li x-data="{ isOpen: true }">
                <button class="pl-[28px] py-4 w-full font-bold flex justify-between items-center uppercase border-b-[2px] border-solid border-black bg-black" aria-label="Open Shop Menu" @click="isOpen = !isOpen">
                  <div class="italic uppercase text-[18px] text-white">SHOP</div>
                  <div class="accordion-icon transition duration-150 ease-in-out flex items-center mr-4 -scale-y-100" :class="{ '-scale-y-100': isOpen }">
<svg class="icon icon--chevron-down group text-white w-4 h-4" aria-hidden="true">
  <use xlink:href="#chevron-down" class="text-white w-4 h-4 group:fill-inherit group:stroke-inherit">
  </use>
</svg>
</div>
                </button>
                <ul class="sub-menu" x-show="isOpen"><li>
                        <div x-data="{ isOpen: false }">
                          <button class="w-full font-bold flex justify-between items-center uppercase py-4 pl-[36px] border-b-2 border-black" @click="isOpen = !isOpen" aria-label="Open Get To Know Us Menu">
                            <div class="pl-4 italic uppercase text-lg">chocolate</div>
                            <div class="accordion-icon transition duration-150 ease-in-out flex items-center  mr-4" :class="{ '-scale-y-100': isOpen }">
<svg class="icon icon--chevron-down group w-4 h-4" aria-hidden="true">
  <use xlink:href="#chevron-down" class="w-4 h-4 group:fill-inherit group:stroke-inherit">
  </use>
</svg>
</div>
                          </button>
                          <div class="text-black text-sm border-b-2 border-black py-2" x-show="isOpen" style="display: none;">
                            <div class="flex flex-wrap justify-center max-w-screen-400 sm:max-w-screen-sm lg:max-w-screen-xl mx-auto px-4"><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/birthday-cake-batter">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157" srcset="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157, //feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=314 2x" alt="Birthday Cake Batter" width="1214" height="2122" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Birthday Cake Batter</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/milk-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Milk_60g_Carton.png?v=1728500121&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_Milk_60g_Carton.png?v=1728500121&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_Milk_60g_Carton.png?v=1728500121&amp;width=314 2x" alt="Milk Chocolate King Size (60g) - USCL1003" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Chocolate</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/peanut-butter-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_PB_60g_Carton.png?v=1728500199&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_PB_60g_Carton.png?v=1728500199&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_PB_60g_Carton.png?v=1728500199&amp;width=314 2x" alt="Peanut Butter King Size (60g) - USCL1007" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/milk-crunch-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Milk_Crunch_60g_Carton.png?v=1728500159&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_Milk_Crunch_60g_Carton.png?v=1728500159&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_Milk_Crunch_60g_Carton.png?v=1728500159&amp;width=314 2x" alt="Milk Crunch King Size (60g) - USCL1006" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Crunch</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/peanut-butter-crunch-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_PBC_60g_Carton.png?v=1728500237&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_PBC_60g_Carton.png?v=1728500237&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_PBC_60g_Carton.png?v=1728500237&amp;width=314 2x" alt="Peanut Butter Crunch King Size (60g) - USCL1009" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Crunch</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/almond-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Almond_60g_Carton.png?v=1728499681&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_Almond_60g_Carton.png?v=1728499681&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_Almond_60g_Carton.png?v=1728499681&amp;width=314 2x" alt="Almond Chocolate King Size (60g) - USCL1001" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Almond</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/dark-chocolate">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Dark_60g_Carton.png?v=1728499954&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_Dark_60g_Carton.png?v=1728499954&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_Dark_60g_Carton.png?v=1728499954&amp;width=314 2x" alt="Dark Chocolate King Size (60g) - USCL1000" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Dark Chocolate</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/dark-chocolate-sea-salt">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_Dark_SeaSalt_60g_Carton.png?v=1728500071&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_Dark_SeaSalt_60g_Carton.png?v=1728500071&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_Dark_SeaSalt_60g_Carton.png?v=1728500071&amp;width=314 2x" alt="Dark Chocolate Sea Salt King Size (60g) - USCL1004" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Dark Chocolate Sea Salt</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/cookies-creme">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Chocolate_CookiesCreme_60g_Carton.png?v=1745519325&amp;width=157" srcset="//feastables.com/cdn/shop/files/Chocolate_CookiesCreme_60g_Carton.png?v=1745519325&amp;width=157, //feastables.com/cdn/shop/files/Chocolate_CookiesCreme_60g_Carton.png?v=1745519325&amp;width=314 2x" alt="Cookies &amp; Creme King Size (60g) - USCL1008" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Cookies &amp; Creme</p>
    </div>
  </a>
</div></div></div></div>
                        </div>
                      </li><li>
                        <div x-data="{ isOpen: false }">
                          <button class="w-full font-bold flex justify-between items-center uppercase py-4 pl-[36px] border-b-2 border-black" @click="isOpen = !isOpen" aria-label="Open Get To Know Us Menu">
                            <div class="pl-4 italic uppercase text-lg">cups</div>
                            <div class="accordion-icon transition duration-150 ease-in-out flex items-center  mr-4" :class="{ '-scale-y-100': isOpen }">
<svg class="icon icon--chevron-down group w-4 h-4" aria-hidden="true">
  <use xlink:href="#chevron-down" class="w-4 h-4 group:fill-inherit group:stroke-inherit">
  </use>
</svg>
</div>
                          </button>
                          <div class="text-black text-sm border-b-2 border-black py-2" x-show="isOpen" style="display: none;">
                            <div class="flex flex-wrap justify-center max-w-screen-400 sm:max-w-screen-sm lg:max-w-screen-xl mx-auto px-4"><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/peanut-butter-cups">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Cups_PB_1ct.png?v=1741633576&amp;width=157" srcset="//feastables.com/cdn/shop/files/Cups_PB_1ct.png?v=1741633576&amp;width=157, //feastables.com/cdn/shop/files/Cups_PB_1ct.png?v=1741633576&amp;width=314 2x" alt="Creamy Peanut Butter Cups (2 cups) - USCP2202" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Cups</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/hazelnut-cups">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Cups_HN_1ct.png?v=1750094979&amp;width=157" srcset="//feastables.com/cdn/shop/files/Cups_HN_1ct.png?v=1750094979&amp;width=157, //feastables.com/cdn/shop/files/Cups_HN_1ct.png?v=1750094979&amp;width=314 2x" alt="Hazelnut Cups" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Hazelnut Cups</p>
    </div>
  </a>
</div></div></div></div>
                        </div>
                      </li><li>
                        <div x-data="{ isOpen: false }">
                          <button class="w-full font-bold flex justify-between items-center uppercase py-4 pl-[36px] border-b-2 border-black" @click="isOpen = !isOpen" aria-label="Open Get To Know Us Menu">
                            <div class="pl-4 italic uppercase text-lg">Bundles</div>
                            <div class="accordion-icon transition duration-150 ease-in-out flex items-center  mr-4" :class="{ '-scale-y-100': isOpen }">
<svg class="icon icon--chevron-down group w-4 h-4" aria-hidden="true">
  <use xlink:href="#chevron-down" class="w-4 h-4 group:fill-inherit group:stroke-inherit">
  </use>
</svg>
</div>
                          </button>
                          <div class="text-black text-sm border-b-2 border-black py-2" x-show="isOpen" style="display: none;">
                            <div class="flex flex-wrap justify-center max-w-screen-400 sm:max-w-screen-sm lg:max-w-screen-xl mx-auto px-4"><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/sampler-pack">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/SamplerPack_2x_4b677e6c-1a70-4407-8687-adbdc5431b15.png?v=1731697145&amp;width=157" srcset="//feastables.com/cdn/shop/files/SamplerPack_2x_4b677e6c-1a70-4407-8687-adbdc5431b15.png?v=1731697145&amp;width=157, //feastables.com/cdn/shop/files/SamplerPack_2x_4b677e6c-1a70-4407-8687-adbdc5431b15.png?v=1731697145&amp;width=314 2x" alt="Sampler Pack" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Sampler Pack</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/milk-chocolate-pack">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=157" srcset="//feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=157, //feastables.com/cdn/shop/files/MilkChocolate_35g_5ct_2x_1dd90a89-8c1f-4a3d-bd7e-8627a0b521f7.png?v=1731697434&amp;width=314 2x" alt="Milk Chocolate Pack" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Chocolate Pack</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/peanut-butter-pack">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=157" srcset="//feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=157, //feastables.com/cdn/shop/files/PeanutButter_35g_5ct_2x_d1f3ad09-b276-430f-9519-bc830077cafd.png?v=1731697205&amp;width=314 2x" alt="Peanut Butter Pack" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Peanut Butter Pack</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/milk-crunch-pack">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=157" srcset="//feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=157, //feastables.com/cdn/shop/files/Milk-Crunch-5-Pack-PDP-Main.png?v=1744742328&amp;width=314 2x" alt="Milk Crunch Pack" width="2558" height="1334" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Milk Crunch Pack</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/value-pack">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=157" srcset="//feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=157, //feastables.com/cdn/shop/files/ValuePack.png?v=1721672593&amp;width=314 2x" alt="Value Pack" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Value Pack</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/snack-size-variety-bag">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=157" srcset="//feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=157, //feastables.com/cdn/shop/files/VarietyBag_35g_28ct_22264843-38f5-41b0-91c6-34a703836bcd.png?v=1738879647&amp;width=314 2x" alt="Snack-Size Variety Bag" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Snack-Size Variety Bag</p>
    </div>
  </a>
</div></div></div></div>
                        </div>
                      </li><li>
                        <div x-data="{ isOpen: false }">
                          <button class="w-full font-bold flex justify-between items-center uppercase py-4 pl-[36px] border-b-2 border-black" @click="isOpen = !isOpen" aria-label="Open Get To Know Us Menu">
                            <div class="pl-4 italic uppercase text-lg">Limited Time</div>
                            <div class="accordion-icon transition duration-150 ease-in-out flex items-center  mr-4" :class="{ '-scale-y-100': isOpen }">
<svg class="icon icon--chevron-down group w-4 h-4" aria-hidden="true">
  <use xlink:href="#chevron-down" class="w-4 h-4 group:fill-inherit group:stroke-inherit">
  </use>
</svg>
</div>
                          </button>
                          <div class="text-black text-sm border-b-2 border-black py-2" x-show="isOpen" style="display: none;">
                            <div class="flex flex-wrap justify-center max-w-screen-400 sm:max-w-screen-sm lg:max-w-screen-xl mx-auto px-4"><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/birthday-cake-batter">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157" srcset="//feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=157, //feastables.com/cdn/shop/files/Feastables_Jan2025_CartonOpen_BirthdayCakeBatter_Mockup_v5.png?v=1744822939&amp;width=314 2x" alt="Birthday Cake Batter" width="1214" height="2122" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Birthday Cake Batter</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/mrbeast-x-jlab-head-phones">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_x_JLAB_Headphones_Main.png?v=1742840204&amp;width=314 2x" alt="Headphones - MrBeast X JLAB" width="1410" height="1708" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Headphones - MrBeast X JLAB</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/beast-tower-headset-stand">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_Headset_Stand_Main.png?v=1742840184&amp;width=314 2x" alt="Headset Stand - Beast Tower" width="1464" height="1464" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">Headset Stand - Beast Tower</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

<div class="card card-product bg-off-white border-4 border-black rounded-[14px] overflow-hidden w-[200px] hover:drop-shadow-[5px_6px_0_#000000] focus:drop-shadow-[5px_6px_0_#000000] transition ease-in duration-100">
  <a class="card-link block focus-visible:ring" href="/products/mrbeast-briefcase-collectors-edition">
    <picture class="card-media block w-full aspect-[1/0.75] bg-customLight wave-edge-b p-4 mb-[10%]">

      <img class="w-full h-full object-contain object-center" src="//feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=157" srcset="//feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=157, //feastables.com/cdn/shop/files/MrBeast_Briefcase_1.png?v=1733425566&amp;width=314 2x" alt="MrBeast Briefcase Collector's Edition" width="2535" height="2316" loading="lazy">
    </picture>
    <div class="card-content text-center py-2 px-3 p-3 lg:py-4 lg:px-6">
      <p class="card-product-tile font-bold lg:font-extrabold text-base lg:text-2xl leading-none lg:leading-none uppercase mb-1">MrBeast Briefcase Collector's Edition</p>
    </div>
  </a>
</div></div><div class="p-2 w-1/2 sm:w-[200px] flex">

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
                      </li></ul>
              </li><li class="py-4 pl-3 last:mb-0 w-full hover:text-white border-b-2 border-black last:border-b-0">
                  <a href="" class="font-bold text-[18px] italic text-center pl-4 uppercase" target="_blank">
                    Ethical Sourcing
                  </a>
                </li></ul></div>
        </div>
      </div>




  </div>

</header>

</div>
