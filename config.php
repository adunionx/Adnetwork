<?php

ini_set('display_errors','0');
 date_default_timezone_set('Africa/Lagos');

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
$database=array(
'db_host'=>'localhost', // Host Name (Mostly localhost), otherwise ask your hosting provider for mysql host name : becareful don't add nay extra space before and after database name
'db_user'=>'masticit_you',   // Databse Username:  becareful don't add nay extra space before and after database name
'db_pass'=>'natan@321',  // Database Password  becareful don't add nay extra space before and after database name
'db_name'=>'masticit_you'  // Database name , becareful don't add nay extra space before and after database name

);

$siteurl='http://masticity.info/';   // MAIN URL must replace with your domain name and don't forgot to add trailing end slash

$sitename='Download Mp3';  // Main site name use almost in whole script.
$description='Search And Download MP3 Songs';  // This will use for Home page description 
$lang_default='en';  // Deault Language to set en = English, de = Dutch, fr = French and br = brazilian

$song_rewrite='mp3';  // Rewrite rules, read installation PDF file for instruction
$album_rewrite='album';   // Rewrite rules, read installation PDF file for instruction
$download_rewrite='download';  // Rewrite rules, read installation PDF file for instruction


$country_name='India';  // Not relly important currently not using in Script
$country_code='in';  // us ,gb, de, fr etc.. code for itunes store
$ytapi='
API 1
API 2
API 3
';  // Youtube API add new api in new line

/* 
*
*  This area is for how many itunes query, youtube results and mysql results are display. do you experiment here
*
*/
$gener_album='30';
$topreleated='20';
$now_down='10';
$freshmusic='30';
$topalbum='5';  // Max 20
$top_list='24';  // Max 30
/*
*
*   END HERE for Result Numbers
*
*/



$download_option='3';  // 0 to 3 Download Option
$footer_analytics='ab';  // Analtycs or counter code (don't forgot to replace ' comma with double domma)
$ads_head='';  // Add inside <head> tags
$adabovesearch='ad';  // Ad above Search box
$ad_footer='ae';  // Footer Ad
$ad_link='af';  // Affiliate link on download page

/*
*
*  NOTE: If you select the 'single' you must replace single.htaccess file content with '.htaccess" file, do the same with 'multi'
*
*/
$m_l='multi';  // 'multi' for Multi Language // 'single' for Single Language Only
          

$api = preg_split("/\r\n|\n|\r/", $ytapi);
$api=array_filter($api);
$k = array_rand($api);
$api_key_yt = $api[$k];
