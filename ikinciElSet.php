<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style_gallery.css" />
<link rel="stylesheet" type="text/css" href="css/elastislide.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
<?php
   require_once("psl-config.php");
   $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
   # check connection
   if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
      }
      if(isset($_GET['id'])){
        $id = $_GET['id'];
    $res = $mysqli->query("select * from ikinci_el_oto where oto_id= $id");
     // $res = $mysqli->query("SELECT * FROM `ikinci_el_oto` i INNER JOIN ikinci_el_resim b ON i.oto_id=b.ikinci_el_id");
    while ($row = $res->fetch_assoc()) {
     ?>
<h3 style="font-weight:bold"><?php echo $row['baslik']; ?></h3>
<h4 style="font-weight:bold;color:green"><?php echo $row['fiyat']; ?></h4>
<div style="background-color:#dddee0;margin-top:35px" class="col-md-3">
<div style="margin-top:10px" class="classifiedInfo">
<ul style="margin-top:0" class="classifiedInfoList">
<li style="list-style-type:none"><strong style="color:red"> İlan No</strong>&nbsp;<span style="float:right;color:red"><?php echo $row['oto_id']; ?></span></li><hr style="margin-top:0px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Marka</strong>&nbsp;<span style="float:right"><?php echo $row['marka']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Seri</strong>&nbsp;<span style="float:right"><?php echo $row['seri']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Model</strong>&nbsp;<span style="float:right"><?php echo $row['model']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> KM</strong>&nbsp;<span style="float:right"><?php echo $row['km']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Kasa Tipi</strong>&nbsp;<span style="float:right"><?php echo $row['kasa_tipi']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Motor Hacmi</strong>&nbsp;<span style="float:right"><?php echo $row['motor_hacmi']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Yıl</strong>&nbsp;<span style="float:right"><?php echo $row['yil']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Motor Gücü</strong>&nbsp;<span style="float:right"><?php echo $row['motor_gucu']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Yakıt</strong>&nbsp;<span style="float:right"><?php echo $row['yakit']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Vites</strong>&nbsp;<span style="float:right"><?php echo $row['vites']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Çekiş</strong>&nbsp;<span style="float:right"><?php echo $row['cekis']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Plaka</strong>&nbsp;<span style="float:right"><?php echo $row['plaka']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Takas</strong>&nbsp;<span style="float:right"><?php echo $row['takas']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
<li style="list-style-type:none"><strong> Durumu</strong>&nbsp;<span style="float:right"><?php echo $row['durum']; ?></span></li><hr style="margin-top:3px;margin-bottom:5px">
</ul>
</div>
</div>
<div class="col-md-7">
<strong>Araç Hakkında Açıklama</strong>
<div class="classifiedIdBox"><?php echo $row['aciklama_oto']; ?></div>
<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
      <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
          <div class="rg-image-nav">
            <a href="#" class="rg-image-nav-prev">Previous Image</a>
            <a href="#" class="rg-image-nav-next">Next Image</a>
          </div>
        {{/if}}
        <div  class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
          <div class="rg-caption" style="display:none;">
            <p></p>
          </div>
        </div>
      </div>
    </script>
<style>.rg-image img{max-height:90%;max-width:90%}</style>
<div class="content">
<div id="rg-gallery" class="rg-gallery">
<div class="rg-thumbs">
<div class="es-carousel-wrapper">
<div class="es-nav">
<span class="es-nav-prev">Previous</span>
<span class="es-nav-next">Next</span>
</div>
<div class="es-carousel">
<ul>
<?php 
   
      require_once("psl-config.php");
   $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
   # check connection
   if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
       }
    $sql="SELECT ikinci_el_path FROM ikinci_el_resim where ikinci_el_id = $id";
    $result=$mysqli->query($sql) ;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
      ?>
<?php
     echo '<li><a href="#"><img src="'. $row['ikinci_el_path'].'" data-large="'. $row['ikinci_el_path'].' "  alt="image03"  /></a></li>';                 
     ?>
<?php
      } 
    ?>
</ul>
</div>
</div>
</div>
</div>
</div>
<?php
    }
  }
    ?>
<script src="js/jquery-2.1.3.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
<script src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>