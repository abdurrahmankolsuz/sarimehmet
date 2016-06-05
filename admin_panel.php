<?php
session_start();

if(!isset($_SESSION['admin_name'])){
header("Location:admin_login.php");
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Admin Paneli</title>
<meta name="generator" content="Bootply" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="css/styles.css" rel="stylesheet">
<script src="js/jquery-2.1.3.js" type="text/javascript"></script>
<script type="text/javascript">

</script>

</head>
<body>


<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="admin_panel.php">SARI MEHMET OTO ADMİN PANELİ</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">

<li class="dropdown">
<?php
$a= $_SESSION["admin_name"];
$b= $_SESSION["admin_soyad"];
echo '<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>';
echo "$a  $b";
echo '<span class="caret"></span></a>';

?>
<!--  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a> -->
<ul id="g-account-menu" class="dropdown-menu" role="menu">
<li><a href="#">Profilim</a></li>
</ul>
</li>
<li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Çıkış</a></li>
</ul>
</div>
</div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<!-- Left column -->
<a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Araçlar</strong></a>  

<hr>

<ul class="list-unstyled">
<li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
<h5>Ayarlar <i class="glyphicon glyphicon-chevron-down"></i></h5>
</a>
<ul class="list-unstyled collapse in" id="userMenu">
<li class="active"> <a href="anasayfa.php"><i class="glyphicon glyphicon-home"></i> Ana Sayfa</a></li>
<li><a href="#section1"><i class="glyphicon glyphicon-envelope"></i> Mesajlar <!--<span class="badge badge-info"></span>--></a></li>
<li><a href="#section2"><i class="glyphicon glyphicon-cog"></i> İkinci El Oto</a></li>
<!--<li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>-->

<!-- <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>-->
<li><a href="otokayit.php"><i class="glyphicon glyphicon-exclamation-sign"></i> Oto Tamir Kayıt</a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Çıkış</a></li>
</ul>
</li>
<li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
<h5>Raporlar <i class="glyphicon glyphicon-chevron-right"></i></h5>
</a>

<!--<ul class="list-unstyled collapse" id="menu2">
<li><a href="#">Information &amp; Stats</a>
</li>
<li><a href="#">Views</a>
</li>
<li><a href="#">Requests</a>
</li>
<li><a href="#">Timetable</a>
</li>
<li><a href="#">Alerts</a>
</li>
</ul>-->
</li>
<li class="nav-header">
<a href="#" data-toggle="collapse" data-target="#menu3">
<h5>Sosyal Medya <i class="glyphicon glyphicon-chevron-right"></i></h5>
</a>

<ul class="list-unstyled collapse" id="menu3">
<li><a href="https://www.facebook.com/"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
<li><a href="https://twitter.com/"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
</ul>
</li>
</ul>

<hr>

<a href="#"><strong><i class="glyphicon glyphicon-link"></i> Kaynaklar</strong></a>  

<hr>
<!--
<ul class="nav nav-pills nav-stacked">
<li class="nav-header"></li>
<li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
<li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
<li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
<li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
<li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
<li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
</ul>

<hr>
<ul class="nav nav-stacked">
<li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>
<li><a href="/tagged/bootstrap-3">Bootstrap 3</a></li>
<li><a href="/61518" title="Bootstrap 3 Panel">Panels</a></li>
<li><a href="/61521" title="Bootstrap 3 Icons">Glyphicons</a></li>
<li><a href="/62603">Layout</a></li>
</ul>
-->
<hr>

<a href="#"><strong>Daha fazla tema görmek ister misiniz?</strong></a>  

<hr>

<ul class="nav nav-stacked">
<li class="active"><a rel="nofollow" href="http://goo.gl/pQoXEh" target="ext">Premium Themas</a></li>
<li><a rel="nofollow" href="http://gridgum.com/themes/category/bootstrap-themes/?affiliates=45">GridGum</a></li>
<li><a rel="nofollow" href="http://bootstrapzero.com">BootstrapZero</a></li>
</ul>


</div><!-- /col-3 -->




<div class="col-sm-9">

<div class="container-fluid">
<div class="row">
<div class="panel panel-default">
<div class="panel-heading"><h4>Anasayfa</h4></div>
<div class="panel-body">
<div class="col-sm-3">

<div class="list-group">
<?php 

require_once("psl-config.php");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}
$sql="SELECT images_path FROM images_tbl";
$result=$mysqli->query($sql) ;
while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
echo '<a  class="list-group-item">' ; //Creates a loop to loop through results
echo '<img src="' . $row['images_path'] . '" class ="resim"/>' ;  //$row['index'] the index here is a field name
echo '</a>';
}

