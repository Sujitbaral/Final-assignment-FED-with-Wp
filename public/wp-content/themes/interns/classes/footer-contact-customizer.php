<!-- Copyright section customizer -->
<?php
function intern_footer_contact($wp_customize) {
	$wp_customize->add_section('intern-footer-contact-section', array(
		'title' => 'Footer Contact'
	));

	$wp_customize->add_setting('intern-footer-contact-title', array(
		'default' => 'Contact'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-contact-title-control', array(
			'label' => 'Contact Title',
			'section' => 'intern-footer-contact-section',
			'settings' => 'intern-footer-contact-title'
		)));

    $wp_customize->add_setting('intern-footer-contact-file', array(
        'default' => 'Contact Form'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'intern-footer-contact-file-control', array(
            'label' => 'Contact file',
            'section' => 'intern-footer-contact-section',
            'settings' => 'intern-footer-contact-file'
        )));
}

add_action('customize_register', 'intern_footer_contact');

?>