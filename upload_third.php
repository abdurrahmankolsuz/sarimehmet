<?php
//if (!isset($_POST['submit'])){

require_once("psl-config.php");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}

//var_dump($_FILES);
function GetImageExtension($imagetype)

 {

   if(empty($imagetype)) return false;

   switch($imagetype)

 {

       case 'image/bmp': return '.bmp';
       case 'image/gif': return '.gif';

       case 'image/jpeg': return '.jpg';

       case 'image/png': return '.png';

       default: return false;

   }
 }
if (!empty($_FILES["uploadedimage_third"])) {



$file_name=$_FILES["uploadedimage_third"]["name"];
$temp_name=$_FILES["uploadedimage_third"]["tmp_name"];

$imgtype=$_FILES["uploadedimage_third"]["type"];

$ext= GetImageExtension($imgtype);

$imagename=date("d-m-Y")."-".time().$ext;

$target_path = "uploads/".$imagename;

 


if(move_uploaded_file($temp_name, $target_path)) {



//$query_upload="INSERT INTO `images_tbl`( `images_path`, `submission_date`) VALUES ('".$target_path."',".date("Y-m-d").")";
$query_upload="UPDATE `images_tbl` SET `images_path` = '$target_path' WHERE images_id = 4";

//mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
$mysqli->query($query_upload) ;

 header("Location:admin_panel.php");

}else{



exit("Error While uploading image on the server");

}
}

?>