?>
<!-- <a href="#" class="list-group-item">Dedicated server doesn't..</a>
<a href="#" class="list-group-item">RHEL 6 install on new..</a>-->


</div>
<!-- column 2 -->	

</div>
<div class="col-sm-3">
<div class="list-group">
<a class="list-group-item">

<form class="form form-vertical" action= "upload.php"enctype="multipart/form-data" method="post">

<div class="control-group">
<!-- <label>Yüklemek istediğiniz resmi seçin:</label>-->
<div class="controls">
<!--<input type="file" name="uploadedimage" id="uploadedimage"class="file">-->
<span class="btn btn-default btn-file">
Resim Seç <input type="file" name="uploadedimage" id="uploadedimage">
</span>
</div>
</div>  

<div class="control-group">
<label>Birinci Resim</label>
<div class="controls">
<!--<input type="submit" value="Upload Image" name="submit">-->
<button type="submit" class="btn btn-primary" value="Upload Image" name="submit">
Yükle
</button>
</div>
</div>
</form>

</a>
<a class="list-group-item">
<form class="form form-vertical" action= "upload_second.php"enctype="multipart/form-data" method="post">
<div class="control-group">
<!-- <label>Yüklemek istediğiniz resmi seçin:</label>-->
<div class="controls">
<!--<input type="file" name="uploadedimage" id="uploadedimage"class="file">-->
<span class="btn btn-default btn-file">
Resim Seç <input type="file" name="uploadedimage_second" id="uploadedimage_second">
</span>
</div>
</div>  



<div class="control-group">
<label>İkinci Resim</label>
<div class="controls">
<!--<input type="submit" value="Upload Image" name="submit">-->
<button type="submit" class="btn btn-primary" value="Upload Image" name="submit_second">
Yükle
</button>
</div>
</div> 
</form>

</a>
<a class="list-group-item">
<form class="form form-vertical" action= "upload_third.php"enctype="multipart/form-data" method="post">
<div class="control-group">
<!--<label>Yüklemek istediğiniz resmi seçin:</label>-->
<div class="controls">
<!--<input type="file" name="uploadedimage" id="uploadedimage"class="file">-->
<span class="btn btn-default btn-file">
Resim Seç <input type="file" name="uploadedimage_third" id="uploadedimage_third">
</span>
</div>
</div>  

<div class="control-group">
<label>Üçüncü Resim</label>
<div class="controls">
<!--<input type="submit" value="Upload Image" name="submit">-->
<button type="submit" class="btn btn-primary" value="Upload Image" name="submit_third">
Yükle
</button>
</div>
</div> 
</form>

</a>

</div>
</div>  
<div class="col-sm-6">
  <p style="font-family:Comic Sans MS; color:grey;">Bu alanı Kullanarak Sarı Mehmet Web Sayfasının slide halindeki fotoğraflarını bilgisayarınızdan yükleyip değiştirebilirsiniz..</p>
  </div>

</div>
</div> 

<div class="col-md-12" >
<?php 

