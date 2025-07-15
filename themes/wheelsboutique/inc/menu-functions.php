<?php

function wheelsboutique_theme_setup() {
    // Enable theme support for menus
    add_theme_support('menus');
}
add_action('after_setup_theme', 'wheelsboutique_theme_setup');






class Tailwind_Nav_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"absolute hidden bg-customLight dark:bg-customDark rounded-md shadow-lg py-2 z-50 group-hover:block items-center gap-4\">\n";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $classes = empty( $item->classes ) ? [] : (array) $item->classes;
    $classes[] = 'relative group';

    $class_names = join( ' ', array_filter( $classes ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';

    $output .= '<li' . $class_names . '>';

    $attributes = ' class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700"';

    $title = apply_filters( 'the_title', $item->title, $item->ID );
    $url = esc_url( $item->url );
    $output .= "<a href=\"{$url}\"{$attributes}>{$title}</a>";
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $output .= "</li>\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $output .= "</ul>\n";
  }
}
