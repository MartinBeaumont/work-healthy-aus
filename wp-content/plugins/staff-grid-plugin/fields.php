<?php
if( function_exists('register_field_group') ):

register_field_group(array (
	'key' => 'group_54aac53cbf23d',
	'title' => 'Staff options',
	'fields' => array (
		array (
			'key' => 'field_54aac5f0e2588',
			'label' => 'Staff Details',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_54aac543e2582',
			'label' => 'First Name',
			'name' => 'first_name',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac558e2583',
			'label' => 'Last Name',
			'name' => 'last_name',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac565e2584',
			'label' => 'Title',
			'name' => 'title',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac573e2585',
			'label' => 'Email Address',
			'name' => 'email_address',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac5afe2586',
			'label' => 'Phone',
			'name' => 'phone',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac604e2589',
			'label' => 'Staff Bio',
			'name' => 'staff_bio',
			'prefix' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
		array (
			'key' => 'field_54aac5dfe2587',
			'label' => 'Social Options',
			'name' => '',
			'prefix' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array (
			'key' => 'field_54aac61fe258a',
			'label' => 'Twitter URL',
			'name' => 'twitter_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac627e258b',
			'label' => 'Facebook URL',
			'name' => 'facebook_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac631e258c',
			'label' => 'Linkedin URL',
			'name' => 'linkedin_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_54aac63de258d',
			'label' => 'Instagram URL',
			'name' => 'instagram_url',
			'prefix' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'f1_staffgrid_cpt',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
));

endif;