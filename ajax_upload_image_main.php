<?php
include 'querys/dbconfig.php';
include 'querys/barquerys.php';

$userid = 1;
$respicusr = fqselpicturesusr($userid);
while ($picusr = mysqli_fetch_array($respicusr) ){
	$pos = $picusr['picusrpos'] - 1;
    $pictures[$pos] = $picusr;
}

$therispic = false;
?>
<html>
<head>
<title>Ajax Image Upload Using PHP and jQuery</title>
<link rel="stylesheet" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">

<div class="main">
<hr>

<form id="uploadimage1" action="" method="post" enctype="multipart/form-data">
<div id="image_preview1" style = "width:100%; height:300px;">
	<img class="img-responsive vertical_center" id="previewing1" src="<?php if(!empty($pictures[0])){echo $pictures[0]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file1" id="file1" onchange="cambio(1)" required />
<input style="display:none"type="text" name="pos" id = "pos" value="1"><br>
<input style="display:none"type="text" name="fileid" id = "fileid" value="file1"><br>
<input style="display:none"type="text" name="userid" id = "userid" value="1"><br>


<?php if(empty($pictures[0])){
	echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(0)'/>";
}else{
	echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(0)' />";
}?>
</div>
</form>
</div>




<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
<div class="main">
<hr>
<form id="uploadimage2" action="" method="post" enctype="multipart/form-data">
<div id="image_preview2" style = "width:100%; height:300px;">
	<img class="img-responsive vertical_center" id="previewing2" src="<?php if(!empty($pictures[1])){echo $pictures[1]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file2" id="file2" onchange="cambio(2)" required />
<input style="display:none;"type="text" name="pos" id = "pos" value="2"><br>
<input style="display:none;"type="text" name="fileid" id = "fileid" value="file2"><br>
<input style="display:none;"type="text" name="userid" id = "userid" value="1"><br>
<?php if(empty($pictures[1])){
	echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(1)'/>";
}else{
	echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(1)' />";
}?>
</form>
</div>
</div>





</div>

<h4 id='loading' >loading..</h4>
<div id="message"></div>
</div>





</body>
</html>