<?php

/**
 * Entry point of the DataValues Iri library.
 *
 * @since 0.1
 * @codeCoverageIgnore
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */

if ( defined( 'DATAVALUES_IRI_VERSION' ) ) {
	// Do not initialize more then once.
	return 1;
}

define( 'DATAVALUES_IRI_VERSION', '0.1' );

if ( defined( 'MEDIAWIKI' ) ) {
	$GLOBALS['wgExtensionCredits']['datavalues'][] = array(
		'path' => __DIR__,
		'name' => 'DataValues Iri',
		'version' => DATAVALUES_IRI_VERSION,
		'author' => array(
			'[https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw Jeroen De Dauw]'
		),
		'url' => 'https://github.com/DataValues/Iri',
		'description' => 'Iri value objects, parsers and formatters',
		'license-name' => 'GPL-2.0+'
	);
}
