<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '192.168.0.148',
	'username' => 'root',
	'password' => 'srsnova',
	'database' => 'migration',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => TRUE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);


$db['datacenter']['hostname'] = '192.168.0.133';
$db['datacenter']['username'] = 'markuser';
$db['datacenter']['password'] = 'tseug';
$db['datacenter']['database'] = 'NEWDATACENTER';
$db['datacenter']['dbdriver'] = 'mssql';
$db['datacenter']['dbprefix'] = '';
$db['datacenter']['pconnect'] = FALSE;
$db['datacenter']['db_debug'] = FALSE;
$db['datacenter']['cache_on'] = FALSE;
$db['datacenter']['cachedir'] = '';
$db['datacenter']['char_set'] = 'utf8';
$db['datacenter']['dbcollat'] = 'utf8_general_ci';
$db['datacenter']['swap_pre'] = '';
$db['datacenter']['autoinit'] = TRUE;
$db['datacenter']['stricton'] = FALSE; 



$db['datacenter_100']['hostname'] = '192.168.0.100';
$db['datacenter_100']['username'] = 'markuser';
$db['datacenter_100']['password'] = 'tseug';
$db['datacenter_100']['database'] = 'NEWDATACENTER';
$db['datacenter_100']['dbdriver'] = 'mssql';
$db['datacenter_100']['dbprefix'] = '';
$db['datacenter_100']['pconnect'] = FALSE;
$db['datacenter_100']['db_debug'] = FALSE;
$db['datacenter_100']['cache_on'] = FALSE;
$db['datacenter_100']['cachedir'] = '';
$db['datacenter_100']['char_set'] = 'utf8';
$db['datacenter_100']['dbcollat'] = 'utf8_general_ci';
$db['datacenter_100']['swap_pre'] = '';
$db['datacenter_100']['autoinit'] = TRUE;
$db['datacenter_100']['stricton'] = FALSE; 


// BRANCHES MY

$db['Nov']['hostname'] = '192.168.0.179'; 
$db['Nov']['username'] = 'root';
$db['Nov']['password'] = 'srsnova';
$db['Nov']['database'] = 'srspos';
$db['Nov']['dbdriver'] = 'mysql';
$db['Nov']['dbprefix'] = '';
$db['Nov']['pconnect'] = FALSE;
$db['Nov']['db_debug'] = 'production';
$db['Nov']['cache_on'] = FALSE;
$db['Nov']['cachedir'] = '';
$db['Nov']['char_set'] = 'utf8';
$db['Nov']['dbcollat'] = 'utf8_general_ci';
$db['Nov']['swap_pre'] = '';
$db['Nov']['autoinit'] = TRUE;
$db['Nov']['stricton'] = FALSE;


$db['SRT']['hostname'] = '192.168.5.21'; 
$db['SRT']['username'] = 'root';
$db['SRT']['password'] = 'srsnova';
$db['SRT']['database'] = 'srspos';
$db['SRT']['dbdriver'] = 'mysql';
$db['SRT']['dbprefix'] = '';
$db['SRT']['pconnect'] = FALSE;
$db['SRT']['db_debug'] = 'production';
$db['SRT']['cache_on'] = FALSE;
$db['SRT']['cachedir'] = '';
$db['SRT']['char_set'] = 'utf8';
$db['SRT']['dbcollat'] = 'utf8_general_ci';
$db['SRT']['swap_pre'] = '';
$db['SRT']['autoinit'] = TRUE;
$db['SRT']['stricton'] = FALSE;


$db['SRM']['hostname'] = '192.168.101.100'; 
$db['SRM']['username'] = 'root';
$db['SRM']['password'] = 'srsnova';
$db['SRM']['database'] = 'srspos';
$db['SRM']['dbdriver'] = 'mysql';
$db['SRM']['dbprefix'] = '';
$db['SRM']['pconnect'] = FALSE;
$db['SRM']['db_debug'] = 'production';
$db['SRM']['cache_on'] = FALSE;
$db['SRM']['cachedir'] = '';
$db['SRM']['char_set'] = 'utf8';
$db['SRM']['dbcollat'] = 'utf8_general_ci';
$db['SRM']['swap_pre'] = '';
$db['SRM']['autoinit'] = TRUE;
$db['SRM']['stricton'] = FALSE;


$db['SRV']['hostname'] = '192.168.114.100'; 
$db['SRV']['username'] = 'root';
$db['SRV']['password'] = 'srsnova';
$db['SRV']['database'] = 'srspos';
$db['SRV']['dbdriver'] = 'mysql';
$db['SRV']['dbprefix'] = '';
$db['SRV']['pconnect'] = FALSE;
$db['SRV']['db_debug'] = 'production';
$db['SRV']['cache_on'] = FALSE;
$db['SRV']['cachedir'] = '';
$db['SRV']['char_set'] = 'utf8';
$db['SRV']['dbcollat'] = 'utf8_general_ci';
$db['SRV']['swap_pre'] = '';
$db['SRV']['autoinit'] = TRUE;
$db['SRV']['stricton'] = FALSE;


$db['SBS']['hostname'] = '192.168.106.113'; 
$db['SBS']['username'] = 'root';
$db['SBS']['password'] = 'srsnova';
$db['SBS']['database'] = 'srspos';
$db['SBS']['dbdriver'] = 'mysql';
$db['SBS']['dbprefix'] = '';
$db['SBS']['pconnect'] = FALSE;
$db['SBS']['db_debug'] = 'production';
$db['SBS']['cache_on'] = FALSE;
$db['SBS']['cachedir'] = '';
$db['SBS']['char_set'] = 'utf8';
$db['SBS']['dbcollat'] = 'utf8_general_ci';
$db['SBS']['swap_pre'] = '';
$db['SBS']['autoinit'] = TRUE;
$db['SBS']['stricton'] = FALSE;