require_once("psl-config.php");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}
$sql="SELECT COUNT(*) as total FROM messages";
$result=$mysqli->query($sql) ;
while($row = $result->fetch_array(MYSQLI_ASSOC)){ 
echo '<div class="well">';
echo 'Gelen Kutusu'; //Creates a loop to loop through results
echo '<span class="badge pull-right">';
echo $row['total']; 
echo '</span>';  //$row['index'] the index here is a field name
echo '</div>';
}

?>
<!--<div class="well">Gelen Kutusu <span class="badge pull-right">3</span></div>-->



<!--  <div class="btn-group btn-group-justified">
<a href="#" class="btn btn-primary col-sm-3">
<i class="glyphicon glyphicon-plus"></i><br>
Servis
</a>
<a href="#" class="btn btn-primary col-sm-3">
<i class="glyphicon glyphicon-cloud"></i><br>
Bulut
</a>
<a href="#" class="btn btn-primary col-sm-3">
<i class="glyphicon glyphicon-cog"></i><br>
Araçlar
</a>
<a href="#" class="btn btn-primary col-sm-3">
<i class="glyphicon glyphicon-question-sign"></i><br>
Yardım
</a>
</div> -->



<div class="col-md-12">
<div class="panel panel-default">
<div id = "section1" class="panel-heading"><h4>Mesajlar</h4></div>
<div class="panel-body">
<!--
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">×</button>
This is a dismissable alert.. just sayin'.
</div>

This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.
<br><br>
Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.-->
</div>
</div>
<div id="info"></div>

<table id="paginated" class="table unresponsive table-bordered table-hover cellspacing="0" width="100%"">
<thead>
<tr><th>Kod</th><th>Gönderen</th><th>Email</th><th >Şirket</th><th>Mesaj</th><th>İşlem</th></tr>
</thead>
<tbody>
<?php 

require_once("psl-config.php");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}
$sql="SELECT messages_id,isim,email,sirket,yorum FROM messages";
$result=$mysqli->query($sql) ;
while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?>

<tr>
<td> <?php echo $row['messages_id']; ?></td> 
<td> <?php echo $row['isim']; ?></td> 
<td><?php echo $row['email']; ?></td>
<td> <?php echo $row['sirket']; ?></td>  
<td><?php echo $row['yorum'] ; ?></td> 

<td>
<a class="btn btn-danger btn-sm"  onclick="sil('<?php echo $row['messages_id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
<a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal<?php echo $row['messages_id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
</td>

</tr>
<script>
function sil(str){
  
  var id = str;
      
  $.ajax({
     type: "GET",
     url: "sil.php?id="+id
  }).done(function( data ) {
    $('#info').html(data);
    
  });
    }

</script>

<div class="modal fade" id="myModal<?php echo $row['messages_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['messages_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $row['messages_id']; ?>">Yanıtla</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="nm">Ad</label>
    <input type="text" class="form-control" id="mailAd" value="">
  </div>
  <div class="form-group">
    <label for="nm">Soyad</label>
    <input type="text" class="form-control" id="mailSoyad" value="">
  </div>
  <div class="form-group">
    <label for="gd">Email</label>
    <input type="text" class="form-control" id="email<?php echo $row['messages_id']; ?>" value="<?php echo $row['email']; ?>">
  </div>
 
  <div class="form-group">
    <label for="al">Mesaj</label>
    <textarea class="form-control" rows="9" id="message" placeholder="Mesaj giriniz.."></textarea>
  </div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        <button type="button" onclick="updatedata('<?php echo $row['messages_id']; ?>')" class="btn btn-primary">Gönder</button>
      </div>
    </div>
  </div>
</div>
<?php
}

?>

<div id="info"></div>
 <div id="viewdata"></div>

</tbody>
</table>

<div id= "myModal"class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title"><span style="color:#95A6B6">Gönderen:</span><span id="baslik"></span></h4>
</div>
<div class="modal-body">
<textarea id="mesaj" class="form-control" rows="9" name="mesaj" ></textarea>
</div>
<div class="modal-footer">
 
