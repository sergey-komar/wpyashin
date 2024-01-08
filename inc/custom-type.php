<?php

// Регистрируем новый тип записей 
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => __('Новости'), // Основное название типа записи
			'singular_name'      => __('Новости'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Новости'),
			'add_new_item'       => __('Добавить новые Новости'),
			'edit_item'          => __('Редактировать Новости'),
			'new_item'           => __('Новые Новости'),
			'view_item'          => __('Посмотреть Новости'),
			'search_items'       => __('Найти Новости'),
			'not_found'          => __('Новости не найдено'),
			'not_found_in_trash' => __('Новости не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Новости')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );


    register_post_type('events', array(
		'labels'             => array(
			'name'               => __('Мероприятия'), // Основное название типа записи
			'singular_name'      => __('Мероприятия'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Мероприятия'),
			'add_new_item'       => __('Добавить новые Мероприятия'),
			'edit_item'          => __('Редактировать Мероприятия'),
			'new_item'           => __('Новые Мероприятия'),
			'view_item'          => __('Посмотреть Мероприятия'),
			'search_items'       => __('Найти Мероприятия'),
			'not_found'          => __('Мероприятия не найдено'),
			'not_found_in_trash' => __('Мероприятия не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Мероприятия')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );


    register_post_type('trainer', array(
		'labels'             => array(
			'name'               => __('Тренеры'), // Основное название типа записи
			'singular_name'      => __('Тренеры'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Тренеры'),
			'add_new_item'       => __('Добавить новые Тренеры'),
			'edit_item'          => __('Редактировать Тренеры'),
			'new_item'           => __('Новые Тренеры'),
			'view_item'          => __('Посмотреть Тренеры'),
			'search_items'       => __('Найти Тренеры'),
			'not_found'          => __('Тренеры не найдено'),
			'not_found_in_trash' => __('Тренеры не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Тренеры')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );


}