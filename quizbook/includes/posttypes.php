<?php 
if (! defined('ABSPATH')) exit;

/**
 *CREA POST TYPE QUIZ 
 */
  
 	if(! function_exists('bwc_quiz_post_type'))
 	{

 		function bwc_quiz_post_type()
 		{
 			$singular    = 'Quiz';
 			$plural      = 'Quizes';
 			$minuscula   = strtolower($singular);
 			$text_domain = 'quizbook';

 			$labels = array(
 				'name'                  => _x( $plural, 'Post Type General Name', $text_domain ),
 				'singular_name'         => _x( $singular, 'Post Type Singular Name', $text_domain ),
 				'menu_name'             => __( $plural, $text_domain ),
 				'name_admin_bar'        => __( $plural, $text_domain ),
 				'parent_item_colon'     => __( $singular.' Padre:', $text_domain ),
 				'all_items'             => __( 'Todas las '.$plural, $text_domain ),
 				'add_new_item'          => __( 'Agregar Nuevo '.$singular, $text_domain ),
 				'add_new'               => __( 'Agregar Nuevo '.$singular, $text_domain ),
 				'new_item'              => __( 'Nuevo '.$singular, $text_domain ),
 				'edit_item'             => __( 'Editar '.$singular, $text_domain ),
 				'update_item'           => __( 'Actualizar '.$singular, $text_domain ),
 				'view_item'             => __( 'Ver '.$singular, $text_domain ),
 				'view_items'            => __( 'Ver '.$plural, $text_domain ),
 				'search_items'          => __( 'Buscar '.$singular, $text_domain ),
 				'not_found'             => __( 'No se encontraron '.$plural, $text_domain ),
 				'not_found_in_trash'    => __( 'No hay '.$plural.' en la papelera', $text_domain ),
 				'featured_image'        => __( 'Imagen Destacada', $text_domain ),
 				'set_featured_image'    => _x( 'Añadir imagen destacada', '', $text_domain ),
 				'remove_featured_image' => _x( 'Borrar imagen', '', $text_domain ),
 				'use_featured_image'    => _x( 'Usar como imagen', '', $text_domain ),
 				'archives'              => _x( 'Quizes Archivo', '', $text_domain ),
 				'insert_into_item'      => _x( 'Insertar en Quiz', '', $text_domain ),
 				'uploaded_to_this_item' => _x( 'Cargado en este Quiz', '', $text_domain ),
 				'filter_items_list'     => _x( 'Filtrar Quizes por lista', '”. Added in 4.4', $text_domain ),
 				'items_list_navigation' => _x( 'Navegación de Quizes', '', $text_domain ),
 				'items_list'            => _x( 'Lista de Quizes', '', $text_domain ),
 			);
 			$args = array(
 				'label'                 => __( $minuscula, $text_domain ),
 				'description'           => __( 'Recetas para cocina', $text_domain ),
 				'labels'                => $labels,
 				'supports'              => ['title','editor'],
 				'taxonomies'            => [ 'category', 'post_tag' ],
 				'hierarchical'          => false,
 				'public'                => true,
 				'show_ui'               => true,
 				'show_in_menu'          => true,
 				'menu_icon'             => 'dashicons-welcome-learn-more',
 				'rewrite'               => ['slug'  =>  'quiz'],
 				'menu_position'         => 5,
 				'show_in_admin_bar'     => true,
 				'show_in_nav_menus'     => true,
 				'can_export'            => true,
 				'has_archive'           => true,		
 				'exclude_from_search'   => false,
 				'publicly_queryable'    => true,
 				'capability_type'       => ['quiz','quizes'],
 				'query_var'             => true,
 				'map_meta_cap'          => true,
 			);
 			register_post_type( $minuscula, $args );
 			
 		}

 	}
 	add_action('init','bwc_quiz_post_type' );
 	
/**
 *REGENERA HTACCESS 
 */
  
	if(!function_exists('bwc_rewrite_flush'))
	{
		function bwc_rewrite_flush()
		{
			bwc_quiz_post_type();
			flush_rewrite_rules();
		}
	}


	