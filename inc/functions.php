<?php

/**
 * check_browser() 
 * checks for allowed browser
 * uses http://browsers.garykeith.com/downloads.asp browscap.ini
 *
 * @return error message if browser is mobile device or not allowed (Firefox, Opera)
 * @return False, if browser ok
 */ 
 
 
function check_browser() {
	$browser = get_browser(null, true);
	$error_text = "";

	//return error if mobile device is detected
	if ($browser['ismobiledevice'] == '1') {
		$error = '<div class="alert"><strong>Kļūda!</strong> Pārbaude nav iespējama, izmantojot mobilo ierīci.</div>';
		return $error;
	}
	
	//return error if Firefox is detected
	if ($browser["browser"] == "Firefox"){
		$error = '<div class="alert"><strong>Kļūda!</strong> Pārbaude nav iespējama, izmantojot Firefox pārlūkprogrammu.</div>';
		return $error;		
	}

	//return error if Opera is detected
	if ($browser["browser"] == "Opera"){
		$error = '<div class="alert"><strong>Kļūda!</strong> Pārbaude nav iespējama, izmantojot Opera pārlūkprogrammu.</div>';
		return $error;		
	}

	//return false if no error
	return false;
}


function check_browser_en() {
	$browser = get_browser(null, true);
	$error_text = "";
	
	//return error if mobile device is detected
	if ($browser['ismobiledevice'] == '1') {
		$error = '<div class="alert"><strong>Error!</strong> Test is not available from mobile devices.</div>';
		return $error;
	}
	
	//return error if Firefox is detected	
	if ($browser["browser"] == "Firefox"){
		$error = '<div class="alert"><strong>Error!</strong> Test is not available for Firefox browser.</div>';
		return $error;		
	}

	//return error if Opera is detected
	if ($browser["browser"] == "Opera"){
		$error = '<div class="alert"><strong>Error!</strong> Test is not available for Opera browser.</div>';
		return $error;		
	}

	return false;
}

/**
 * get_smartcard_user()
 * gets smartcard user info from $_SERVER variable
 *
 * @param array $_SERVER
 * 
 * @return array $smartcard_user
 * fullname - personas fullname (CN)
 * firstname - persons givenname
 * lastname - persons surname
 * serial - persons identification number
 * SSL_CLIENT_V_END - certificate expirity date
 * 
 */ 
function get_smartcard_user(){
		
		$smartcard_user = array();
		
		//person name fields
		if (!isset($_SERVER['SSL_CLIENT_S_DN_CN'])) {
			$smartcard_user['fullname'] = "";
			$smartcard_user['firstname'] = "";
			$smartcard_user['lastname']  = "";
		} else {
			
			$smartcard_user['fullname'] = $_SERVER['SSL_CLIENT_S_DN_CN'];
			$username_split = explode(" ", $smartcard_user['fullname']);	
			
			if (count($username_split) >=2) {
				$smartcard_user['firstname'] = $username_split[0];
				$smartcard_user['lastname']  = $username_split[1];
			} else {
				$smartcard_user['firstname'] = "";
				$smartcard_user['lastname']  = "";
			}
		}
		
		//person identification number
		if (!isset($_SERVER['SSL_CLIENT_S_DN_CN'])) {
			$smartcard_user['serial'] = "";
		} else {		

			$serialNumber = substr(strrchr($_SERVER['SSL_CLIENT_S_DN'], "/"), 1 );

			if(strpos ( $serialNumber  , "serialNumber=" ) !== false){
				$serial = substr(strrchr($serialNumber, "="), 1 );
			} else {
				$serial = "";
			}
				
			$smartcard_user['serial'] = $serial;
		}
		
		//certificate expirity date
		if (!isset($_SERVER['SSL_CLIENT_V_END'])){
			 $smartcard_user['SSL_CLIENT_V_END'] = $_SERVER['SSL_CLIENT_V_END'];
		} else {
			 $smartcard_user['SSL_CLIENT_V_END'] = "";
		}
		
		return $smartcard_user;
	}



?>