<button type="button" class="btn btn-default" data-dismiss="modal" id="sil" >Kapat</button>


<button type="button" class="btn btn-primary" id="cevapla">Cevapla</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>


<div id= "myModalCevapla"class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title"><span style="color:#95A6B6">Kime:</span><span id="baslikC"></span> </h4>
</div>
<div class="modal-body">
<textarea id="mesajCevapla" class="form-control" rows="9" name="mesajCevapla" ></textarea>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
<button type="button" class="btn btn-primary" >Gönder</button>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
</div>
</div>
</div>
<hr>
<div class="row">
</div><!--/row-->

<!-- center left-->	


<!--tabs-->

<!--
<div class="container">
<div class="col-md-4">


<ul class="nav nav-tabs" id="myTab">
<li class="active"><a href="#profile" data-toggle="tab">Profil</a></li>
<li><a href="#messages" data-toggle="tab">Mesajlar</a></li>
<li><a href="#settings" data-toggle="tab">Ayarlar</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="profile">
<h4><i class="glyphicon glyphicon-user"></i></h4>
Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
<p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
dolor, in sagittis nisi.</p>
</div>
<div class="tab-pane" id="messages">
<h4><i class="glyphicon glyphicon-comment"></i></h4>
Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
<p>Quisque mauris augu.</p>
</div>
<div class="tab-pane" id="settings">
<h4><i class="glyphicon glyphicon-cog"></i></h4>
Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
<p>Quisque mauris augue, molestie.</p>
</div>
</div>
</div>
</div>  -->

<!--/tabs-->

<hr>

<div class="panel panel-default">
<div class="panel-heading"><h4>Hakkımızda</h4></div>
<div class="panel-body">

<!-- <small>Success</small>
<div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
<span class="sr-only">72% Complete</span>
</div>
</div>
<small>Info</small>
<div class="progress">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
<span class="sr-only">20% Complete</span>
</div>
</div>
<small>Warning</small>
<div class="progress">
<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
<span class="sr-only">60% Complete (warning)</span>
</div>
</div>
<small>Danger</small>
<div class="progress">
<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
<span class="sr-only">80% Complete</span>
</div>
</div>-->
<form action= "upload_aciklama.php" method="post"enctype="multipart/form-data">
<!--Aciklama: <input type="text" name="fname" class="form-control"><br>-->
<div class="control-group">
<div class="controls">
<textarea class="form-control" rows="9" name="fname" placeholder="Hakkımızda alanında gözükecek açıklamayı giriniz.."></textarea>
</div>
</div>
<!--<input type="submit" value="Submit" name='sumit'>-->
<div class="control-group" style="margin-top:5px">
<div class="controls">
<button type="submit" class="btn btn-primary" value="Upload Aciklama" name="sumit">
Ekle
</button>
</div>
</div>
</form>

</div><!--/panel-body-->
</div><!--/panel-->

<hr>


<div id = "section2" class="panel panel-default">
<div class="panel-heading">
<div class="panel-title">
<!--<i class="glyphicon glyphicon-wrench pull-right"></i>-->
<h4>İkinci El Oto</h4>
</div>
</div>
<div class="panel-body">

<form class="form form-vertical" action= "ikinciElSave.php"enctype="multipart/form-data" method="post">

<div class="col-md-3">
<div class="control-group">
<label>Marka</label>
<div class="controls">
<input type="text" name="marka" id="marka" class="form-control" placeholder="">
</div>
</div>      

<div class="control-group">
<label>Seri</label>
<div class="controls">
<input type="text" name="seri" id="seri" class="form-control" placeholder="">
</div>
</div>  
<div class="control-group">
<label>Model</label>
<div class="controls">
<input type="text" name="model" id="model" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Km</label>
<div class="controls">
<input type="text" name="km" id="km" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Kasa Tipi</label>
<div class="controls">
<input type="text" name="kasaTipi" id="kasaTipi" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Motor Hacmi</label>
<div class="controls">
<input type="text" name="motorHacmi" id="motorHacmi" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Yıl</label>
<div class="controls">
<input type="text" name="yil"  id="yil" class="form-control" placeholder="">
</div>
</div>  

