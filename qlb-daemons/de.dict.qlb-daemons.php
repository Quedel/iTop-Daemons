<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: Daemons
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Daemons' => 'Dienst',
	'Class:Daemons+' => '',
	'Class:Daemons/Attribute:starttyp' => 'Starttyp',
	'Class:Daemons/Attribute:starttyp+' => '',
	'Class:Daemons/Attribute:starttyp/Value:automatic' => 'Automatisch',
	'Class:Daemons/Attribute:starttyp/Value:automatic+' => 'Automatisch',
	'Class:Daemons/Attribute:starttyp/Value:deactivated' => 'Deaktiviert',
	'Class:Daemons/Attribute:starttyp/Value:deactivated+' => 'Deaktiviert',
	'Class:Daemons/Attribute:starttyp/Value:delayed' => 'Verzögert',
	'Class:Daemons/Attribute:starttyp/Value:delayed+' => 'Verzögert',
	'Class:Daemons/Attribute:starttyp/Value:manuell' => 'Manuell',
	'Class:Daemons/Attribute:starttyp/Value:manuell+' => 'Manuell',
	'Class:Daemons/Attribute:login_id' => 'Anmeldung/Benutzer',
	'Class:Daemons/Attribute:login_id+' => '',
	'Class:Daemons/Attribute:login_name' => 'login_id->login_name',
	'Class:Daemons/Attribute:login_name+' => '',
	'Class:Daemons/Attribute:softwareinstance_list' => 'Softwareinstanzen',
	'Class:Daemons/Attribute:softwareinstance_list+' => '',
	'Class:Daemons/Attribute:obsolescence_flag' => 'Obsolet',
	'Class:Daemons/Attribute:obsolescence_flag+' => 'Dynamisch berechnet wegen anderer Attribute',
	'Class:Daemons/Attribute:login_id_friendlyname' => 'login_id_friendlyname',
	'Class:Daemons/Attribute:login_id_friendlyname+' => 'Friendly name',
));

//
// Class: Login
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Login' => 'Anmeldung',
	'Class:Login+' => '',
	'Class:Login/Attribute:name' => 'Name',
	'Class:Login/Attribute:name+' => '',
	'Class:Login/Attribute:typ' => 'Typ',
	'Class:Login/Attribute:typ+' => '',
	'Class:Login/Attribute:typ/Value:directory' => 'Verzeichnis',
	'Class:Login/Attribute:typ/Value:directory+' => 'Verzeichnis',
	'Class:Login/Attribute:typ/Value:local' => 'Lokal',
	'Class:Login/Attribute:typ/Value:local+' => 'Lokal',
	'Class:Login/Attribute:description' => 'Beschreibung',
	'Class:Login/Attribute:description+' => '',
	'Class:Login/Attribute:daemons_list' => 'Dienste',
	'Class:Login/Attribute:daemons_list+' => '',
));

//
// Class: lnkDaemonsToSoftwareInstance
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkDaemonsToSoftwareInstance' => 'lnkDaemonsToSoftwareInstance',
	'Class:lnkDaemonsToSoftwareInstance+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id' => 'Dienst',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_name' => 'daemons_id->Name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_name+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id' => 'Softwareinstanz',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_name' => 'softwareinstance_id->Name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_name+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_friendlyname' => 'daemons_id_friendlyname',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_friendlyname+' => 'Friendly name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_obsolescence_flag' => 'daemons_id->Obsolet',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_obsolescence_flag+' => 'Dynamisch berechnet wegen anderer Attribute',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_friendlyname' => 'softwareinstance_id_friendlyname',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_friendlyname+' => 'Friendly name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_finalclass_recall' => 'Software-Typ',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_finalclass_recall+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_obsolescence_flag' => 'softwareinstance_id->Obsolet',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_obsolescence_flag+' => 'Dynamisch berechnet wegen anderer Attribute',
));

//
// Class: SoftwareInstance
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:SoftwareInstance/Attribute:daemons_list' => 'Dienste',
	'Class:SoftwareInstance/Attribute:daemons_list+' => '',
));

?>
