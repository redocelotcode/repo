<?php
require_once("../index.php");

/**
 * K thats your job lol -RL
 *
 * put the example code below but you'll need to install phpchart
 * might flag a virus but it seems to be one with a high false-positive rate
 */
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpChart - A Basic Chart</title>
</head>
<body>

<?php
$pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
$pc->draw();
?>

</body>
</html>