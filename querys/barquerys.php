
<?php
//include 'dbconfig.php';

function fqinspictureusr($userid, $pos, $picursdir){
	
	$con = connDB();
    $query = "INSERT INTO pictureusr(picusrusrid,picusrpos,picusrdir) 
		VALUES('$userid', '$pos', '$picursdir')";
	//echo $query;	
	$r = mysqli_query($con, $query);

	discDB($con);
	return $r;
}

function fqselpicturesusr($usrid){
	$con = connDB();
    $query = "SELECT * FROM pictureusr WHERE picusrusrid = '$usrid'";
    //echo $query;
	$r = mysqli_query($con, $query);

	discDB($con);
	return $r;
}

function fqselpicturesusrid($usrid, $pos){
	$con = connDB();
    $query = "SELECT * FROM pictureusr WHERE picusrusrid = '$usrid' AND picusrpos = '$pos'";
    echo $query;
	$r = mysqli_query($con, $query);

	discDB($con);
	return $r;
}

function fqdelpicturesusrid($picusrid){
	$con = connDB();
    $query = "DELETE FROM pictureusr WHERE picusrid='$picusrid'";
    echo $query;
	$r = mysqli_query($con, $query);

	discDB($con);
	return $r;
}



?>