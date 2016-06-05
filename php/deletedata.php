
<?php
include "config.php";
if(isset($_GET['id'])){
$stmt = $conn->prepare("delete from ajaxtrap where kode=?");
$stmt->bind_param('s', $id);

$id = $_GET['id'];

if($stmt->execute()){
?>
<div id="aa" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Silme işlemi Gerçekleşti.
</div>
<script type="text/javascript">
$('#aa').fadeOut(5000);
</script>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hata!</strong> Veri silinemedi.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Uyarı!</strong> Tekrar deneyiniz.
</div>
<?php
}
?>