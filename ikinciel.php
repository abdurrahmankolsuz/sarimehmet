<!DOCTYPE html>
<html lang=en>
<head>
<meta http-equiv=content-type content="text/html; charset=UTF-8">
<meta charset=utf-8>
<title>Sarı Mehmet Servis</title>
<meta name=generator content=Bootply />
<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
<link href=css/bootstrap.min.css rel=stylesheet>
<link rel=stylesheet type=text/css href=css/style_gallery.css />
<link rel=stylesheet type=text/css href=css/elastislide.css />
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel=stylesheet type=text/css />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel=stylesheet type=text/css />
<!--[if lt IE 9]>
<script src=//html5shim.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->
<link href=css/styles.css rel=stylesheet>
</head>
<body background=img/white.jpg>
<div id=wrap>
<div class=container>
<div id=top-nav class="navbar navbar-inverse navbar-static-top">
<div class=container-fluid>
<div class=navbar-header>
<button type=button class=navbar-toggle data-toggle=collapse data-target=.navbar-collapse>
<span class=icon-bar></span>
<span class=icon-bar></span>
<span class=icon-bar></span>
</button>
<a class=navbar-brand href=anasayfa.php>Sarı Mehmet Servis</a>
<p></p>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class=dropdown>
<ul id=g-account-menu class=dropdown-menu role=menu>
<li><a href=#>Profilim</a></li>
</ul>
</li>
<li><a href=anasayfa.php#section5> Adres</a></li>
<li><a href=anasayfa.php#section6> İletişim</a></li>
</ul>
</div>
</div>
</div>
<div class=container-fluid>
<div class=row-fluid>
<div class=col-sm-2>
<a><strong style="font-family:Comic Sans MS;color:black">2.EL ARAÇLAR</strong></a>
<hr>
<ul class=list-unstyled>
<li class=nav-header> <a href=# data-toggle=collapse data-target=#userMenu>
<h5 style=font-weight:bold;color:#151515>ARAÇLARIMIZ <i class="glyphicon glyphicon-chevron-down"></i></h5>
</a>
<ul class="list-unstyled collapse in" id=userMenu>
<?php
   require_once("psl-config.php");
   $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
   # check connection
   if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
      }
    $res = $mysqli->query("select * from ikinci_el_oto");
     // $res = $mysqli->query("SELECT * FROM `ikinci_el_oto` i INNER JOIN ikinci_el_resim b ON i.oto_id=b.ikinci_el_id");
    while ($row = $res->fetch_assoc()) {
     ?>
<li><a id=araclink onclick="setdata('<?php echo $row['oto_id']; ?>')"><i class="glyphicon glyphicon-minus"></i><?php echo $row['baslik']; ?></a></li>
<?php
}
?>
</ul>
</li>
</ul>
<script>function setdata(a){var b=a;$.ajax({type:"GET",url:"ikinciElSet.php?id="+b}).done(function(c){$("#set").html(c);$("#exist").hide()})};</script>
</div>
<div id=set></div>
<div id=exist style=width:700px;float:left;font-size:110%;font-style:bold><p style="font-family:Comic Sans MS;color:black">İkinci El araçlarımızı görmek için listeden araç seçiniz..</p><img style=width:100% src=img/sales.jpg></div>
</div>
</div>
</div>
</div>
<div style=padding:20px;font-weight:bold;float:right><a href=anasayfa.php#section5>İletişime geçmek için tıklayınız.. </a></div>
<div id=footer>
<div class=container>
<p class=text-muted>Copyright ©2014 </p>
</div>
</div>
<style>#araclink{font-family:Ariel;color:black;font-size:100%}#araclink:hover{background-color:#dbdbdb;cursor:hand;cursor:pointer}#wrap>.container{padding:0;width:100%}.container .credit{margin:0}}</style>
<script src=js/jquery-2.1.3.js></script>
<script src=//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
<script src=js/scripts.js></script>
<script type=text/javascript src=js/jquery.tmpl.min.js></script>
<script type=text/javascript src=js/jquery.easing.1.3.js></script>
<script type=text/javascript src=js/jquery.elastislide.js></script>
<script type=text/javascript src=js/gallery.js></script>
</body>