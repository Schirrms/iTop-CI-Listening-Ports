<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2024 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

 Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:FunctionalCI/Attribute:listeningport_list' => 'Port(s) réseau en écoute',
	'Class:SoftwareInstance/Attribute:softwarelisteningport_list' => 'Port(s) réseau en écoute',
	'Class:lnkListeningPortToSoftwareInstance' => 'Lien Port Réseau / Instance Logicielle',
	'Class:lnkListeningPortToSoftwareInstance/Attribute:softwarelisteningport_id' => 'Port(s) réseau en écoute',
	'Class:lnkListeningPortToSoftwareInstance/Attribute:softwareinstance_id' => 'Logiciel(s) utilisant ce port',
	'Class:ListeningPort' => 'Port réseau en écoute',
	'Class:ListeningPort/Attribute:functionalci_id' => 'CI sur lequel se trouve le port en écoute',
	'Class:ListeningPort/Attribute:functionalci_name' => 'CI sur lequel se trouve le port en écoute',
	'Class:ListeningPort/Attribute:functionalci_id_finalclass_recall' => 'Type de CI',
	'Class:ListeningPort/Attribute:ipv4_id' => 'Adresse IPv4 en écoute',
	'Class:ListeningPort/Attribute:ipv4_id+' => 'une adresse 0.0.0.0 indique une écoute sur toutes les adresses IP du CI, une adresse 127.x.y.z représente une écoute sur l\'interface de loopback',
	'Class:ListeningPort/Attribute:ipv4_ip' => 'Adresse IPv4 en écoute',
	'Class:ListeningPort/Attribute:ipv4_ip+' => 'une adresse 0.0.0.0 indique une écoute sur toutes les adresses IP du CI, une adresse 127.x.y.z représente une écoute sur l\'interface de loopback',
	'Class:ListeningPort/Attribute:proto' => 'Protocole IP (tcp ou udp)',
	'Class:ListeningPort/Attribute:port' => 'Port en écoute',
	'Class:ListeningPort/Attribute:port+' => 'Un port réseau valide est compris entre 0 (très peu probable), plutôt 1 et 65535',
	'Class:ListeningPort/Attribute:softwareinstance_list' => 'Logiciel(s) qui \'ouvre(nt)\' le port',
	'Class:ListeningPort/Attribute:softwareinstance_id_finalclass_recall' => 'La catégorie du logiciel',
));
?>
