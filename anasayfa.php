<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Sarı Mehmet Servis</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_gallery.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
   

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- Wrap all page content here -->
<div id="wrap">

<header class="masthead">

  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">

          <div style="margin-left:10px; width: 800px;height: 70px; float:left;">

        <!--    <p style="font-family:Comic Sans MS;color:black; "><b>İlk çağlarda güçlü olan, endüstri çağında zengin olan kazanırdı. Bilgi çağında ise bilgili olan kazanacaktır.</br>A. Toffler </b></p>
            <script  type="text/javascript">saatkacTT_iDate=1;saatkacTT_country="TR";saatkacTT_region="";saatkacTT_fontColor="#050505";saatkacTT_fontType="bold 14px Comic Sans MS";</script>
            <script  type="text/javascript" src="http://www.saatkac.com/dateTimeText.js"></script>-->
          </div>
       <?php 
     
      require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
    $sql="SELECT images_path FROM images_tbl where images_id =2";
    $result=$mysqli->query($sql) ;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
echo '<img class="img-responsive" src="' . $row['images_path'] . '"/>' ;  //$row['index'] the index here is a field name
}       
      ?>
         <!-- <img src="img src='change_image.php/>"> -->
          <div class="container">
            <div class="carousel-caption">
              <h2>Güçlü</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div style="margin-left:10px; width: 800px;height: 70px; float:left;">
          <!--  <p style="font-family:Comic Sans MS; color:black;"><b>Başkalarına yardımcı olmak için elinize her zaman büyük fırsatlar geçmez, ama küçük fırsatlar hergün çıkar. </br>Sally Koch</b></p>
            -->
          </div>
             <?php 
     
      require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
    $sql="SELECT images_path FROM images_tbl where images_id =3";
    $result=$mysqli->query($sql) ;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
echo '<img class="img-responsive" src="' . $row['images_path'] . '"/>' ;  //$row['index'] the index here is a field name
}
      
        ?>

           <!--<img src="http://localhost:88/sarimehmet/img/slide2.jpg">-->
          <div class="container">
            <div class="carousel-caption">
              <h2>Güvenilir</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div style="margin-left:10px; width: 800px;height: 70px; float:left;">
      <!--      <p style="font-family:Comic Sans MS; color:black;"><b>Deneyim düşüncenin, düşünce ise eylemin çocuğudur.</br> B. Disraeli </b></p>-->
          
          </div>
          <?php 
     
      require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
    $sql="SELECT images_path FROM images_tbl where images_id =4";
    $result=$mysqli->query($sql) ;
    while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
echo '<img class="img-responsive" src="' . $row['images_path'] . '"/>' ;  //$row['index'] the index here is a field name
}
        
        ?>
         <!-- <img src="http://localhost:88/sarimehmet/img/slide3.jpg">-->
          <div class="container">
            <div class="carousel-caption">
              <h2>Kaliteli</h2>
              <p></p>
            </div>
          </div>
        </div>       
      </div><!-- /.carousel-inner -->
      <div class="logo" style="background-color:#000000 ;opacity:0.8; color:white;" ><p style="font-style:bold"> SARI MEHMET OTO SERVİS</p></div> 
      <!-- Controls -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a> 

    </div>
    <!-- /.carousel -->
  
</header>

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#anasayfa">Ana Sayfa</a></li>
          <li><a href="#servisimiz">SERVİSİMİZ</a></li>
          <li><a href="#hakkımızda">Hakkımızda</a></li>
          <li><a href="ikinciel.php">İKİNCİ EL OTO</a></li>
          <li class="dropdown">
            <a href="#hizmetler" class="dropdown-toggle" data-toggle="dropdown">HİZMETLER <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Tamir</a></li>
              <li><a href="#">Bakım</a></li>
              <li><a href="#">ikinci el oto alım-satım</a></li>
              <li><a href="#">Konya Eski Sanayi</a></li>
              <li><a href="#">İbrahim Dağıstan</a></li>
              <li><a href="#">Opel Volkswagen Seat Ford Skoda Audi</a></li>
            </ul>
          </li>
         
          <li><a href="#adres">Adres</a></li>
          <li><a href="#Iletisim">İletİŞİm</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="anasayfa"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>1981'den beri</h1>
    </div>
    
    <p class="lead text-center"> 
      <!--buraya unutmöa -->
    kaliteli hizmet anlayışıyla geçmişten günümüze teknolojinin gerektirdikleriyle uzmanlaşan kadromuz siz müşterilerimizin araçlarına bakım ve onarım hizmeti vermektedir
      
    </p>
    
    <hr>
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-1">
  <div class="col-sm-6 col-sm-offset-3 text-center"></div>
</section>  

<div class="divider" id="servisimiz"></div>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <h1></h1>
      <hr>
       <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
      <div class="rg-image-wrapper">
        {{if itemsCount > 1}}
          <div class="rg-image-nav">
            <a href="#" class="rg-image-nav-prev">Previous Image</a>
            <a href="#" class="rg-image-nav-next">Next Image</a>
          </div>
        {{/if}}
        <div class="rg-image"></div>
        <div class="rg-loading"></div>
        <div class="rg-caption-wrapper">
          <div class="rg-caption" style="display:none;">
            <p></p>
          </div>
        </div>
      </div>
    </script>

<div class="container">
      <div class="header">
       
        <span class="right_ab">
          
        </span>
        <div class="clr"></div>
      </div><!-- header -->
      
      <div class="content">
      
        <div id="rg-gallery" class="rg-gallery">
          <div class="rg-thumbs">
            <!-- Elastislide Carousel Thumbnail Viewer -->
            <div class="es-carousel-wrapper">
              <div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
              </div>
              <div class="es-carousel">
                <ul>
                  <?php
