<?php
function wheelsboutique_custom_pagination() {
    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;

    $big = 999999999; // an unlikely integer
    $current = max(1, get_query_var('paged'));

    $pages = paginate_links([
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => $current,
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array',
        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" class="size-5 mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/></svg> Previous',
        'next_text' => 'Next <svg xmlns="http://www.w3.org/2000/svg" class="size-5 ml-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>',
    ]);

    if (is_array($pages)) {
        echo '<nav aria-label="pagination" class="mt-10 flex justify-center"><ul class="inline-flex items-center gap-2 text-sm font-medium">';

        foreach ($pages as $page) {
            // Detect if it's current page
            $is_current = strpos($page, 'current') !== false;

            // Apply custom Tailwind classes
            $page = str_replace(
                ['page-numbers current', 'page-numbers dots', 'page-numbers'],
                [
                    'flex size-8 items-center justify-center rounded-full bg-customRed text-white font-bold dark:bg-customRed dark:text-customDark',
                    'flex size-8 items-center justify-center rounded-full text-slate-400 cursor-default',
                    'flex size-8 items-center justify-center rounded-full text-slate-600 hover:text-orange-400 dark:text-violet-100 dark:hover:text-lime-400'
                ],
                $page
            );

            echo "<li>$page</li>";
        }

        echo '</ul></nav>';
    }
}
