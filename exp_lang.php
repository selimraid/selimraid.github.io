
<?php
echo "Hello from PHP";
echo system("cat index.php", $retval);
echo '<?php echo system("cat index.php", $retval); ?>';
?>
