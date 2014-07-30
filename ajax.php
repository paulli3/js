<?php
$a = var_export($_REQUEST,true);
//sleep(3);
header("Content-Type: text/xml");
?>
<?xml version="1.0" encoding="utf8"?>
<root><![CDATA[

<?php echo $a;?>

]]></root>
