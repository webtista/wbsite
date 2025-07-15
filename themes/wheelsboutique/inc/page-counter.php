<?php
function wheelsboutique_page_counter() {
    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;

    $current_page = max(1, get_query_var('paged'));
    $total_pages  = $wp_query->max_num_pages;
    $total_posts  = $wp_query->found_posts;

    $prev_link = $current_page > 1
        ? get_pagenum_link($current_page - 1)
        : null;

    $next_link = $current_page < $total_pages
        ? get_pagenum_link($current_page + 1)
        : null;

    echo '<div class="mb-4 flex items-center justify-between text-sm text-slate-600 dark:text-customLightText">';

    // Left Arrow
    if ($prev_link) {
        echo '<a href="' . esc_url($prev_link) . '" class="px-2 py-1 rounded hover:text-customRed dark:hover:text-customRed" aria-label="Previous Page">← Previous</a>';
    } else {
        echo '<span class="px-2 py-1 rounded text-slate-400 dark:text-slate-600 cursor-not-allowed" aria-disabled="true">←</span>';
    }

    // Page Info
    echo '<div class="text-right">';
    echo 'Page <strong>' . $current_page . '</strong> of <strong>' . $total_pages . '</strong>';

    echo '</div>';

    // Right Arrow
    if ($next_link) {
        echo '<a href="' . esc_url($next_link) . '" class="px-2 py-1 rounded hover:text-customRed dark:hover:text-customRed" aria-label="Next Page">Next →</a>';
    } else {
        echo '<span class="px-2 py-1 rounded text-slate-400 dark:text-slate-600 cursor-not-allowed" aria-disabled="true"></span>';
    }

    echo '</div>';
}