$db['SPU']['hostname'] = '192.168.115.100'; 
$db['SPU']['username'] = 'root';
$db['SPU']['password'] = 'srsnova';
$db['SPU']['database'] = 'srspos';
$db['SPU']['dbdriver'] = 'mysql';
$db['SPU']['dbprefix'] = '';
$db['SPU']['pconnect'] = FALSE;
$db['SPU']['db_debug'] = 'production';
$db['SPU']['cache_on'] = FALSE;
$db['SPU']['cachedir'] = '';
$db['SPU']['char_set'] = 'utf8';
$db['SPU']['dbcollat'] = 'utf8_general_ci';
$db['SPU']['swap_pre'] = '';
$db['SPU']['autoinit'] = TRUE;
$db['SPU']['stricton'] = FALSE;


$db['SRC']['hostname'] = '192.168.106.100'; 
$db['SRC']['username'] = 'root';
$db['SRC']['password'] = 'srsnova';
$db['SRC']['database'] = 'srspos';
$db['SRC']['dbdriver'] = 'mysql';
$db['SRC']['dbprefix'] = '';
$db['SRC']['pconnect'] = FALSE;
$db['SRC']['db_debug'] = 'production';
$db['SRC']['cache_on'] = FALSE;
$db['SRC']['cachedir'] = '';
$db['SRC']['char_set'] = 'utf8';
$db['SRC']['dbcollat'] = 'utf8_general_ci';
$db['SRC']['swap_pre'] = '';
$db['SRC']['autoinit'] = TRUE;
$db['SRC']['stricton'] = FALSE;


$db['SRG']['hostname'] = '192.168.5.6'; 
$db['SRG']['username'] = 'root';
$db['SRG']['password'] = 'srsnova';
$db['SRG']['database'] = 'srspos';
$db['SRG']['dbdriver'] = 'mysql';
$db['SRG']['dbprefix'] = '';
$db['SRG']['pconnect'] = FALSE;
$db['SRG']['db_debug'] = 'production';
$db['SRG']['cache_on'] = FALSE;
$db['SRG']['cachedir'] = '';
$db['SRG']['char_set'] = 'utf8';
$db['SRG']['dbcollat'] = 'utf8_general_ci';
$db['SRG']['swap_pre'] = '';
$db['SRG']['autoinit'] = TRUE;
$db['SRG']['stricton'] = FALSE;


$db['SNV']['hostname'] = '192.168.107.100'; 
$db['SNV']['username'] = 'root';
$db['SNV']['password'] = 'srsnova';
$db['SNV']['database'] = 'srspos';
$db['SNV']['dbdriver'] = 'mysql';
$db['SNV']['dbprefix'] = '';
$db['SNV']['pconnect'] = FALSE;
$db['SNV']['db_debug'] = 'production';
$db['SNV']['cache_on'] = FALSE;
$db['SNV']['cachedir'] = '';
$db['SNV']['char_set'] = 'utf8';
$db['SNV']['dbcollat'] = 'utf8_general_ci';
$db['SNV']['swap_pre'] = '';
$db['SNV']['autoinit'] = TRUE;
$db['SNV']['stricton'] = FALSE;


$db['SRI']['hostname'] = '192.168.108.100'; 
$db['SRI']['username'] = 'root';
$db['SRI']['password'] = 'srsnova';
$db['SRI']['database'] = 'srspos';
$db['SRI']['dbdriver'] = 'mysql';
$db['SRI']['dbprefix'] = '';
$db['SRI']['pconnect'] = FALSE;
$db['SRI']['db_debug'] = 'production';
$db['SRI']['cache_on'] = FALSE;
$db['SRI']['cachedir'] = '';
$db['SRI']['char_set'] = 'utf8';
$db['SRI']['dbcollat'] = 'utf8_general_ci';
$db['SRI']['swap_pre'] = '';
$db['SRI']['autoinit'] = TRUE;
$db['SRI']['stricton'] = FALSE;


$db['SA1']['hostname'] = '192.168.110.100'; 
$db['SA1']['username'] = 'root';
$db['SA1']['password'] = 'srsnova';
$db['SA1']['database'] = 'srspos';
$db['SA1']['dbdriver'] = 'mysql';
$db['SA1']['dbprefix'] = '';
$db['SA1']['pconnect'] = FALSE;
$db['SA1']['db_debug'] = 'development';
$db['SA1']['cache_on'] = FALSE;
$db['SA1']['cachedir'] = '';
$db['SA1']['char_set'] = 'utf8';
$db['SA1']['dbcollat'] = 'utf8_general_ci';
$db['SA1']['swap_pre'] = '';
$db['SA1']['autoinit'] = TRUE;
$db['SA1']['stricton'] = FALSE;


$db['SA2']['hostname'] = '192.168.111.100'; 
$db['SA2']['username'] = 'root';
$db['SA2']['password'] = 'srsnova';
$db['SA2']['database'] = 'srspos';
$db['SA2']['dbdriver'] = 'mysql';
$db['SA2']['dbprefix'] = '';
$db['SA2']['pconnect'] = FALSE;
$db['SA2']['db_debug'] = 'production';
$db['SA2']['cache_on'] = FALSE;
$db['SA2']['cachedir'] = '';
$db['SA2']['char_set'] = 'utf8';
$db['SA2']['dbcollat'] = 'utf8_general_ci';
$db['SA2']['swap_pre'] = '';
$db['SA2']['autoinit'] = TRUE;
$db['SA2']['stricton'] = FALSE;


$db['SPT']['hostname'] = '192.168.116.100'; 
$db['SPT']['username'] = 'root';
$db['SPT']['password'] = 'srsnova';
$db['SPT']['database'] = 'srspos';
$db['SPT']['dbdriver'] = 'mysql';
$db['SPT']['dbprefix'] = '';
$db['SPT']['pconnect'] = FALSE;
$db['SPT']['db_debug'] = 'production';
$db['SPT']['cache_on'] = FALSE;
$db['SPT']['cachedir'] = '';
$db['SPT']['char_set'] = 'utf8';
$db['SPT']['dbcollat'] = 'utf8_general_ci';
$db['SPT']['swap_pre'] = '';
$db['SPT']['autoinit'] = TRUE;
$db['SPT']['stricton'] = FALSE;


