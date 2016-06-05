<?php
session_start();

if(!isset($_SESSION['admin_name'])){
header("Location:admin_login.php");
}
?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<title>jQuery Ajax Bootstrap</title>
<link href=css/bootstrap.min.css rel=stylesheet>
<!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
<![endif]-->
</head>
<body onload=viewdata() style=background-color:#333366>
<p><br/></p>
<div class=container>
<button type=button class="btn btn-primary" data-toggle=modal data-target=#myModal>
Ekle
</button>
<div class=col-lg-6>
<div class=input-group>
<input type=text class=form-control id=asdf placeholder="Aradığınız ismi ya da plakayı giriniz...">
<span class=input-group-btn>
<button class="btn btn-default" id=search1 type=button><i class="glyphicon glyphicon-search"></i> Ara</button>
</span>
<div id=result></div>
</div>
</div>
<br/>
<div class="modal fade" id=myModal tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
<div class=modal-dialog>
<div class=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal aria-label=Close><span aria-hidden=true>&times;</span></button>
<h4 class=modal-title id=myModalLabel>Yeni Veri Ekle</h4>
</div>
<div class=modal-body>
<form>
<div class=form-group>
<label for=as>Ad-Soyad</label>
<input type=text class=form-control id=as>
</div>
<div class=form-group>
<label for=nm>Oto Markası</label>
<input type=text class=form-control id=nm>
</div>
<div class=form-group>
<label for=gd>Plaka</label>
<input type=text class=form-control id=gd>
</div>
<div class=form-group>
<label for=pn>Tarih</label>
<div class='input-group date' id=datetimepicker1>
<input type=date class=form-control id=pn />
<span class=input-group-addon>
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
</div>
<div class=form-group>
<label for=al>Masraf</label>
<input type=text class=form-control id=al>
</div>
<div class=form-group>
<label for=yi>Yapılan İş</label>
<input type=text class=form-control id=yi>
</div>
</form>
</div>
<div class=modal-footer>
<button type=button class="btn btn-default" data-dismiss=modal>Kapat</button>
<button type=button id=save class="btn btn-primary">Kaydet</button>
</div>
</div>
</div>
</div>
<div id=info></div>
<br/>
<div id=viewdata></div>
<div id=viewdatacriteria></div>
</div>
<script src=js/jquery.min.js></script>
<script src=js/bootstrap.min.js></script>
<script>function viewdata(){$.ajax({type:"GET",url:"php/getdata.php"}).done(function(a){$("#viewdata").html(a)})}$("#search1").click(function(){$.ajax({type:"POST",url:"php/getdatacriteria.php",data:{asdf:$("#asdf").val(),}}).done(function(a){$("#viewdatacriteria").html(a);$("#viewdata").hide()})});$("#save").click(function(){var c=$("#as").val();var b=$("#nm").val();var f=$("#gd").val();var d=$("#pn").val();var g=$("#al").val();var e=$("#yi").val();var a="as="+c+"&nm="+b+"&gd="+f+"&pn="+d+"&al="+g+"&yi="+e;$.ajax({type:"POST",url:"php/newdata.php",data:a}).done(function(h){$("#info").html(h);viewdata();$("#a").fadeOut(5000);$("#myModal").modal("toggle")})});function updatedata(g){var a=g;var i=$("#nm"+g).val();var h=$("#gd"+g).val();var b=$("#pn"+g).val();var f=$("#al"+g).val();var c=$("#as"+g).val();var d=$("#yi"+g).val();var e="as="+c+"&nm="+i+"&gd="+h+"&pn="+b+"&al="+f+"&yi="+d;$.ajax({type:"POST",url:"php/updatedata.php?id="+a,data:e}).done(function(j){$("#info").html(j);viewdata()})}function deletedata(a){var b=a;$.ajax({type:"GET",url:"php/deletedata.php?id="+b}).done(function(c){$("#info").html(c);viewdata()})};</script>
</body>
</html>