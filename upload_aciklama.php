<?php
if (!isset($_POST['submit'])){

  require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
 
  $aciklama = $_POST['fname'];
 
 
  $sql = "UPDATE `aciklama` SET `aciklama` = '$aciklama' WHERE aciklama_id = 1";
 
  $mysqli->query($sql) ;
   
}
  header("Location:admin_panel.php");
?>