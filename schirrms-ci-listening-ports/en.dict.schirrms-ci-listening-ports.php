<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2024 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:FunctionalCI/Attribute:listeningport_list' => 'Network port(s) listening',
	'Class:ListeningPort' => 'Listening Port',
	'Class:ListeningPort/Attribute:functionalci_id' => 'CI with the open port',
	'Class:ListeningPort/Attribute:functionalci_name' => 'CI with the open port',
	'Class:ListeningPort/Attribute:functionalci_id_finalclass_recall' => 'CI type',
	'Class:ListeningPort/Attribute:ipv4_id' => 'IPv4 address listening',
	'Class:ListeningPort/Attribute:ipv4_id+' => 'Adress 0.0.0.0 means that the CI listen on all IP, Adress 127.x.y.z means listening on the local loopback',
	'Class:ListeningPort/Attribute:ipv4_name' => 'IPv4 address listening',
	'Class:ListeningPort/Attribute:ipv4_name+' => 'Adress 0.0.0.0 means that the CI listen on all IP, Adress 127.x.y.z means listening on the local loopback',
	'Class:ListeningPort/Attribute:proto' => 'IP protocol (tcp or udp)',
	'Class:ListeningPort/Attribute:port' => 'Port listening',
	'Class:ListeningPort/Attribute:port+' => 'A valid IP network port is between 0 (unlikelly), better between 1 an 65535',
	'Class:ListeningPort/Attribute:softwareinstance_id' => 'The software behind the listening port',
	'Class:ListeningPort/Attribute:softwareinstance_name' => 'The software behind the listening port',
	'Class:ListeningPort/Attribute:softwareinstance_id_finalclass_recall' => 'Software Category',
));
?>