$db['SCA']['hostname'] = '192.168.112.100'; 
$db['SCA']['username'] = 'root';
$db['SCA']['password'] = 'srsnova';
$db['SCA']['database'] = 'srspos';
$db['SCA']['dbdriver'] = 'mysql';
$db['SCA']['dbprefix'] = '';
$db['SCA']['pconnect'] = FALSE;
$db['SCA']['db_debug'] = 'production';
$db['SCA']['cache_on'] = FALSE;
$db['SCA']['cachedir'] = '';
$db['SCA']['char_set'] = 'utf8';
$db['SCA']['dbcollat'] = 'utf8_general_ci';
$db['SCA']['swap_pre'] = '';
$db['SCA']['autoinit'] = TRUE;
$db['SCA']['stricton'] = FALSE;


$db['SC2']['hostname'] = '192.168.118.100'; 
$db['SC2']['username'] = 'root';
$db['SC2']['password'] = 'srsnova';
$db['SC2']['database'] = 'srspos';
$db['SC2']['dbdriver'] = 'mysql';
$db['SC2']['dbprefix'] = '';
$db['SC2']['pconnect'] = FALSE;
$db['SC2']['db_debug'] = 'production';
$db['SC2']['cache_on'] = FALSE;
$db['SC2']['cachedir'] = '';
$db['SC2']['char_set'] = 'utf8';
$db['SC2']['dbcollat'] = 'utf8_general_ci';
$db['SC2']['swap_pre'] = '';
$db['SC2']['autoinit'] = TRUE;
$db['SC2']['stricton'] = FALSE;



$db['COM']['hostname'] = '192.168.117.100'; 
$db['COM']['username'] = 'root';
$db['COM']['password'] = 'srsnova';
$db['COM']['database'] = 'srspos';
$db['COM']['dbdriver'] = 'mysql';
$db['COM']['dbprefix'] = '';
$db['COM']['pconnect'] = FALSE;
$db['COM']['db_debug'] = 'production';
$db['COM']['cache_on'] = FALSE;
$db['COM']['cachedir'] = '';
$db['COM']['char_set'] = 'utf8';
$db['COM']['dbcollat'] = 'utf8_general_ci';
$db['COM']['swap_pre'] = '';
$db['COM']['autoinit'] = TRUE;
$db['COM']['stricton'] = FALSE;

$db['PED']['hostname'] = '192.168.119.100'; 
$db['PED']['username'] = 'root';
$db['PED']['password'] = 'srsnova';
$db['PED']['database'] = 'srspos';
$db['PED']['dbdriver'] = 'mysql';
$db['PED']['dbprefix'] = '';
$db['PED']['pconnect'] = FALSE;
$db['PED']['db_debug'] = 'production';
$db['PED']['cache_on'] = FALSE;
$db['PED']['cachedir'] = '';
$db['PED']['char_set'] = 'utf8';
$db['PED']['dbcollat'] = 'utf8_general_ci';
$db['PED']['swap_pre'] = '';
$db['PED']['autoinit'] = TRUE;
$db['PED']['stricton'] = FALSE;


$db['RML']['hostname'] = '192.168.101.100'; 
$db['RML']['username'] = 'root';
$db['RML']['password'] = 'srsnova';
$db['RML']['database'] = 'srspos';
$db['RML']['dbdriver'] = 'mysql';
$db['RML']['dbprefix'] = '';
$db['RML']['pconnect'] = FALSE;
$db['RML']['db_debug'] = 'production';
$db['RML']['cache_on'] = FALSE;
$db['RML']['cachedir'] = '';
$db['RML']['char_set'] = 'utf8';
$db['RML']['dbcollat'] = 'utf8_general_ci';
$db['RML']['swap_pre'] = '';
$db['RML']['autoinit'] = TRUE;
$db['RML']['stricton'] = FALSE;



$db['ALM']['hostname'] = '192.168.20.100'; 
$db['ALM']['username'] = 'root';
$db['ALM']['password'] = 'srsnova';
$db['ALM']['database'] = 'srspos';
$db['ALM']['dbdriver'] = 'mysql';
$db['ALM']['dbprefix'] = '';
$db['ALM']['pconnect'] = FALSE;
$db['ALM']['db_debug'] = 'production';
$db['ALM']['cache_on'] = FALSE;
$db['ALM']['cachedir'] = '';
$db['ALM']['char_set'] = 'utf8';
$db['ALM']['dbcollat'] = 'utf8_general_ci';
$db['ALM']['swap_pre'] = '';
$db['ALM']['autoinit'] = TRUE;
$db['ALM']['stricton'] = FALSE;


$db['LPN']['hostname'] = '192.168.132.100'; 
$db['LPN']['username'] = 'root';
$db['LPN']['password'] = 'srsnova';
$db['LPN']['database'] = 'srspos';
$db['LPN']['dbdriver'] = 'mysql';
$db['LPN']['dbprefix'] = '';
$db['LPN']['pconnect'] = FALSE;
$db['LPN']['db_debug'] = 'production';
$db['LPN']['cache_on'] = FALSE;
$db['LPN']['cachedir'] = '';
$db['LPN']['char_set'] = 'utf8';
$db['LPN']['dbcollat'] = 'utf8_general_ci';
$db['LPN']['swap_pre'] = '';
$db['LPN']['autoinit'] = TRUE;
$db['LPN']['stricton'] = FALSE;



$db['BAGU']['hostname'] = '192.168.121.100'; 
$db['BAGU']['username'] = 'root';
$db['BAGU']['password'] = 'srsnova';
$db['BAGU']['database'] = 'srspos';
$db['BAGU']['dbdriver'] = 'mysql';
$db['BAGU']['dbprefix'] = '';
$db['BAGU']['pconnect'] = FALSE;
$db['BAGU']['db_debug'] = 'production';
$db['BAGU']['cache_on'] = FALSE;
$db['BAGU']['cachedir'] = '';
$db['BAGU']['char_set'] = 'utf8';
$db['BAGU']['dbcollat'] = 'utf8_general_ci';
$db['BAGU']['swap_pre'] = '';
$db['BAGU']['autoinit'] = TRUE;
$db['BAGU']['stricton'] = FALSE;


