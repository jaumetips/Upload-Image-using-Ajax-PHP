<?php
include 'querys/dbconfig.php';
include 'querys/barquerys.php';


$pos = $_POST['pos'];
$userid = $_POST['userid'];

$respicusr = fqselpicturesusrid($userid, $pos);
$picusr = mysqli_fetch_array($respicusr);
unlink($picusr['picusrdir']);


$picusrid = $picusr['picusrid'];
fqdelpicturesusrid($picusrid);

header("Refresh:0");
	
?>