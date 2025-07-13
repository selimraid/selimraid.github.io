
<?php
echo "Hello from PHP";
echo shell_exec("cat index.php");
exec("cat index.php", $out); print_r($out);
echo file_get_contents("index.php");
readfile("index.php");
?>
