<?php

// Регистрируем новый тип записей 
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => __('О школе'), // Основное название типа записи
			'singular_name'      => __('О школе'), // отдельное название записи типа Book
			'add_new'            => __('Добавить О школе'),
			'add_new_item'       => __('Добавить новые О школе'),
			'edit_item'          => __('Редактировать О школе'),
			'new_item'           => __('Новые О школе'),
			'view_item'          => __('Посмотреть О школе'),
			'search_items'       => __('Найти О школе'),
			'not_found'          => __('О школе не найдено'),
			'not_found_in_trash' => __('О школе не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('О школе')

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


	register_post_type('intensives', array(
		'labels'             => array(
			'name'               => __('Интенсивы'), // Основное название типа записи
			'singular_name'      => __('Интенсивы'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Интенсивы'),
			'add_new_item'       => __('Добавить новые Интенсивы'),
			'edit_item'          => __('Редактировать Интенсивы'),
			'new_item'           => __('Новые Интенсивы'),
			'view_item'          => __('Посмотреть Интенсивы'),
			'search_items'       => __('Найти Интенсивы'),
			'not_found'          => __('Интенсивы не найдено'),
			'not_found_in_trash' => __('Интенсивы не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Интенсивы')

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


	register_post_type('yashincup', array(
		'labels'             => array(
			'name'               => __('YASHINCUP'), // Основное название типа записи
			'singular_name'      => __('YASHINCUP'), // отдельное название записи типа Book
			'add_new'            => __('Добавить YASHINCUP'),
			'add_new_item'       => __('Добавить новые YASHINCUP'),
			'edit_item'          => __('Редактировать YASHINCUP'),
			'new_item'           => __('Новые YASHINCUP'),
			'view_item'          => __('Посмотреть YASHINCUP'),
			'search_items'       => __('Найти YASHINCUP'),
			'not_found'          => __('YASHINCUP не найдено'),
			'not_found_in_trash' => __('YASHINCUP не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('YASHINCUP')

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