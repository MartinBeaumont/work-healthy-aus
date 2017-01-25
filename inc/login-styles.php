<?php
//Customize Wordpress Admin

	// add login logo
	function custom_loginlogo() {
	echo '<style type="text/css">
	h1 a {
		height: 100% !important;
		width:100% !important;
		background-image: url('.get_bloginfo('template_directory').'/img/logo.svg) !important;
		background-postion-x: center !important;
		background-size:100% !important;
		margin-bottom:10px !important; }

	h1 {
		width: 320px !important;
		Height: 120px !important}

	</style>';
	}

	add_action('login_head', 'custom_loginlogo');


	// add custom footer text
	function modify_footer_admin () {
		echo 'Created by <a href="http://factor1studios.com">factor1</a>.';
		echo 'Powered by<a href="http://WordPress.org">WordPress</a>.';
		}

	add_filter('admin_footer_text', 'modify_footer_admin');
