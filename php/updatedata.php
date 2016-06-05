<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("update ajaxtrap set ad=?, nama=?,gender=?, phone=?, alamat=?, yis=? where kode=?");
$stmt->bind_param('sssssss', $as, $nm, $gd, $pn, $al,$yi, $id);

$nm = $_POST['nm'];
$gd = $_POST['gd'];
$pn = $_POST['pn'];
$al = $_POST['al'];
$as = $_POST['as'];
$as = $_POST['as'];
$yi = $_POST['yi'];

$id = $_GET['id'];

if($stmt->execute()){
?>
<div id="aa" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Düzenleme işlemi gerçekleşti.
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
  <strong>Uyarı!</strong> Kontrol edip tekrar deneyin.
</div>
<?php
}
?>