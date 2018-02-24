<?php
		
	/**
	* @Name: adQui PHP Adcode
	* @Version: 1.0
	* @Author: Pavel
	* @Website: http://adqui.com
	*/
			
	$userid = $uid; //Your User Id

	$siteId = $sid; //Your Site Id
			
			
	$url = 'http://ads.adqui.com/'.$userid.'/phpcode/'.$siteid.'';
			
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: en-us,en;q=0.7,de-de;q=0.3',
													'Accept: text/xml,
													application/xml,
													application/xhtml+xml,
													text/html;q=0.9,
													text/plain;q=0.8,
													image/png,
													*/*;q=0.5'
													)
	);
	$data = curl_exec($ch);
	curl_close($ch);
			
	echo $data;
		
?>