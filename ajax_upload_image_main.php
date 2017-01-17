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


<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
        .btn-circle {
  width: 49px;
  height: 49px;
  text-align: center;
  padding: 5px 0;
  font-size: 20px;
  line-height: 2.00;
  border-radius: 30px;
}

.btn-circle-micro {
  width: 19px;
  height: 19px;
  text-align: center;
  padding: 1px 0;
  font-size: 13px;
  line-height: 0.1;
  border-radius: 30px;
}

.btn-circle-sm {
  width: 35px;
  height: 35px;
  text-align: center;
  padding: 2px 0;
  font-size: 20px;
  line-height: 1.65;
  border-radius: 30px;
}

.btn-circle-lg {
  width: 79px;
  height: 79px;
  text-align: center;
  padding: 13px 0;
  font-size: 30px;
  line-height: 2.00;
  border-radius: 70px;
}
    </style>

</head>
<body>


<div class="container">
	<div class="row">



		<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="main">
<form id="uploadimage1" action="" method="post" enctype="multipart/form-data">
<input style="display:none"type="text" name="pos" id = "pos" value="1"><br>    
<hr>
<div id="image_preview1" style = "width:100%; height:300px;">
	<img class="img-responsive vertical_center" id="previewing1" src="<?php if(!empty($pictures[0])){echo $pictures[0]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file1" id="file1" onchange="cambio(1)" required />

<input style="display:none"type="text" name="fileid" id = "fileid" value="file1"><br>
<input style="display:none"type="text" name="userid" id = "userid" value="1"><br>


<?php if(empty($pictures[0])){
	echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(0)' style='width:100%;'/>";
}else{
	echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(0)' style='width:100%;'/>";
}?>
</div>
</form>
</div>




<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="main">
<form id="uploadimage2" action="" method="post" enctype="multipart/form-data">    
<input style="display:none;"type="text" name="pos" id = "pos" value="2"><br>
<hr>
<div id="image_preview2" style = "width:100%; height:300px;">
	<img class="img-responsive vertical_center" id="previewing2" src="<?php if(!empty($pictures[1])){echo $pictures[1]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file2" id="file2" onchange="cambio(2)" required />
<input style="display:none;"type="text" name="fileid" id = "fileid" value="file2"><br>
<input style="display:none;"type="text" name="userid" id = "userid" value="1"><br>    
<?php if(empty($pictures[1])){
	echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(1)'style='width:100%;'/>";
}else{
	echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(1)' style='width:100%;'></input>";
}?>
</form>
</div>
</div>



<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="main">
<form id="uploadimage3" action="" method="post" enctype="multipart/form-data">    
<input style="display:none;"type="text" name="pos" id = "pos" value="3"><br>
<hr>
<div id="image_preview3" style = "width:100%; height:300px;">
    <img class="img-responsive vertical_center" id="previewing3" src="<?php if(!empty($pictures[2])){echo $pictures[2]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file3" id="file3" onchange="cambio(3)" required />
<input style="display:none;"type="text" name="fileid" id = "fileid" value="file3"><br>
<input style="display:none;"type="text" name="userid" id = "userid" value="1"><br>    
<?php if(empty($pictures[2])){
    echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(2)'style='width:100%;'/>";
}else{
    echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(2)' style='width:100%;'></input>";
}?>
</form>
</div>
</div>




<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
<div class="main">
<form id="uploadimage4" action="" method="post" enctype="multipart/form-data">    
<input style="display:none;"type="text" name="pos" id = "pos" value="4"><br>
<hr>
<div id="image_preview2" style = "width:100%; height:300px;">
    <img class="img-responsive vertical_center" id="previewing4" src="<?php if(!empty($pictures[3])){echo $pictures[3]['picusrdir'];}else{echo "upload/noimage.png";}?>" />
</div>
<hr id="line">
<label>Select Your Image</label><br/>
<input type="file" name="file4" id="file4" onchange="cambio(4)" required />
<input style="display:none;"type="text" name="fileid" id = "fileid" value="file4"><br>
<input style="display:none;"type="text" name="userid" id = "userid" value="1"><br>    
<?php if(empty($pictures[3])){
    echo "<input type='submit' value='Upload' class='submit btn btn-default' onclick = 'upload(3)'style='width:100%;'/>";
}else{
    echo "<input  value='Delete' class='btn btn-default' onclick = 'picUsrerDelete(3)' style='width:100%;'></input>";
}?>
</form>
</div>
</div>





</div>

<h4 id='loading' >loading..</h4>
<div id="message"></div>
</div>














<div class="container">
<div class="row">
    <h5><center>Default Size</center></h5>
    <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-primary">C</a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-default">I</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-info">R</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success">C</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-warning">L</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-danger">E</span></a>
        <br>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-primary">B</a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-default">U</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-info">T</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-success">T</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-warning">O</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-danger">N</span></a>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal" class="btn btn-circle btn-primary">S</span></a>
    </center>
    </div>
    <hr>






</body>
</html>