<section id="gallery-search-section" class="grid lg:w-1/2 mx-auto pb-10">
    <div class="extra-content">
        <h3 class="text-md font-semibold sr-only">Select Vehicle</h3>
        <div class="select-container flex flex-row gap-x-4">
            <select name="gallery_make" id="gallery_make" class="gallery-select w-full p-2 rounded-sm border border-stone-300 dark:border-stone-700 dark:text-customLightText dark:bg-customLightDark">
                <option value="">Select Make</option>
                <?php
                $parent_terms = get_terms([
                    'taxonomy'   => 'galleries',
                    'parent'     => 0,
                    'hide_empty' => true,
                ]);
                foreach ($parent_terms as $parent_term) {
                    echo '<option value="' . esc_attr($parent_term->term_id) . '" data-slug="' . esc_attr($parent_term->slug) . '">' . esc_html($parent_term->name) . '</option>';
                }
                ?>
            </select>

            <select name="gallery_model" id="gallery_model" class="gallery-select w-full p-2 rounded-sm border border-stone-300 dark:border-stone-700 dark:text-customLightText dark:bg-customLightDark" disabled>
                <option value="">Select Model</option>
            </select>
        </div>
    </div>
</section>
