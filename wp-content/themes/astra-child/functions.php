<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

// SEO On-page
add_action('wp_head', function() {
	if (is_singular()) {
		global $post;
		$title = get_the_title($post->ID);
		$description = get_the_excerpt($post->ID);
		$site_name = get_bloginfo('name');
		// Title (SEO)
		echo '<title>' . esc_html($title) . ' | ' . esc_html($site_name) . '</title>';
		// Meta Description
		echo '<meta name="description" content="' . esc_attr($description) . '">';
	}
});
function vitaclinic_add_schema_markup() {
 
    $organization_schema = array(
        '@context' => 'https://schema.org',
        '@graph' => array(
            array(
                '@type' => 'Organization',
                '@id' => home_url() . '#organization',
                'name' => 'VitaClinic Digital',
                'url' => home_url(),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => 'URL_DA_SUA_LOGO_AQUI.png'
                ),
                'contactPoint' => array(
                    '@type' => 'ContactPoint',
                    'telephone' => '+1-800-242-8478',
                    'contactType' => 'Atendimento ao Cliente',
                    'areaServed' => 'São Paulo, SP'
                )
            ),
            array(
                '@type' => 'Service',
                '@id' => home_url() . '#service',
                'serviceType' => 'Odontologia e Estética Facial',
                'provider' => array(
                    '@type' => 'Organization',
                    '@id' => home_url() . '#organization'
                ),
                'name' => 'Consultas de Odontologia e Harmonização Facial',
                'description' => 'Geração de leads para consultas de saúde bucal e procedimentos estéticos faciais, como Botox e Preenchimento.',
                'areaServed' => 'São Paulo, SP',
                'hasOfferCatalog' => array(
                    '@type' => 'OfferCatalog',
                    'name' => 'Catálogo de Tratamentos',
                    'itemListElement' => array(
                        array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Clareamento Dental')),
                        array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Harmonização Facial (Botox)')),
                        array('@type' => 'Offer', 'itemOffered' => array('@type' => 'Service', 'name' => 'Lentes de Contato Dental')),
                    )
                )
            )
        )
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $organization_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";

    if ( is_page( 'Home' ) || is_front_page() ) { 
        
        $faq_schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => 'Os procedimentos de Estética Facial são dolorosos?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Nossa prioridade é o seu conforto. Utilizamos técnicas minimamente invasivas e, em muitos casos, anestesia local para garantir que procedimentos como Preenchimento ou BOTOX® sejam praticamente indolores.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'A VitaClinic aceita planos de saúde ou convênios odontológicos?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Atualmente, a VitaClinic atende exclusivamente no modelo particular para garantir o mais alto padrão de qualidade. Oferecemos condições de pagamento flexíveis.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'Como posso saber qual tratamento (Odontológico ou Estético) é o ideal para mim?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'O primeiro passo é agendar uma Avaliação Personalizada. Nossa equipe fará uma análise completa e criará um plano de tratamento exclusivo para atingir seus objetivos.'
                    )
                )
            )
        );
        echo '<script type="application/ld+json">' . wp_json_encode( $faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'vitaclinic_add_schema_markup' );