</div>  

<div class="col-md-3">

<div class="control-group">
<label>Motor Gücü</label>
<div class="controls">
<input type="text" name="motorGucu" id="motorGucu" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Yakıt</label>
<div class="controls">
<input type="text" name="yakit" id="yakit" class="form-control" placeholder="">
</div>
</div>  
<div class="control-group">
<label>Vites</label>
<div class="controls">
<input type="text" name="vites" id="vites" class="form-control" placeholder="">
</div>
</div>  
<div class="control-group">
<label>Çekiş</label>
<div class="controls">
<input type="text" name="cekis" id="cekis" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Plaka/Uyruk</label>
<div class="controls">
<input type="text" name="plaka" id="plaka" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Takas</label>
<div class="controls">
<input type="text" name="takas"  id="takas" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Durumu</label>
<div class="controls">
<input type="text" name="durumu" id="durumu" class="form-control" placeholder="">
</div>
</div> 
</div> 
<div class="col-md-6">
<div class="control-group">
<label>Başlık</label>
<div class="controls">
<input type="text" name="baslik" id="baslik" class="form-control" placeholder="">
</div>
</div> 
<div class="control-group">
<label>Fiyat</label>
<div class="controls">
<input type="text" name="fiyat" id="fiyat" class="form-control" placeholder="">
</div>
</div> 

<div class="control-group">
<label>Açıklama</label>
<div class="controls">
<textarea  rows="5" class="form-control" id="mesaj" name="mesaj"></textarea>
</div>
</div>
  <div class="control-group">
<label>Yüklemek istediğiniz resimleri seçin:</label>
<div class="controls">
<!--<input type="file" name="uploadedimage" id="uploadedimage"class="file">-->
<span class="btn btn-default btn-file">
Resim Seç   <input type="file" name="uploaded_oto[]" id="uploaded_oto" multiple >
</span>
</div>
</div> 
<div class="control-group">
<label></label>
<div class="controls">
<button type="submit" id="submitikinciEl" class="btn btn-primary">Yayınla</button>
</div>
</div> 
</div>
</form>


<!--<script>
$('#submitikinciEl').click(function(){
  
           var marka = $('#marka').val();
           var seri = $('#seri').val();
           var model = $('#model').val();
           var km = $('#km').val();
           var kasaTipi = $('#kasaTipi').val();
           var motorHacmi = $('#motorHacmi').val();
           var yil = $('#yil').val();
           var motorGucu = $('#motorGucu').val();
           var yakit = $('#yakit').val();
           var vites = $('#vites').val();
           var cekis = $('#cekis').val();
           var plaka = $('#plaka').val();
           var takas = $('#takas').val();
           var durumu = $('#durumu').val();
           var mesaj = $('#mesaj').val();
    
  var datas= "marka="+marka+"&seri="+seri+"&model="+model+"&km="+km+"&kasaTipi="+kasaTipi+"&motorHacmi="+motorHacmi+"&yil="+yil+"&motorGucu="+motorGucu+"&yakit="+yakit+"&vites="+vites+"&cekis="+cekis+"&plaka="+plaka+"&takas="+takas+"&durumu="+durumu+"&mesaj="+mesaj;
      
  $.ajax({
     type: "POST",
     url: "ikinciElSave.php",
     data: datas
  }).done(function( data ) {
    $('#infoikinci').html(data);

    
   // viewdata();
  });
    });
</script>-->
</div><!--/panel content-->
</div><!--/panel-->
<div id="infoikinciElSil"></div>


<div id="info"></div>

