<?php
include "config.php";
$as = $_POST['as'];
$nm = $_POST['nm'];
$gd = $_POST['gd'];
$pn = $_POST['pn'];
$al = $_POST['al'];
$yi = $_POST['yi'];

if($as != null && $nm != null && $gd != null && $pn != null && $al != null && $yi != null){
$stmt = $conn->prepare("INSERT INTO ajaxtrap VALUES ('',?,?,?,?,?,?)");
$stmt->bind_param('ssssss',$as, $nm, $gd, $pn, $al,$yi);

if($stmt->execute()){
?>
<div id ="aa"class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Kayıt işlemi gerçekleşti.
</div>
<script type="text/javascript">
$('#aa').fadeOut(5000);
</script>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hata!</strong> Kayıt gerçekleşmedi.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Uyarı!</strong> Boş alanları doldurunuz.
</div>
<?php
}
?>