$db['BGB']['hostname'] = '192.168.124.100'; 
$db['BGB']['username'] = 'root';
$db['BGB']['password'] = 'srsnova';
$db['BGB']['database'] = 'srspos';
$db['BGB']['dbdriver'] = 'mysql';
$db['BGB']['dbprefix'] = '';
$db['BGB']['pconnect'] = FALSE;
$db['BGB']['db_debug'] = 'production';
$db['BGB']['cache_on'] = FALSE;
$db['BGB']['cachedir'] = '';
$db['BGB']['char_set'] = 'utf8';
$db['BGB']['dbcollat'] = 'utf8_general_ci';
$db['BGB']['swap_pre'] = '';
$db['BGB']['autoinit'] = TRUE;
$db['BGB']['stricton'] = FALSE;


$db['MUZ']['hostname'] = '192.168.102.100'; 
$db['MUZ']['username'] = 'root';
$db['MUZ']['password'] = 'srsnova';
$db['MUZ']['database'] = 'srspos';
$db['MUZ']['dbdriver'] = 'mysql';
$db['MUZ']['dbprefix'] = '';
$db['MUZ']['pconnect'] = FALSE;
$db['MUZ']['db_debug'] = 'production';
$db['MUZ']['cache_on'] = FALSE;
$db['MUZ']['cachedir'] = '';
$db['MUZ']['char_set'] = 'utf8';
$db['MUZ']['dbcollat'] = 'utf8_general_ci';
$db['MUZ']['swap_pre'] = '';
$db['MUZ']['autoinit'] = TRUE;
$db['MUZ']['stricton'] = FALSE;



$db['MOL']['hostname'] = '192.168.5.32'; 
$db['MOL']['username'] = 'root';
$db['MOL']['password'] = 'srsnova';
$db['MOL']['database'] = 'srspos_new';
$db['MOL']['dbdriver'] = 'mysql';
$db['MOL']['dbprefix'] = '';
$db['MOL']['pconnect'] = FALSE;
$db['MOL']['db_debug'] = 'production';
$db['MOL']['cache_on'] = FALSE;
$db['MOL']['cachedir'] = '';
$db['MOL']['char_set'] = 'utf8';
$db['MOL']['dbcollat'] = 'utf8_general_ci';
$db['MOL']['swap_pre'] = '';
$db['MOL']['autoinit'] = TRUE;
$db['MOL']['stricton'] = FALSE;



$db['PLY']['hostname'] = '192.168.5.30'; 
$db['PLY']['username'] = 'root';
$db['PLY']['password'] = 'srsnova';
$db['PLY']['database'] = 'srspos';
$db['PLY']['dbdriver'] = 'mysql';
$db['PLY']['dbprefix'] = '';
$db['PLY']['pconnect'] = FALSE;
$db['PLY']['db_debug'] = 'production';
$db['PLY']['cache_on'] = FALSE;
$db['PLY']['cachedir'] = '';
$db['PLY']['char_set'] = 'utf8';
$db['PLY']['dbcollat'] = 'utf8_general_ci';
$db['PLY']['swap_pre'] = '';
$db['PLY']['autoinit'] = TRUE;
$db['PLY']['stricton'] = FALSE;



$db['MTB']['hostname'] = '192.168.23.100'; 
$db['MTB']['username'] = 'root';
$db['MTB']['password'] = 'srsnova';
$db['MTB']['database'] = 'srsmontb';
$db['MTB']['dbdriver'] = 'mysql';
$db['MTB']['dbprefix'] = '';
$db['MTB']['pconnect'] = FALSE;
$db['MTB']['db_debug'] = 'production';
$db['MTB']['cache_on'] = FALSE;
$db['MTB']['cachedir'] = '';
$db['MTB']['char_set'] = 'utf8';
$db['MTB']['dbcollat'] = 'utf8_general_ci';
$db['MTB']['swap_pre'] = '';
$db['MTB']['autoinit'] = TRUE;
$db['MTB']['stricton'] = FALSE;


$db['ISD']['hostname'] = '192.168.126.100'; 
$db['ISD']['username'] = 'root';
$db['ISD']['password'] = 'srsnova';
$db['ISD']['database'] = 'srspos';
$db['ISD']['dbdriver'] = 'mysql';
$db['ISD']['dbprefix'] = '';
$db['ISD']['pconnect'] = FALSE;
$db['ISD']['db_debug'] = 'production';
$db['ISD']['cache_on'] = FALSE;
$db['ISD']['cachedir'] = '';
$db['ISD']['char_set'] = 'utf8';
$db['ISD']['dbcollat'] = 'utf8_general_ci';
$db['ISD']['swap_pre'] = '';
$db['ISD']['autoinit'] = TRUE;
$db['ISD']['stricton'] = FALSE;

$db['SRN']['hostname'] = '192.168.0.179'; 
$db['SRN']['username'] = 'root';
$db['SRN']['password'] = 'srsnova';
$db['SRN']['database'] = 'srspos';
$db['SRN']['dbdriver'] = 'mysql';
$db['SRN']['dbprefix'] = '';
$db['SRN']['pconnect'] = FALSE;
$db['SRN']['db_debug'] = 'production';
$db['SRN']['cache_on'] = FALSE;
$db['SRN']['cachedir'] = '';
$db['SRN']['char_set'] = 'utf8';
$db['SRN']['dbcollat'] = 'utf8_general_ci';
$db['SRN']['swap_pre'] = '';
$db['SRN']['autoinit'] = TRUE;
$db['SRN']['stricton'] = FALSE;