<table id="paginated" class="table unresponsive table-bordered table-hover cellspacing="0" width="100%"">
<thead>
<tr><th>İlan No</th><th>Başlık</th><th>Model</th><th>İşlem</th></tr>
</thead>
<tbody>
<?php 

require_once("psl-config.php");
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
# check connection
if ($mysqli->connect_errno) {
echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
exit();
}
$sql="SELECT oto_id,baslik,model FROM ikinci_el_oto";
$result=$mysqli->query($sql) ;
while($row = $result->fetch_array(MYSQLI_ASSOC)){ ?>

<tr>
<td> <?php echo $row['oto_id']; ?></td> 
<td> <?php echo $row['baslik']; ?></td> 
<td> <?php echo $row['model']; ?></td> 

<td>
<a class="btn btn-danger btn-sm"  onclick="silOto('<?php echo $row['oto_id']; ?>')" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

</td>

</tr>
<script>
function silOto(str){
  
  var id = str;
      
  $.ajax({
     type: "GET",
     url: "ikinciElSil.php?id="+id
  }).done(function( data ) {
    $('#infoikinciElSil').html(data);
    
  });
    }

</script>

<?php
}

?>

</tbody>
</table>



<div class="panel panel-default">
<div class="panel-heading">
<div class="panel-title">
<i class="glyphicon glyphicon-wrench pull-right"></i>
<h4>Servisimiz</h4>
</div>
</div>
<div class="panel-body">

<!--<form class="form form-vertical">

<div class="control-group">
<label>İsim</label>
<div class="controls">
<input type="text" class="form-control" placeholder="Enter Name">
</div>
</div>      

<div class="control-group">
<label>Mesaj</label>
<div class="controls">
<textarea class="form-control"></textarea>
</div>
</div> 

<div class="control-group">
<label>Kategori</label>
<div class="controls">
<select class="form-control"><option>seçenekler</option></select>
</div>
</div>    

<div class="control-group">
<label></label>
<div class="controls">
<button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
Yolla
</button>
</div>
</div>   

</form>-->
<p style="font-family:Comic Sans MS; color:grey; ">Resim galerisine çoklu resim yükleme işlemini aşağıdaki butondan yapabilirsiniz</p>

<div style="margin-top:5px;">
  <div class="upload_div">
    <form name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data" action="upload_galeri.php">
      <input type="hidden" name="image_form_submit" value="1"/>
      <span class="btn btn-default btn-file">
            <label>Resimleri Seçiniz</label>
            <input type="file" name="images[]" id="images" multiple >
        <div class="uploading none">
            <label>&nbsp;</label>
          </span>
            <img src="uploading.gif"/>
        </div>
    </form>
    </div>
  
    <div class="gallery" id="images_preview">
        
    </div><script type="text/javascript">
$(document).ready(function(){
  $('#images').on('change',function(){
    $('#multiple_upload_form').ajaxForm({
      target:'#images_preview',
      beforeSubmit:function(e){
        $('.uploading').show();
      },
      success:function(e){
        $('.uploading').hide();
      },
      error:function(e){
      }
    }).submit();
  });
});
</script>
</div>



</div><!--/panel content-->
</div><!--/panel-->


</div><!--/col-span-6-->

</div><!--/row-->
<!--
<hr>

<a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Tartışmalar</strong></a>  

<hr>

<div class="row">
<div class="col-md-12">
<ul class="list-group">
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The 3rd page reports don't contain any links. Does anyone know why..</a></li>
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to install the services layer..</a></li>
<li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li>
</ul>
</div>
</div>
</div><!--/col-span-9-->
</div>
</div>
<!-- /Main --> 



<div class="modal" id="addWidgetModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title">Add Widget</h4>
</div>
<div class="modal-body">
<p>Add a widget stuff here..</p>
</div>
<div class="modal-footer">
<a href="#" data-dismiss="modal" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dalog -->
</div><!-- /.modal -->


<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery.form.js"></script>
</body>
</html>