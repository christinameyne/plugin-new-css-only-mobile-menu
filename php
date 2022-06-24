// Register New Mobile Menu Area
genesis_register_sidebar( array(
	'id'          => 'new-mobile-menu',
	'name'        => __( 'New Mobile Menu', 'two-loves' ),
	'description' => __( 'This is the spot for the new mobile menu.', 'two-loves' ),
) );

//* Hook the new mobile menu area
add_action( 'genesis_before_header', 'new_mobile_menu_widget_area', 1 ); 
function new_mobile_menu_widget_area() {
	genesis_widget_area( 'new-mobile-menu', array(
		'before' => '<div class="mobile-menu widget-area" id="NewMobileMenu"><input type="checkbox" /><span></span><span></span><span></span><div class="inner">',
		'after'  => '</div></div>',
	) );
}
