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

Dict::Add('EN US', 'English', 'English', array(
	'Class:Daemons' => 'Daemons',
	'Class:Daemons+' => '',
	'Class:Daemons/Attribute:starttyp' => 'Starttyp',
	'Class:Daemons/Attribute:starttyp+' => '',
	'Class:Daemons/Attribute:starttyp/Value:automatic' => 'Automatic',
	'Class:Daemons/Attribute:starttyp/Value:automatic+' => 'Automatic',
	'Class:Daemons/Attribute:starttyp/Value:deactivated' => 'Deactivated',
	'Class:Daemons/Attribute:starttyp/Value:deactivated+' => 'Deactivated',
	'Class:Daemons/Attribute:starttyp/Value:delayed' => 'Delayed',
	'Class:Daemons/Attribute:starttyp/Value:delayed+' => 'Delayed',
	'Class:Daemons/Attribute:starttyp/Value:manuell' => 'Manuell',
	'Class:Daemons/Attribute:starttyp/Value:manuell+' => 'Manuell',
	'Class:Daemons/Attribute:login_id' => 'Login ID',
	'Class:Daemons/Attribute:login_id+' => '',
	'Class:Daemons/Attribute:login_name' => 'login_id->login_name',
	'Class:Daemons/Attribute:login_name+' => '',
	'Class:Daemons/Attribute:softwareinstance_list' => 'Software Instances',
	'Class:Daemons/Attribute:softwareinstance_list+' => '',
	'Class:Daemons/Attribute:obsolescence_flag' => 'Obsolete',
	'Class:Daemons/Attribute:obsolescence_flag+' => 'Computed dynamically on other attributes',
	'Class:Daemons/Attribute:login_id_friendlyname' => 'login_id_friendlyname',
	'Class:Daemons/Attribute:login_id_friendlyname+' => 'Full name',
));

//
// Class: Login
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Login' => 'Login',
	'Class:Login+' => '',
	'Class:Login/Attribute:name' => 'Name',
	'Class:Login/Attribute:name+' => '',
	'Class:Login/Attribute:typ' => 'Typ',
	'Class:Login/Attribute:typ+' => '',
	'Class:Login/Attribute:typ/Value:directory' => 'Directory',
	'Class:Login/Attribute:typ/Value:directory+' => 'Directory',
	'Class:Login/Attribute:typ/Value:local' => 'Local',
	'Class:Login/Attribute:typ/Value:local+' => 'Local',
	'Class:Login/Attribute:description' => 'Description',
	'Class:Login/Attribute:description+' => '',
	'Class:Login/Attribute:daemons_list' => 'Daemons List',
	'Class:Login/Attribute:daemons_list+' => '',
));


Dict::Add('EN US', 'English', 'English', array(
	'Class:SoftwareInstance/Attribute:daemons_list' => 'Daemons',
	'Class:SoftwareInstance/Attribute:daemons_list+' => '',
));

//
// Class: lnkDaemonsToSoftwareInstance
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkDaemonsToSoftwareInstance' => 'lnkDaemonsToSoftwareInstance',
	'Class:lnkDaemonsToSoftwareInstance+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id' => 'Daemon',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_name' => 'daemons_id->Name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_name+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id' => 'Software Instance',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_name' => 'softwareinstance_id->Name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_name+' => '',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_friendlyname' => 'daemons_id_friendlyname',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_friendlyname+' => 'Full name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_obsolescence_flag' => 'daemons_id->Obsolete',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:daemons_id_obsolescence_flag+' => 'Computed dynamically on other attributes',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_friendlyname' => 'softwareinstance_id_friendlyname',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_friendlyname+' => 'Full name',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_finalclass_recall' => 'softwareinstance_id->CI sub-class',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_finalclass_recall+' => 'Name of the final class',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_obsolescence_flag' => 'softwareinstance_id->Obsolete',
	'Class:lnkDaemonsToSoftwareInstance/Attribute:softwareinstance_id_obsolescence_flag+' => 'Computed dynamically on other attributes',
));

?>
