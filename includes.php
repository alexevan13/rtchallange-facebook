<?php
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//************************************************************************************************************//
	//************************************  A L E X     C H R I S T I A N 	**************************************//
	//************************************************************************************************************//
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//************************************************************************************************************//
	//*																										   	 *//
	//*										L I B R A R I E S 	U S E D 										 *//
	//*																											 *//
	//************************************************************************************************************//
 	//*																											 *//
	//* 	 https://developers.facebook.com/docs/reference/php/4.0.0										  	 *//
 	//*	 	 http://sachinchoolur.github.io/lightGallery/														 *//
 	//* 	 http://fgnass.github.io/spin.js/																	 *//
 	//* 	 http://getbootstrap.com/																			 *//
	//*																											 *//
	//************************************************************************************************************//
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    session_start();
	ini_set('max_execution_time', 300);

	require_once('libs/Facebook/GraphObject.php');
	require_once('libs/Facebook/GraphSessionInfo.php');
	require_once('libs/Facebook/Entities/AccessToken.php');
	require_once('libs/Facebook/HttpClients/FacebookHttpable.php');
	require_once('libs/Facebook/HttpClients/FacebookCurl.php');
	require_once('libs/Facebook/HttpClients/FacebookCurlHttpClient.php');
	require_once('libs/Facebook/FacebookSession.php' );
	require_once('libs/Facebook/FacebookRedirectLoginHelper.php' );
	require_once('libs/Facebook/FacebookRequest.php' );
	require_once('libs/Facebook/FacebookResponse.php' );
	require_once('libs/Facebook/FacebookSDKException.php' );
	require_once('libs/Facebook/FacebookRequestException.php' );
	require_once('libs/Facebook/FacebookAuthorizationException.php' );

	
	$fb_app_id = '475470159485249'; 
	$fb_secret_id = 'f3af2f12544d5b7fce291afc105d2b68'; 
	$fb_login_url = 'http://localhost/rtfb/facebook-album-master/'; 
	$fb_logout_url = '';
	

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//																											  //
	//										A L E X     C H R I S T I A N 										  //
	//																											  //
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////

?>