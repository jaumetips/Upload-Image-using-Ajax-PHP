<?php
include 'querys/dbconfig.php';
include 'querys/barquerys.php';


require_once 'dbconfig.php';

$fileid = $_POST['fileid'];
$userid = $_POST['userid'];
$pos = $_POST['pos'];
echo "EEEE". $pos;

if(isset($_FILES[$fileid]["type"]))
{
  
  $validextensions = array("jpeg", "jpg", "png");
  $temporary = explode(".", $_FILES[$fileid]["name"]);
  $file_extension = end($temporary);
  if ((($_FILES[$fileid]["type"] == "image/png") || ($_FILES[$fileid]["type"] == "image/jpg") || ($_FILES[$fileid]["type"] == "image/jpeg")
) && ($_FILES[$fileid]["size"] < 100000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) 
  {  
    if ($_FILES[$fileid]["error"] > 0)
    {
       echo "Return Code: " . $_FILES[$fileid]["error"] . "<br/><br/>";
    }
    else
    {
        if (file_exists("upload/" . $_FILES[$fileid]["name"])) {
          echo $_FILES[$fileid]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
        }
        else
        {

         $imgFile = $_FILES[$fileid]["name"];
         $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
         $sourcePath = $_FILES[$fileid]['tmp_name']; // Storing source path of the file in a variable
         $targetPath = "upload/".$userid.$pos.".".$imgExt; // Target path where file is to be stored

         move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
         echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
         echo "<br/><b>File Name:</b> " . $_FILES[$fileid]["name"] . "<br>";
         echo "<b>Type:</b> " . $_FILES[$fileid]["type"] . "<br>";
         echo "<b>Size:</b> " . ($_FILES[$fileid]["size"] / 1024) . " kB<br>";
         echo "<b>Temp file:</b> " . $_FILES[$fileid]["tmp_name"] . "<br>";



$pos = $_POST['pos'];
$userid = $_POST['userid'];
$picursdir = "upload/" . $_FILES[$fileid]["name"];

$r = fqinspictureusr($userid, $pos, $targetPath);

if($r==1){
  echo "guay";
}
else{
  echo "error";
}




        }
     }
  }
  else
  {
  echo "<span id='invalid'>***Invalid file Size or Type***<span>";
  }

}









?>

