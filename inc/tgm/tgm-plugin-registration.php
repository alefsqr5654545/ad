<?php

require_once CRYPTERIO_INC_PATH . '/tgm/tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'crypterio_require_plugins' );

function crypterio_require_plugins($return = false) {
	$plugins      = array(
		'stm-configurations' => array(
			'name'			=> 'STM Configurations',
			'slug'			=> 'stm-configurations',
			'source'		=> get_package( 'stm-configurations', 'zip' ),
			'required'		=> true,
			'version'		=> '2.3.1',
			'external_url'	=> 'https://stylemixthemes.com/'
		),
		'pearl-header-builder' => array(
			'name'     => 'Pearl Header Builder',
			'slug'     => 'pearl-header-builder',
			'required' => true
		),
        'virtual_coin_widgets' => array(
            'name'         => 'Virtual Coin Widgets',
            'slug'         => 'virtual_coin_widgets',
            'source'		=> get_package( 'virtual_coin_widgets', 'zip' ),
            'required'     => true,
            'external_url' => 'https://codecanyon.net/user/runcoders',
            'version'      => '2.2.2'
        ),
		'js_composer' => array(
			'name'         => 'WPBakery Visual Composer',
			'slug'         => 'js_composer',
			'source'		=> get_package( 'js_composer', 'zip' ),
			'required'     => true,
			'external_url' => 'http://vc.wpbakery.com',
			'version'      => '6.0.5'
		),
		'revslider' => array(
			'name'         => 'Revolution Slider',
			'slug'         => 'revslider',
			'source'		=> get_package( 'revslider', 'zip' ),
			'required'     => true,
			'external_url' => 'http://www.themepunch.com/revolution/',
			'version'      => '6.1.4'
		),
		'stm-gdpr-compliance' => array(
			'name'         => 'GDPR Compliance & Cookie Consent',
			'slug'         => 'stm-gdpr-compliance',
			'source'	   => get_package( 'stm-gdpr-compliance', 'zip' ),
			'required'     => false,
			'external_url' => 'https://stylemixthemes.com',
			'version'      => '1.1'
		),
		'breadcrumb-navxt' => array(
			'name'     => 'Breadcrumb NavXT',
			'slug'     => 'breadcrumb-navxt',
			'required' => false
		),
		'contact-form-7' => array(
			'name'     => 'Contact Form 7',
			'slug'     => 'contact-form-7',
			'required' => false
		),
		'woocommerce' => array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false
		),
		'mailchimp-for-wp' => array(
			'name'     => 'MailChimp for WordPress Lite',
			'slug'     => 'mailchimp-for-wp',
			'required' => false
		),
		'instagram-feed' => array(
			'name'     => 'Instagram Feed',
			'slug'     => 'instagram-feed',
			'required' => false
		),
		'recent-tweets-widget' => array(
			'name'     => 'Recent Tweets Widget',
			'slug'     => 'recent-tweets-widget',
			'required' => false
		),
		'amp' => array(
			'name'     => 'AMP',
			'slug'     => 'amp',
			'required' => false
		)
	);

	if($return) {
		return $plugins;
	} else {
		$config = array(
			'is_automatic' => false
		);

		tgmpa($plugins, $config);
	}

}