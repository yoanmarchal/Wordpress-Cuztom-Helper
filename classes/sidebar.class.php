<?php

/**
 * Registers sidebars
 *
 * @author Gijs Jorissen
 * @since 0.5
 *
 */
class Cuztom_Sidebar
{
	var $sidebar_name;
	var $sidebar_id;
	var $sidebar_description;
	var $before_widget;
	var $after_widget;
	var $before_title;
	var $after_title;
	
	
	/**
	 * Constructor
	 *
	 * @param string $name
	 * @param string $description
	 * @param string $before_widget
	 * @param string $after_widget
	 * @param string $before_title
	 * @param string $after_title
	 *
	 * @author Gijs Jorissen
	 * @since 0.5
	 *
	 */
	function __construct( $name, $id, $description = '', $before_widget = '', $after_widget = '', $before_title = '', $after_title = '' )
	{
		$this->sidebar_name = Cuztom::beautify( $name );
		$this->sidebar_id = Cuztom::uglify( $id );
		$this->sidebar_description = $description;
		$this->before_widget = $before_widget;
		$this->after_widget = $after_widget;
		$this->before_title = $before_title;
		$this->after_title = $after_title;
		
		add_action( 'init', array( $this, 'register_sidebar' ) );
	}
	
	
	/**
	 * Register the Sidebar
	 *
	 * @author Gijs Jorissen
	 * @since 0.1
	 *
	 */
	function register_sidebar()
	{
		register_sidebar( array(
			'name' => $this->sidebar_name,
			'id' => $this->sidebar_id,
			'description' => $this->sidebar_description,
			'before_widget' => $this->before_widget,
			'after_widget' => $this->after_widget,
			'before_title' => $this->before_title,
			'after_title' => $this->after_title,
		) );
	}
}

?>