$db['AGR']['hostname'] = '192.168.127.100'; 
$db['AGR']['username'] = 'root';
$db['AGR']['password'] = 'srsnova';
$db['AGR']['database'] = 'srspos';
$db['AGR']['dbdriver'] = 'mysql';
$db['AGR']['dbprefix'] = '';
$db['AGR']['pconnect'] = FALSE;
$db['AGR']['db_debug'] = 'production';
$db['AGR']['cache_on'] = FALSE;
$db['AGR']['cachedir'] = '';
$db['AGR']['char_set'] = 'utf8';
$db['AGR']['dbcollat'] = 'utf8_general_ci';
$db['AGR']['swap_pre'] = '';
$db['AGR']['autoinit'] = TRUE;
$db['AGR']['stricton'] = FALSE;


$db['MR2']['hostname'] = '192.168.129.100'; 
$db['MR2']['username'] = 'root';
$db['MR2']['password'] = 'srsnova';
$db['MR2']['database'] = 'srspos';
$db['MR2']['dbdriver'] = 'mysql';
$db['MR2']['dbprefix'] = '';
$db['MR2']['pconnect'] = FALSE;
$db['MR2']['db_debug'] = 'production';
$db['MR2']['cache_on'] = FALSE;
$db['MR2']['cachedir'] = '';
$db['MR2']['char_set'] = 'utf8';
$db['MR2']['dbcollat'] = 'utf8_general_ci';
$db['MR2']['swap_pre'] = '';
$db['MR2']['autoinit'] = TRUE;
$db['MR2']['stricton'] = FALSE;

$db['MRL']['hostname'] = '192.168.128.100'; 
$db['MRL']['username'] = 'root';
$db['MRL']['password'] = 'srsnova';
$db['MRL']['database'] = 'srspos';
$db['MRL']['dbdriver'] = 'mysql';
$db['MRL']['dbprefix'] = '';
$db['MRL']['pconnect'] = FALSE;
$db['MRL']['db_debug'] = 'production';
$db['MRL']['cache_on'] = FALSE;
$db['MRL']['cachedir'] = '';
$db['MRL']['char_set'] = 'utf8';
$db['MRL']['dbcollat'] = 'utf8_general_ci';
$db['MRL']['swap_pre'] = '';
$db['MRL']['autoinit'] = TRUE;
$db['MRL']['stricton'] = FALSE;


$db['BS2']['hostname'] = '192.168.130.100'; 
$db['BS2']['username'] = 'root';
$db['BS2']['password'] = 'srsnova';
$db['BS2']['database'] = 'srspos';
$db['BS2']['dbdriver'] = 'mysql';
$db['BS2']['dbprefix'] = '';
$db['BS2']['pconnect'] = FALSE;
$db['BS2']['db_debug'] = 'production';
$db['BS2']['cache_on'] = FALSE;
$db['BS2']['cachedir'] = '';
$db['BS2']['char_set'] = 'utf8';
$db['BS2']['dbcollat'] = 'utf8_general_ci';
$db['BS2']['swap_pre'] = '';
$db['BS2']['autoinit'] = TRUE;
$db['BS2']['stricton'] = FALSE;


$db['TNZ']['hostname'] = '192.168.5.29'; 
$db['TNZ']['username'] = 'root';
$db['TNZ']['password'] = 'srsnova';
$db['TNZ']['database'] = 'srspos';
$db['TNZ']['dbdriver'] = 'mysql';
$db['TNZ']['dbprefix'] = '';
$db['TNZ']['pconnect'] = FALSE;
$db['TNZ']['db_debug'] = 'production';
$db['TNZ']['cache_on'] = FALSE;
$db['TNZ']['cachedir'] = '';
$db['TNZ']['char_set'] = 'utf8';
$db['TNZ']['dbcollat'] = 'utf8_general_ci';
$db['TNZ']['swap_pre'] = '';
$db['TNZ']['autoinit'] = TRUE;
$db['TNZ']['stricton'] = FALSE;


$db['SMR']['hostname'] = '192.168.5.26'; 
$db['SMR']['username'] = 'root';
$db['SMR']['password'] = 'srsnova';
$db['SMR']['database'] = 'srspos';
$db['SMR']['dbdriver'] = 'mysql';
$db['SMR']['dbprefix'] = '';
$db['SMR']['pconnect'] = FALSE;
$db['SMR']['db_debug'] = 'production';
$db['SMR']['cache_on'] = FALSE;
$db['SMR']['cachedir'] = '';
$db['SMR']['char_set'] = 'utf8';
$db['SMR']['dbcollat'] = 'utf8_general_ci';
$db['SMR']['swap_pre'] = '';
$db['SMR']['autoinit'] = TRUE;
$db['SMR']['stricton'] = FALSE;


$db['BRX']['hostname'] = '192.168.5.42'; 
$db['BRX']['username'] = 'root';
$db['BRX']['password'] = 'srsnova';
$db['BRX']['database'] = 'srspos';
$db['BRX']['dbdriver'] = 'mysql';
$db['BRX']['dbprefix'] = '';
$db['BRX']['pconnect'] = FALSE;
$db['BRX']['db_debug'] = 'production';
$db['BRX']['cache_on'] = FALSE;
$db['BRX']['cachedir'] = '';
$db['BRX']['char_set'] = 'utf8';
$db['BRX']['dbcollat'] = 'utf8_general_ci';
$db['BRX']['swap_pre'] = '';
$db['BRX']['autoinit'] = TRUE;
$db['BRX']['stricton'] = FALSE;

$db['RSR']['hostname'] = '192.168.5.45'; 
$db['RSR']['username'] = 'root';
$db['RSR']['password'] = 'srsnova';
$db['RSR']['database'] = 'srspos';
$db['RSR']['dbdriver'] = 'mysql';
$db['RSR']['dbprefix'] = '';
$db['RSR']['pconnect'] = FALSE;
$db['RSR']['db_debug'] = 'production';
$db['RSR']['cache_on'] = FALSE;
$db['RSR']['cachedir'] = '';
$db['RSR']['char_set'] = 'utf8';
$db['RSR']['dbcollat'] = 'utf8_general_ci';
$db['RSR']['swap_pre'] = '';
$db['RSR']['autoinit'] = TRUE;
$db['RSR']['stricton'] = FALSE;


