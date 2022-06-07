<?php
//load stylesheets 
function load_stylesheets()
{	
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Bootstrap Icons
function bsicons_enqueue_styles() 
{        
	wp_enqueue_style( 'booticons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css' );
}
add_action('wp_enqueue_scripts', 'bsicons_enqueue_styles');
// Animate Css
function animated_enqueue_styles() 
{        
	wp_enqueue_style( 'animated', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
}
add_action('wp_enqueue_scripts', 'animated_enqueue_styles');
// FontAwesome
function font_enqueue_styles() 
{        
	wp_enqueue_style( 'fonts', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
	'sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm' );
}
add_action('wp_enqueue_scripts', 'font_enqueue_styles');
//load scripts 
function addjs()
{
    wp_register_script('scripts',get_template_directory_uri(). '/js/script.js', array(),1,1,1);
    wp_enqueue_script('scripts');
	wp_register_script('404',get_template_directory_uri(). '/js/404.js', array(),1,1,1);
    wp_enqueue_script('404');
	wp_enqueue_style( 'fonts', 'https://use.fontawesome.com/releases/v5.15.4/js/all.js','sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc' );
	wp_enqueue_script('fonts');
	wp_enqueue_style( 'fontsolid', 'https://use.fontawesome.com/releases/v5.15.4/js/solid.js','sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc' );
	wp_enqueue_script('fontsolid');
	wp_enqueue_style( 'fontwesome', 'https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js','sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO' );
	wp_enqueue_script('fontwesome');
	
}
add_action('wp_enqueue_scripts', 'addjs');
function my_scripts_method() {
	// instead of "jquery-core" just "jquery", to disable jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	}
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
//Menu support
add_theme_support('menus');
//Register Menu
function register_all_my_menus(){
	register_nav_menus([
		"primary-menu" => "Primary Menu",
		"footer-menu" => "Footer Menu",
		"right-side" => "Right Side",
		"left-side" => "Left Side"
	]);
}
add_action("init","register_all_my_menus");
//Footer menu widget
function footer_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'strappress' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'strappress' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'strappress' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer copy', 'strappress' ),
		'id'            => 'footer-copy',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Social Nav', 'strappress' ),
		'id'            => 'social-nav',
		'description'   => esc_html__( 'Add widgets here.', 'strappress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'footer_widgets_init' );

// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');