//Path to folder which contains images
                $dirname = "images/";

//Use glob function to get the files
//Note that we have used " * " inside this function. If you want to get only JPEG or PNG use
//below line and commnent $images variable currently in use
                $images = glob($dirname."*.{bmp,jpg}", GLOB_BRACE);

//Display image using foreach loop
               foreach($images as $image) {
  
//print the image to browser with anchor tag (Use if you want really :) )

               echo '<li><a href="#"><img src="'.$image.'" data-large="'.$image.'" alt="image03"  /></a></li>';
                     }
                    ?>
                 
                  <!--<li><a href="#"><img src="images/thumbs/a.jpg" data-large="images/a.jpg" alt="image02"  /></a></li>
                  <li><a href="#"><img src="images/thumbs/b.jpg" data-large="images/b.jpg" alt="image03"  /></a></li>
                  <li><a href="#"><img src="images/thumbs/c.jpg" data-large="images/c.jpg" alt="image04"  /></a></li>
                  <li><a href="#"><img src="images/thumbs/d.jpg" data-large="images/d.jpg" alt="image05" /></a></li>
                  <li><a href="#"><img src="images/thumbs/e.jpg" data-large="images/e.jpg" alt="image06"  /></a></li>
                  <li><a href="#"><img src="images/thumbs/f.jpg" data-large="images/f.jpg" alt="image07"  /></a></li>
                  <li><a href="#"><img src="images/thumbs/g.jpg" data-large="images/g.jpg" alt="image08"  /></a></li>-->
                 
           
                </ul>
              </div>
            </div>
            <!-- End Elastislide Carousel Thumbnail Viewer -->
          </div><!-- rg-thumbs -->
        </div><!-- rg-gallery -->
        
      </div><!-- content -->
    </div><!-- container -->


    </div>
  </div>
  
<div class="divider" id="hakkımızda"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
      <h1>Hakkımızda</h1>
      
      <hr>
    <?php 
     
	   require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
    $sql="SELECT aciklama FROM aciklama";
    $result=$mysqli->query($sql) ;
	  while($row = $result->fetch_array(MYSQLI_ASSOC)){   //Creates a loop to loop through results
echo "<p>" . $row['aciklama'] . "</p>" ;  //$row['index'] the index here is a field name
}
    	  
  
      ?>
      <hr>
      
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Hizmetler</h2></div>
</section>
  
<div class="divider" id="hizmetler"></div>
  
<div class="bg-4">
  <div class="container">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      
        
<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="VOLKSWAGEN"><img src="/img/Volkswagen.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>VOLKSWAGEN</p>
            <p></p>
          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	
            <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="AUDI"><img src="/img/audi.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>AUDI</p>
            <p></p>
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="SEAT"><img src="/img/seat.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>SEAT</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="SKODA"><img src="/img/skoda.png" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>SKODA</p>
            <p></p>
            
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	
            <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="OPEL"><img src="/img/opel.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>OPEL</p>
            <p></p>
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
      <div class="col-sm-4 col-xs-6">
      
      	
            <div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="FORD"><img src="/img/ford.jpg" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>FORD</p>
            <p></p>
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
      
	</div><!--/row-->
  </div><!--/container-->
</div>


<hr>
<!--modal for on load-->
<div  style="margin-top:120px; "id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="img/bakim.jpg"  style="width:540px; height:300px; " alt="" />
            </div>
        </div>
    </div>
</div>
<div class="divider" id="adres"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
   <hr>
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Adres</h1>
     <br>
  </div>   
       
  <div id="map-canvas"></div>
  
 
  
  <div id="Iletisim"class="col-sm-8"></div>
  <div class="col-sm-3 pull-right">

      <address>
        <br>
        <span id="map-input">
         Meydan Ahmet Sokak 54<br>
         Selçuklu KONYA
        </span><br>
         <b>(0332) 236 22 80</b>
      </address>
    
      <address>
        <strong>Email</strong><br>
        <a href="mailto:#">info@sarimehmetservis.com</a>
      </address>          
  </div>
  
</div><!--/row-->


  <div class="divider" id="iletisim"></div>  

<div class="row">
  
  <hr>
  
  <div class="col-sm-9 col-sm-offset-1">
      
      <div class="row form-group">
        <form  id="contactform">
        <div class="col-md-12">
        <h1>iletisim</h1>        
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="name" name="name" placeholder="İsminiz" required>
        </div>
        <div class="col-xs-6">
          <input type="text" class="form-control" id="organization" name="organization" placeholder="Email">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="text" class="form-control" name="email" id="email"placeholder="Şirket veya Kuruluş" required>
          </div>
          <div class="col-xs-5">
          <input type="text" class="form-control" name="phone" id="phone"placeholder="Telefon">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea name="message" id="message" class="form-control" placeholder="Yorumlarınız" required></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button type="button" id="submitIletisim" class="btn btn-default pull-right">Gönder</button>
          </div>
      </div>
    </form>
  </div>
  
</div><!--/row-->
<div id="info"></div>



<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">

              	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright ©2014 </p>
  </div>
</div>
<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Kapat</button>
	</div>
   </div>
  </div>
</div>


	<!-- script references -->
  <script src="js/jquery-2.1.3.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script type="text/javascript" src="js/gallery.js"></script>

	</body>
</html>