$db['CDF']['hostname'] = '192.168.109.14'; 
$db['CDF']['username'] = 'root';
$db['CDF']['password'] = 'srsnova';
$db['CDF']['database'] = 'cmpalengke_deparo_franchise';
$db['CDF']['dbdriver'] = 'mysql';
$db['CDF']['dbprefix'] = '';
$db['CDF']['pconnect'] = FALSE;
$db['CDF']['db_debug'] = 'production';
$db['CDF']['cache_on'] = FALSE;
$db['CDF']['cachedir'] = '';
$db['CDF']['char_set'] = 'utf8';
$db['CDF']['dbcollat'] = 'utf8_general_ci';
$db['CDF']['swap_pre'] = '';
$db['CDF']['autoinit'] = TRUE;
$db['CDF']['stricton'] = FALSE;


$db['CTF']['hostname'] = '192.168.5.23'; 
$db['CTF']['username'] = 'root';
$db['CTF']['password'] = 'srsnova';
$db['CTF']['database'] = 'cmpalengke_tala_franchise';
$db['CTF']['dbdriver'] = 'mysql';
$db['CTF']['dbprefix'] = '';
$db['CTF']['pconnect'] = FALSE;
$db['CTF']['db_debug'] = 'production';
$db['CTF']['cache_on'] = FALSE;
$db['CTF']['cachedir'] = '';
$db['CTF']['char_set'] = 'utf8';
$db['CTF']['dbcollat'] = 'utf8_general_ci';
$db['CTF']['swap_pre'] = '';
$db['CTF']['autoinit'] = TRUE;
$db['CTF']['stricton'] = FALSE;


$db['BSF']['hostname'] = '192.168.109.19'; 
$db['BSF']['username'] = 'root';
$db['BSF']['password'] = 'srsnova';
$db['BSF']['database'] = 'cmpalengke_phase3_franchise';
$db['BSF']['dbdriver'] = 'mysql';
$db['BSF']['dbprefix'] = '';
$db['BSF']['pconnect'] = FALSE;
$db['BSF']['db_debug'] = 'production';
$db['BSF']['cache_on'] = FALSE;
$db['BSF']['cachedir'] = '';
$db['BSF']['char_set'] = 'utf8';
$db['BSF']['dbcollat'] = 'utf8_general_ci';
$db['BSF']['swap_pre'] = '';
$db['BSF']['autoinit'] = TRUE;
$db['BSF']['stricton'] = FALSE;


$db['CLF']['hostname'] = '192.168.109.12'; 
$db['CLF']['username'] = 'root';
$db['CLF']['password'] = 'srsnova';
$db['CLF']['database'] = 'cmpalengke_llano_franchise';
$db['CLF']['dbdriver'] = 'mysql';
$db['CLF']['dbprefix'] = '';
$db['CLF']['pconnect'] = FALSE;
$db['CLF']['db_debug'] = 'production';
$db['CLF']['cache_on'] = FALSE;
$db['CLF']['cachedir'] = '';
$db['CLF']['char_set'] = 'utf8';
$db['CLF']['dbcollat'] = 'utf8_general_ci';
$db['CLF']['swap_pre'] = '';
$db['CLF']['autoinit'] = TRUE;
$db['CLF']['stricton'] = FALSE;


$db['MNG']['hostname'] = '192.168.124.100'; 
$db['MNG']['username'] = 'root';
$db['MNG']['password'] = 'srsnova';
$db['MNG']['database'] = 'srspos';
$db['MNG']['dbdriver'] = 'mysql';
$db['MNG']['dbprefix'] = '';
$db['MNG']['pconnect'] = FALSE;
$db['MNG']['db_debug'] = 'production';
$db['MNG']['cache_on'] = FALSE;
$db['MNG']['cachedir'] = '';
$db['MNG']['char_set'] = 'utf8';
$db['MNG']['dbcollat'] = 'utf8_general_ci';
$db['MNG']['swap_pre'] = '';
$db['MNG']['autoinit'] = TRUE;
$db['MNG']['stricton'] = FALSE;


$db['CSF']['hostname'] = '192.168.5.22'; 
$db['CSF']['username'] = 'root';
$db['CSF']['password'] = 'srsnova';
$db['CSF']['database'] = 'cmpalengke_sanana_franchise';
$db['CSF']['dbdriver'] = 'mysql';
$db['CSF']['dbprefix'] = '';
$db['CSF']['pconnect'] = FALSE;
$db['CSF']['db_debug'] = 'production';
$db['CSF']['cache_on'] = FALSE;
$db['CSF']['cachedir'] = '';
$db['CSF']['char_set'] = 'utf8';
$db['CSF']['dbcollat'] = 'utf8_general_ci';
$db['CSF']['swap_pre'] = '';
$db['CSF']['autoinit'] = TRUE;
$db['CSF']['stricton'] = FALSE;



$db['TWF']['hostname'] = '192.168.5.17'; 
$db['TWF']['username'] = 'root';
$db['TWF']['password'] = 'srsnova';
$db['TWF']['database'] = 'cmpalengke_towerville_franchise';
$db['TWF']['dbdriver'] = 'mysql';
$db['TWF']['dbprefix'] = '';
$db['TWF']['pconnect'] = FALSE;
$db['TWF']['db_debug'] = 'production';
$db['TWF']['cache_on'] = FALSE;
$db['TWF']['cachedir'] = '';
$db['TWF']['char_set'] = 'utf8';
$db['TWF']['dbcollat'] = 'utf8_general_ci';
$db['TWF']['swap_pre'] = '';
$db['TWF']['autoinit'] = TRUE;
$db['TWF']['stricton'] = FALSE;


