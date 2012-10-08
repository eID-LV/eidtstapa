<?php

error_reporting(E_ALL); 
ini_set( 'display_errors','1');

	function get_smartcard_user(){	
		$smartcard_user = array();
	
		if (!isset($_SERVER['SSL_CLIENT_S_DN_CN'])) {
			$smartcard_user['fullname'] = "";
			$smartcard_user['firstname'] = "";
			$smartcard_user['lastname']  = "";
		} else {
			
			$smartcard_user['fullname'] = $_SERVER['SSL_CLIENT_S_DN_CN'];
			
			$username_split = mb_split(" ", $smartcard_user['fullname']);	
			
			if (count($username_split) >=2) {
				$smartcard_user['firstname'] = $username_split[0];
				$smartcard_user['lastname']  = $username_split[1];
			} else {
				$smartcard_user['firstname'] = "";
				$smartcard_user['lastname']  = "";
			}
		}
		
		if (!isset($_SERVER['SSL_CLIENT_S_DN_CN'])) {
			$smartcard_user['serial'] = "";
		} else {		
			//preg_match('/(?<=serialNumber=)\d+/', $_SERVER['SSL_CLIENT_S_DN'], $serial_in_array);
			//$serial = $serial_in_array[0];

			$serialNumber = substr(strrchr($_SERVER['SSL_CLIENT_S_DN'], "/"), 1 );

			if(strpos ( $serialNumber  , "serialNumber=" ) !== false){
				$serial = substr(strrchr($serialNumber, "="), 1 );
			} else {
				$serial = "";
			}
				
			//if(!$serial){
			//	$serial = "";
			//}
				
			$smartcard_user['serial'] = $serial;
		}
		
		return $smartcard_user;
	}
	
//viss server requests
$server_variable = print_r($_SERVER, true);

//lietotaja dati
$smartcard_user = get_smartcard_user();

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<BR>SMARTCARD USER:<BR>";


echo "<pre>";
print_r($smartcard_user);
echo "</pre>";


?>