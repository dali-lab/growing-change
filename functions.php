<?php
	
	// Start it up
	add_action( 'after_setup_theme', 'xx_initiate' );

	function xx_initiate()
	{
		// Register menus
		register_nav_menus(
				array(
					'main-nav' => __( 'Header Menu' ),
					'bottom-nav' => __( 'Footer Menu' )
				)
		);
		
		// Make sidebars
		if (function_exists('register_sidebar'))
		{
			register_sidebar(array(
				'name' => 'left side',
				'before_widget' => '<div>',
				'after_widget' => '</div>'				
			));
			
			register_sidebar(array(
				'name' => 'top',
				'before_widget' => '<div>',
				'after_widget' => '</div>'				
			));
			
			register_sidebar(array(
				'name' => 'bottom',
				'before_widget' => '<div>',
				'after_widget' => '</div>'
			));
			
			register_sidebar(array(
				'name' => 'logo',
				'before_widget' => '<div>',
				'after_widget' => '</div>'
			));
		}
		
		// enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'xx_scriptsAndStyles', 999);
		
	}

	function xx_scriptsAndStyles()
	{
			// Load jQuery
			wp_enqueue_script('jquery');
			
			// Add bootstrap
			wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array(), null, false );
			wp_enqueue_style( 'reset_css', get_stylesheet_directory_uri() . '/bootstrap/css/reset.css', array(), null, null );
			wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '3.0', null );
	
			
			// Add my custom CSS
			wp_enqueue_style( 'my_css', get_stylesheet_directory_uri() . '/lib/styles.css', array(), '', null );
	}

		
	function xx_initiateMainNav()
	{
		wp_nav_menu(array(
			'theme_location' => 'main-nav',
			'container' => false,
			'menu_class' => 'nav navbar-nav',
			'walker' => new CSS_Menu_Maker_Walker()
			
		));
	}
	
	function xx_initiateBottomNav()
	{
		wp_nav_menu(array(
			'theme_location' => 'bottom-nav',
			'container' => false,
			'menu_class' => 'bottom-nav'
			
			
		));
	}
	
	function xx_initiateSidebar()
	{
		dynamic_sidebar('left side');
	}
	
	function xx_initiateTop()
	{
		dynamic_sidebar('top');
	}

	function xx_initiateBottom()
	{
		dynamic_sidebar('bottom');
	}
	
	function xx_initiateLogo()
	{
		dynamic_sidebar('logo');
	}
	
	
	
		class My_Walker_Nav_Menu extends Walker_Nav_Menu {
		function start_lvl(&$output, $depth) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"dropdown-menu\">\n";
		}
	}
	
	class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown\">\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
?>