$db['PLF']['hostname'] = '192.168.5.30'; 
$db['PLF']['username'] = 'root';
$db['PLF']['password'] = 'srsnova';
$db['PLF']['database'] = 'cmpalengke_spalay_franchise';
$db['PLF']['dbdriver'] = 'mysql';
$db['PLF']['dbprefix'] = '';
$db['PLF']['pconnect'] = FALSE;
$db['PLF']['db_debug'] = 'production';
$db['PLF']['cache_on'] = FALSE;
$db['PLF']['cachedir'] = '';
$db['PLF']['char_set'] = 'utf8';
$db['PLF']['dbcollat'] = 'utf8_general_ci';
$db['PLF']['swap_pre'] = '';
$db['PLF']['autoinit'] = TRUE;
$db['PLF']['stricton'] = FALSE;


$db['B9F']['hostname'] = '192.168.109.20'; 
$db['B9F']['username'] = 'root';
$db['B9F']['password'] = 'srsnova';
$db['B9F']['database'] = 'cmpalengke_phase9_franchise';
$db['B9F']['dbdriver'] = 'mysql';
$db['B9F']['dbprefix'] = '';
$db['B9F']['pconnect'] = FALSE;
$db['B9F']['db_debug'] = 'production';
$db['B9F']['cache_on'] = FALSE;
$db['B9F']['cachedir'] = '';
$db['B9F']['char_set'] = 'utf8';
$db['B9F']['dbcollat'] = 'utf8_general_ci';
$db['B9F']['swap_pre'] = '';
$db['B9F']['autoinit'] = TRUE;
$db['B9F']['stricton'] = FALSE;


$db['B7F']['hostname'] = '192.168.5.7'; 
$db['B7F']['username'] = 'root';
$db['B7F']['password'] = 'srsnova';
$db['B7F']['database'] = 'cmpalengke_p7_franchisee';
$db['B7F']['dbdriver'] = 'mysql';
$db['B7F']['dbprefix'] = '';
$db['B7F']['pconnect'] = FALSE;
$db['B7F']['db_debug'] = 'production';
$db['B7F']['cache_on'] = FALSE;
$db['B7F']['cachedir'] = '';
$db['B7F']['char_set'] = 'utf8';
$db['B7F']['dbcollat'] = 'utf8_general_ci';
$db['B7F']['swap_pre'] = '';
$db['B7F']['autoinit'] = TRUE;
$db['B7F']['stricton'] = FALSE;


$db['BBF']['hostname'] = '192.168.109.29'; 
$db['BBF']['username'] = 'root';
$db['BBF']['password'] = 'srsnova';
$db['BBF']['database'] = 'cmpalengke_bagbaguin_franchise';
$db['BBF']['dbdriver'] = 'mysql';
$db['BBF']['dbprefix'] = '';
$db['BBF']['pconnect'] = FALSE;
$db['BBF']['db_debug'] = 'production';
$db['BBF']['cache_on'] = FALSE;
$db['BBF']['cachedir'] = '';
$db['BBF']['char_set'] = 'utf8';
$db['BBF']['dbcollat'] = 'utf8_general_ci';
$db['BBF']['swap_pre'] = '';
$db['BBF']['autoinit'] = TRUE;
$db['BBF']['stricton'] = FALSE;

$db['FBF']['hostname'] = '192.168.5.40'; 
$db['FBF']['username'] = 'root';
$db['FBF']['password'] = 'srsnova';
$db['FBF']['database'] = 'cmpalengke_francisco_franchise';
$db['FBF']['dbdriver'] = 'mysql';
$db['FBF']['dbprefix'] = '';
$db['FBF']['pconnect'] = FALSE;
$db['FBF']['db_debug'] = 'production';
$db['FBF']['cache_on'] = FALSE;
$db['FBF']['cachedir'] = '';
$db['FBF']['char_set'] = 'utf8';
$db['FBF']['dbcollat'] = 'utf8_general_ci';
$db['FBF']['swap_pre'] = '';
$db['FBF']['autoinit'] = TRUE;
$db['FBF']['stricton'] = FALSE;


$db['PMR']['hostname'] = '192.168.109.18'; 
$db['PMR']['username'] = 'root';
$db['PMR']['password'] = 'srsnova';
$db['PMR']['database'] = 'cmpalengke_palmera_franchise';
$db['PMR']['dbdriver'] = 'mysql';
$db['PMR']['dbprefix'] = '';
$db['PMR']['pconnect'] = FALSE;
$db['PMR']['db_debug'] = 'production';
$db['PMR']['cache_on'] = FALSE;
$db['PMR']['cachedir'] = '';
$db['PMR']['char_set'] = 'utf8';
$db['PMR']['dbcollat'] = 'utf8_general_ci';
$db['PMR']['swap_pre'] = '';
$db['PMR']['autoinit'] = TRUE;
$db['PMR']['stricton'] = FALSE;


$db['ABD']['hostname'] = '192.168.5.25'; 
$db['ABD']['username'] = 'root';
$db['ABD']['password'] = 'srsnova';
$db['ABD']['database'] = 'cmpalengke_bdulo_franchise';
$db['ABD']['dbdriver'] = 'mysql';
$db['ABD']['dbprefix'] = '';
$db['ABD']['pconnect'] = FALSE;
$db['ABD']['db_debug'] = 'production';
$db['ABD']['cache_on'] = FALSE;
$db['ABD']['cachedir'] = '';
$db['ABD']['char_set'] = 'utf8';
$db['ABD']['dbcollat'] = 'utf8_general_ci';
$db['ABD']['swap_pre'] = '';
$db['ABD']['autoinit'] = TRUE;
$db['ABD']['stricton'] = FALSE;




$db['SCF']['hostname'] = '192.168.5.28'; 
$db['SCF']['username'] = 'root';
$db['SCF']['password'] = 'srsnova';
$db['SCF']['database'] = 'cmpalengke_stocristo_franchise';
$db['SCF']['dbdriver'] = 'mysql';
$db['SCF']['dbprefix'] = '';
$db['SCF']['pconnect'] = FALSE;
$db['SCF']['db_debug'] = 'production';
$db['SCF']['cache_on'] = FALSE;
$db['SCF']['cachedir'] = '';
$db['SCF']['char_set'] = 'utf8';
$db['SCF']['dbcollat'] = 'utf8_general_ci';
$db['SCF']['swap_pre'] = '';
$db['SCF']['autoinit'] = TRUE;
$db['SCF']['stricton'] = FALSE;


