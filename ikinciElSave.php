<?php

  require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
 
//if (!isset($_POST['submit'])){

  $marka = $_POST['marka'];
  $seri = $_POST['seri'];
  $model = $_POST['model'];
  $km = $_POST['km'];
  $kasaTipi = $_POST['kasaTipi'];
  $motorHacmi =$_POST['motorHacmi'];
  $yil = $_POST['yil'];
  $motorGucu = $_POST['motorGucu'];
  $yakit = $_POST['yakit'];
  $vites = $_POST['vites'];
  $cekis =$_POST['cekis'];
  $plaka = $_POST['plaka'];
  $takas = $_POST['takas'];
  $durumu = $_POST['durumu'];
  $mesaj =$_POST['mesaj'];
 $baslik =$_POST['baslik'];
 $fiyat =$_POST['fiyat'];
 /*
  $sql = "INSERT INTO `messages` (`isim`, `email`, `sirket`, `telefon`, `yorum`) VALUES 
  ('".$name."', '".$email."', '".$organization."', '".$phone."', '".$message."')";
 
  $mysqli->query($sql) ;
   
}
  header("Location:anasayfa.php");
?>*/
if($marka != null && $seri != null && $model != null && $kasaTipi != null && $motorHacmi != null){
/*
$stmt = $mysqli->prepare("INSERT INTO ikinci_el_oto VALUES ('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param('sssssssssssssss',$marka, $seri, $model, $km,$kasaTipi, $motorHacmi,$yil, $motorGucu, $yakit, $vites, $cekis,$plaka, $takas, $durumu, $mesaj);
$sonid = $stmt->insert_id;
echo $sonid; */
$query = "INSERT INTO ikinci_el_oto (marka,seri,model,km,kasa_tipi,motor_hacmi,yil,motor_gucu,yakit,vites,cekis,plaka,takas,durum,aciklama_oto,baslik,fiyat) VALUES ('$marka', '$seri', '$model', '$km','$kasaTipi', '$motorHacmi','$yil', '$motorGucu', '$yakit', '$vites', '$cekis','$plaka', '$takas', '$durumu', '$mesaj','$baslik','$fiyat')";
$mysqli->query($query);
$sonid = $mysqli->insert_id;
if($sonid){


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
if (!empty($_FILES["uploaded_oto"])) {
$images_arr = array();
  foreach($_FILES['uploaded_oto']['name'] as $key=>$val){


$file_name=$_FILES["uploaded_oto"]["name"][$key];
$temp_name=$_FILES["uploaded_oto"]["tmp_name"][$key];

$imgtype=$_FILES["uploaded_oto"]["type"][$key];

$ext= GetImageExtension($imgtype);

$imagename=date("d-m-Y")."-".time().$ext;

$target_path = "ikinci/".$_FILES["uploaded_oto"]["name"][$key];;

 


if(move_uploaded_file($temp_name, $target_path)) {

$images_arr[] = $target_path;

//$query_upload="INSERT INTO `images_tbl`( `images_path`, `submission_date`) VALUES ('".$target_path."',".date("Y-m-d").")";
$query_upload="INSERT into `ikinci_el_resim` (ikinci_el_id , ikinci_el_path ) values ('$sonid','$target_path')";

//mysql_query($query_upload) or die("error in $query_upload == ----> ".mysql_error()); 
$mysqli->query($query_upload) ;

// header("Location:admin_panel.php");


}else{



exit("Error While uploading image on the server");

}
}
}
?>
<div id="asa"class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Mesajınız Gönderildi.
</div>
<?php
header("Location:ikinciel.php");
?>
<!--<script type="text/javascript">
$('#asa').fadeOut(5000);
</script>-->
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hata!</strong> Beklenmeyen bir hata oluştu.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Uyarı!</strong> Boş alanları Doldurunuz.
</div>
<?php
} 
?>