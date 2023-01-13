<?php session_start();  ob_start("ob_gzhandler"); set_time_limit(0); 

$website="https:/"; //Make this full url including folders of where login files resides
// http://b-olam.kz/images/iv/

//sanitize data where any character is allowed
function sanitizer($check){
	$check=str_replace("\'","'",$check);
	$check=str_replace('\"','"',$check);
	$check=str_replace("\\","TN9OO***:::::t&*HHHHOOOoooo0000N",$check); //just to keep track of what I will change later
	$check=trim($check);
	$check=str_replace("<","&lt;",$check);
	$check=str_replace('>','&gt;',$check);
	$check=str_replace("\r\n","<br/>",$check);
	$check=str_replace("\n","<br/>",$check);
	$check=str_replace("\r","<br/>",$check);
	$check=str_replace("'","&#39;",$check);
	$check=str_replace('"','&quot;',$check);
	$check=str_replace("TN9OO***:::::t&*HHHHOOOoooo0000N","&#92;",$check); //returning backslash in html entity
	 return $check;}
	 
//makes data ok on edit textarea
 function resanitize($check){
	$check=str_replace("<br/>","\r\n",$check);
	$check=str_replace("<br/>","\n",$check);
	$check=str_replace("<br/>","\r",$check);
	$check=str_replace("&gt;",">",$check);
	$check=str_replace("&lt;","<",$check);
	$check=str_replace("&#39;","'",$check);
	$check=str_replace('&quot;','"',$check);
	 return $check;}

//validate email address
function validate_email($email){
	$status=false;
	$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	if(preg_match($regex, $email)){$status=true;}
	return $status; }
	
?>