<?php

/************************************

Script : Adnetwork
Website : http://facebook.com/pranto007

Script is created and provided by Pranto (http://facebook.com/pranto007)
**************************************/

include 'db.php';
include 'functions.php';

headtag("$SiteName -Banner Adcodes");

if($userlog==1){

echo '<div class="title">Banner Adcode</div>';
$site=formget("id");

$uid=dump_udata("id");

$chsite=mysql_query("SELECT * FROM sites WHERE userid='$uid' AND id='$site'");
$uc = mysql_query("SELECT * FROM sites WHERE userid='$uid' AND id='$site'");
$ucweb = mysql_fetch_array($uc);

if(mysql_num_rows($chsite)>0){




echo '<div class="ok"><b><font
color="black"> Warning : </font>Using One Sites Code To Another Site Will Lead Your Account
Blocking</b></a></div>';


if($ucweb[adult]==0){
echo '<div class="form"><b> Html Banner Code </b><br><textarea cols="40" rows="3">
<a href="http://sparkhost.me/'.$uid.'/html/'.$site.'"><img src="http://sparkhost.me/banner.php" alt=""/></a></textarea>
<br><b>Demo : </b></br><a href="http://sparkhost.me/'.$uid.'/html/'.$site.'"><img src="http://sparkhost.me/banner.php" alt=""/></a></div>';} 
if($ucweb[adult]==1){
echo '<div class="form"><b> Html Banner Code </b><br><textarea cols="40" rows="3">
<a href="http://sparkhost.me/'.$uid.'/html/'.$site.'"><img src="http://sparkhost.me/adultb.php" alt=""/></a></textarea><br>
<b>Demo : </b></br><a href="http://sparkhost.me/'.$uid.'/html/'.$site.'"><img src="http://sparkhost.me/adultb.php" alt=""/></a></div>';}
} else {
echo '<div class="error">You do not own this site!</div>';
}

echo '<div class="page"><a href="/user/dashboard"> Go Back To Dashboard</a></div>';

include 'foot.php';
}
else {

header('Location:/');
}
?>