$db['VGD']['hostname'] = '192.168.5.18'; 
$db['VGD']['username'] = 'root';
$db['VGD']['password'] = 'srsnova';
$db['VGD']['database'] = 'cmpalengke_vanguard_franchise';
$db['VGD']['dbdriver'] = 'mysql';
$db['VGD']['dbprefix'] = '';
$db['VGD']['pconnect'] = FALSE;
$db['VGD']['db_debug'] = 'production';
$db['VGD']['cache_on'] = FALSE;
$db['VGD']['cachedir'] = '';
$db['VGD']['char_set'] = 'utf8';
$db['VGD']['dbcollat'] = 'utf8_general_ci';
$db['VGD']['swap_pre'] = '';
$db['VGD']['autoinit'] = TRUE;
$db['VGD']['stricton'] = FALSE;

$db['BRK']['hostname'] = '192.168.5.33'; 
$db['BRK']['username'] = 'root';
$db['BRK']['password'] = 'srsnova';
$db['BRK']['database'] = 'cmpalengke_barracks_franchise';
$db['BRK']['dbdriver'] = 'mysql';
$db['BRK']['dbprefix'] = '';
$db['BRK']['pconnect'] = FALSE;
$db['BRK']['db_debug'] = 'production';
$db['BRK']['cache_on'] = FALSE;
$db['BRK']['cachedir'] = '';
$db['BRK']['char_set'] = 'utf8';
$db['BRK']['dbcollat'] = 'utf8_general_ci';
$db['BRK']['swap_pre'] = '';
$db['BRK']['autoinit'] = TRUE;
$db['BRK']['stricton'] = FALSE;

$db['CBF']['hostname'] = '192.168.109.11'; 
$db['CBF']['username'] = 'root';
$db['CBF']['password'] = 'srsnova';
$db['CBF']['database'] = 'cmpalengke_batasan_franchise';
$db['CBF']['dbdriver'] = 'mysql';
$db['CBF']['dbprefix'] = '';
$db['CBF']['pconnect'] = FALSE;
$db['CBF']['db_debug'] = 'production';
$db['CBF']['cache_on'] = FALSE;
$db['CBF']['cachedir'] = '';
$db['CBF']['char_set'] = 'utf8';
$db['CBF']['dbcollat'] = 'utf8_general_ci';
$db['CBF']['swap_pre'] = '';
$db['CBF']['autoinit'] = TRUE;
$db['CBF']['stricton'] = FALSE;


$db['CT2']['hostname'] = '192.168.5.4'; 
$db['CT2']['username'] = 'root';
$db['CT2']['password'] = 'srsnova';
$db['CT2']['database'] = 'cmpalengke_tala2_franchise';
$db['CT2']['dbdriver'] = 'mysql';
$db['CT2']['dbprefix'] = '';
$db['CT2']['pconnect'] = FALSE;
$db['CT2']['db_debug'] = 'production';
$db['CT2']['cache_on'] = FALSE;
$db['CT2']['cachedir'] = '';
$db['CT2']['char_set'] = 'utf8';
$db['CT2']['dbcollat'] = 'utf8_general_ci';
$db['CT2']['swap_pre'] = '';
$db['CT2']['autoinit'] = TRUE;
$db['CT2']['stricton'] = FALSE;

$db['MNY']['hostname'] = '192.168.5.31'; 
$db['MNY']['username'] = 'root';
$db['MNY']['password'] = 'srsnova';
$db['MNY']['database'] = 'cmpalengke_minuyan_franchise';
$db['MNY']['dbdriver'] = 'mysql';
$db['MNY']['dbprefix'] = '';
$db['MNY']['pconnect'] = FALSE;
$db['MNY']['db_debug'] = 'production';
$db['MNY']['cache_on'] = FALSE;
$db['MNY']['cachedir'] = '';
$db['MNY']['char_set'] = 'utf8';
$db['MNY']['dbcollat'] = 'utf8_general_ci';
$db['MNY']['swap_pre'] = '';
$db['MNY']['autoinit'] = TRUE;
$db['MNY']['stricton'] = FALSE;

$db['CB2']['hostname'] = '192.168.5.35'; 
$db['CB2']['username'] = 'root';
$db['CB2']['password'] = 'srsnova';
$db['CB2']['database'] = 'cmpalengke_batasan2_franchise';
$db['CB2']['dbdriver'] = 'mysql';
$db['CB2']['dbprefix'] = '';
$db['CB2']['pconnect'] = FALSE;
$db['CB2']['db_debug'] = 'production';
$db['CB2']['cache_on'] = FALSE;
$db['CB2']['cachedir'] = '';
$db['CB2']['char_set'] = 'utf8';
$db['CB2']['dbcollat'] = 'utf8_general_ci';
$db['CB2']['swap_pre'] = '';
$db['CB2']['autoinit'] = TRUE;
$db['CB2']['stricton'] = FALSE;




$db['CMT']['hostname'] = '192.168.5.37'; 
$db['CMT']['username'] = 'root';
$db['CMT']['password'] = 'srsnova';
$db['CMT']['database'] = 'cmpalengke_commonwealth_franchise';
$db['CMT']['dbdriver'] = 'mysql';
$db['CMT']['dbprefix'] = '';
$db['CMT']['pconnect'] = FALSE;
$db['CMT']['db_debug'] = 'production';
$db['CMT']['cache_on'] = FALSE;
$db['CMT']['cachedir'] = '';
$db['CMT']['char_set'] = 'utf8';
$db['CMT']['dbcollat'] = 'utf8_general_ci';
$db['CMT']['swap_pre'] = '';
$db['CMT']['autoinit'] = TRUE;
$db['CMT']['stricton'] = FALSE;





