<?php
//Customize Wordpress Admin

	// add login logo
	function custom_loginlogo() {
	echo '<style type="text/css">
	body{
		background: #E6E7E8;
	}

	.wp-core-ui .button-primary {
    background: #E75300;
    border-color: #E75300 #E75300 #E75300;
    -webkit-box-shadow: 0 1px 0 #a23a00;
    box-shadow: 0 1px 0 #a23a00;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 -1px 1px #a23a00, 1px 0 1px #a23a00, 0 1px 1px #a23a00, -1px 0 1px #a23a00;
}

.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover{
	background: #cc4b02;
	border-color: #cc4b02 #cc4b02 #cc4b02;
}

	h1 a {
		height: 100% !important;
		width:100% !important;
		background-image: url('.get_bloginfo('template_directory').'/assets/img/logo.svg) !important;
		background-postion-x: center !important;
		background-size: contain !important;
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
