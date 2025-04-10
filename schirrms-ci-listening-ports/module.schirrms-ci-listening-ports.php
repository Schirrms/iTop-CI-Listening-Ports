<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'schirrms-ci-listening-ports/0.1.0',
	array(
		// Identification
		//
		'label' => 'CI Listening Ports',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-virtualization-mgmt/2.7.0',
			'itop-config-mgmt/2.7.0',
			'teemip-ip-mgmt/2.7.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'vendor/autoload.php',
			'model.schirrms-ci-listening-ports.php', // Contains the PHP code generated by the "compilation" of datamodel.schirrms-ci-listening-ports.xml
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
