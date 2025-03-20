<?php

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

function custom_lead_form_setup() {
	add_theme_support('automatic-feed-links');

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'custom-lead-form'),
			'menu-2' => esc_html__('Footer', 'custom-lead-form'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'custom_lead_form_setup');

function custom_lead_form_scripts() {
	wp_enqueue_style('custom-lead-form-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap', array(), null);
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3');

	wp_enqueue_script('custom-lead-form-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true);

	wp_enqueue_script('lead-form', get_template_directory_uri() . '/js/lead-form.js', array('jquery'), _S_VERSION, true);

	wp_localize_script('lead-form', 'lead_form_params', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('lead_form_nonce')
	));
}
add_action('wp_enqueue_scripts', 'custom_lead_form_scripts');

function handle_lead_form_submission() {
	check_ajax_referer('lead_form_nonce', 'nonce');

	$first_name = isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '';
	$last_name = isset($_POST['last_name']) ? sanitize_text_field($_POST['last_name']) : '';
	$email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
	$mobile = isset($_POST['mobile']) ? sanitize_text_field($_POST['mobile']) : '';

	if (empty($first_name) || empty($last_name) || empty($email)) {
		wp_send_json_error(array('message' => 'Please fill in all required fields.'));
		wp_die();
	}

	$api_url = 'https://uk2.pabau.me/OAuth2/leads/lead-curl.php';
	$api_key = 'MTUyMTc5c6555c14e129a73a29c7cfd29ecd593';

	$api_data = array(
		'api_key' => $api_key,
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'mobile' => $mobile,
		'opt_letter' => 1,
		'opt_sms' => 1,
		'opt_newsletter' => 1,
		'opt_phone' => 1
	);

	$response = wp_remote_post($api_url, array(
		'method' => 'POST',
		'timeout' => 45,
		'redirection' => 5,
		'httpversion' => '1.0',
		'blocking' => true,
		'headers' => array(
			'Content-Type' => 'application/json'
		),
		'body' => json_encode($api_data),
		'cookies' => array()
	));

	if (is_wp_error($response)) {
		$error_message = $response->get_error_message();
		wp_send_json_error(array('message' => "Something went wrong: $error_message"));
	} else {
		$body = wp_remote_retrieve_body($response);
		$status_code = wp_remote_retrieve_response_code($response);
		$data = json_decode($body);

		error_log('API Response: ' . print_r($body, true));
		error_log('Status Code: ' . $status_code);

		if (isset($data->success) && $data->success) {
			wp_send_json_success(array('message' => 'Lead created successfully!'));
		} else {
			wp_send_json_error(array(
				'message' => isset($data->message) ? $data->message : 'Unknown error occurred.',
				'status' => $status_code,
				'response' => $body
			));
		}
	}


	wp_die();
}
add_action('wp_ajax_submit_lead_form', 'handle_lead_form_submission');
add_action('wp_ajax_nopriv_submit_lead_form', 'handle_lead_form_submission');

function create_lead_form_page() {
	$page_exists = get_page_by_path('lead-form');

	if (!$page_exists) {
		$page_id = wp_insert_post(array(
			'post_title' => 'Lead Form',
			'post_content' => '',
			'post_status' => 'publish',
			'post_type' => 'page',
		));

		if ($page_id && !is_wp_error($page_id)) {
			update_post_meta($page_id, '_wp_page_template', 'page-lead-form.php');
		}
	}
}
add_action('after_switch_theme', 'create_lead_form_page');
