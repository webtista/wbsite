<?php get_header(); ?>


<!-- Hero Section -->
 <section class="bg-cover bg-center h-[700px] text-white flex items-center justify-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/revueltowebp.webp');"
>
   <div class="text-center px-4 bg-black/50 py-6 rounded">
     <h1 class="text-4xl md:text-6xl font-bold mb-4 font-specialgothic">Luxury Wheels for Supercars</h1>
     <p class="text-lg mb-6">Performance, Precision, Prestige — Delivered Worldwide</p>
     <a href="/wheels" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-full text-lg">Shop Now</a>
   </div>
 </section>

 <!-- Brands We Carry -->
 <section class="py-16 bg-customLight dark:bg-customDark">
   <div class="container mx-auto text-center">
     <h2 class="text-3xl font-bold mb-8 font-specialgothic">Brands We Carry</h2>
     <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 items-center">
       <img src="https://placehold.co/150x60?text=HRE" alt="HRE Wheels" class="mx-auto">
       <img src="https://placehold.co/150x60?text=ANRKY" alt="ANRKY Wheels" class="mx-auto">
       <img src="https://placehold.co/150x60?text=VOSSEN" alt="Vossen Wheels" class="mx-auto">
       <img src="https://placehold.co/150x60?text=BRIXTON" alt="Brixton Forged" class="mx-auto">
     </div>
   </div>
 </section>

 <!-- Categories -->
 <section class="py-16">
   <div class="container mx-auto text-center font-specialgothic">
     <h2 class="text-3xl font-bold mb-10">Explore By Category</h2>
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
       <a href="/wheels/forged" class="block rounded overflow-hidden shadow hover:shadow-lg">
         <img src="https://placehold.co/480x300?text=Forged+Wheels" alt="Forged Wheels" class="w-full object-cover">
         <div class="p-4 font-semibold">Forged Wheels</div>
       </a>
       <a href="/wheels/monoblock" class="block rounded overflow-hidden shadow hover:shadow-lg">
         <img src="https://placehold.co/480x300?text=Monoblock" alt="Monoblock Wheels" class="w-full object-cover">
         <div class="p-4 font-semibold">Monoblock</div>
       </a>
       <a href="/wheels/offroad" class="block rounded overflow-hidden shadow hover:shadow-lg">
         <img src="https://placehold.co/480x300?text=Offroad" alt="Offroad Wheels" class="w-full object-cover">
         <div class="p-4 font-semibold">Off-Road</div>
       </a>
       <a href="/wheels/luxury" class="block rounded overflow-hidden shadow hover:shadow-lg">
         <img src="https://placehold.co/480x300?text=Luxury" alt="Luxury Wheels" class="w-full object-cover">
         <div class="p-4 font-semibold">Luxury</div>
       </a>
     </div>
   </div>
 </section>

 <!-- Vehicle Gallery -->
 <section class="py-16 bg-customLight dark:bg-customDark">
   <div class="container mx-auto text-center">
     <h2 class="text-3xl font-bold mb-8 font-specialgothic font-specialgothic">Customer Vehicle Gallery</h2>
     <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
       <a href="/customer-cars/lamborghini/urus" class="block">
         <img src="https://placehold.co/480x300?text=Urus+on+HRE" alt="Lamborghini Urus on HRE" class="rounded-xl">
         <p class="mt-2 font-medium">Lamborghini Urus on HRE S111</p>
       </a>
       <a href="/customer-cars/mclaren/720s" class="block">
         <img src="https://placehold.co/480x300?text=720S+on+ANRKY" alt="McLaren 720S on ANRKY" class="rounded-xl">
         <p class="mt-2 font-medium">McLaren 720S on ANRKY RS3</p>
       </a>
       <a href="/customer-cars/porsche/911" class="block">
         <img src="https://placehold.co/480x300?text=911+on+Vossen" alt="Porsche 911 Turbo on Vossen" class="rounded-xl">
         <p class="mt-2 font-medium">Porsche 911 Turbo on Vossen HF-7</p>
       </a>
     </div>
     <div class="mt-8">
       <a href="/gallery" class="bg-customRed hover:underline text-lg">View Full Gallery →</a>
     </div>
   </div>
 </section>

 <!-- Why Choose Us -->
 <section class="py-16">
   <div class="container mx-auto text-center">
     <h2 class="text-3xl font-bold mb-8 font-specialgothic">Why Choose Wheels Boutique?</h2>
     <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
       <div>
         <h3 class="text-xl font-semibold mb-2">20+ Years Experience</h3>
         <p>Trusted by enthusiasts and professionals worldwide since 1999.</p>
       </div>
       <div>
         <h3 class="text-xl font-semibold mb-2">Global Shipping</h3>
         <p>We deliver to over 50 countries with white-glove service.</p>
       </div>
       <div>
         <h3 class="text-xl font-semibold mb-2">Custom Fitment Experts</h3>
         <p>Every set is precisely tailored for your car’s specs and style.</p>
       </div>
     </div>
   </div>
 </section>

 <!-- Testimonials -->
 <section class="py-16 bg-customLight dark:bg-customDark">
   <div class="container mx-auto text-center">
     <h2 class="text-3xl font-bold mb-8 font-specialgothic">What Clients Say</h2>
     <blockquote class="italic text-lg max-w-2xl mx-auto">“Wheels Boutique transformed my Ferrari’s look completely. Fast shipping, amazing service.”<br><span class="block mt-4 font-semibold">– James M., Miami</span></blockquote>
   </div>
 </section>

<?php get_footer(); ?>
