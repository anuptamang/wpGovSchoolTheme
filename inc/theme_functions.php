<?php
// Theme functions

// make category use parent category template
function load_cat_parent_template($template) {

    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );

    $templates = array();

    if ( !is_wp_error($category) )
        $templates[] = "category-{$category->slug}.php";

    $templates[] = "category-$cat_ID.php";

    // trace back the parent hierarchy and locate a template
    if ( !is_wp_error($category) ) {
        $category = $category->parent ? get_category($category->parent) : '';

        if( !empty($category) ) {
            if ( !is_wp_error($category) )
                $templates[] = "category-{$category->slug}.php";

            $templates[] = "category-{$category->term_id}.php";
        }
    }

    $templates[] = "category.php";
    $template = locate_template($templates);

    return $template;
}
add_action('category_template', 'load_cat_parent_template');

add_action( 'back_button', 'theme_back_button' );
function theme_back_button()
{
    if ( wp_get_referer() )
    {
        $back_text = __( '<span class="icon-arrow-up"></span> पछाडि फर्कनुस' );
        $button    = "\n<button class='btn btn-primary btn-sm no-after-icon mb-6 btn-back' onclick='javascript:history.back()'>$back_text</button>";
        echo ( $button );
    }
}


