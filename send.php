<?php

  require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
 
//if (!isset($_POST['submit'])){


  $name = $_POST['name'];
  $organization = $_POST['organization'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message =$_POST['message'];
 
 /*
  $sql = "INSERT INTO `messages` (`isim`, `email`, `sirket`, `telefon`, `yorum`) VALUES 
  ('".$name."', '".$email."', '".$organization."', '".$phone."', '".$message."')";
 
  $mysqli->query($sql) ;
   
}
  header("Location:anasayfa.php");
?>*/
if($name != null && $organization != null && $email != null && $phone != null && $message != null){
$stmt = $mysqli->prepare("INSERT INTO messages VALUES ('',?,?,?,?,?)");
$stmt->bind_param('sssss',$name, $organization, $email, $phone, $message);

if($stmt->execute()){
?>
<div id="aa"class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Mesajınız Gönderildi.
</div>
<script type="text/javascript">
$('#aa').fadeOut(5000);
</script>
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