<?php
 require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
}
if(isset($_GET['id'])){

$stmt = $mysqli->prepare("delete from messages where messages_id=?");
$stmt->bind_param('s', $id);

$id = $_GET['id'];

if($stmt->execute()){
?>
<div id="aa" class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Mesaj silindi.
</div>
<script type="text/javascript">
$('#aa').fadeOut(5000);
</script>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Hata!</strong> Mesaj silinemedi.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Uyarı!</strong> Teknik bir hata ama sakin ol.
</div>
<?php
}
?>