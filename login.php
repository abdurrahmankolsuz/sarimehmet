<?php
session_start();
if (!isset($_POST['submit'])){

  require_once("psl-config.php");
  $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  # check connection
  if ($mysqli->connect_errno) {
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
  }
 
  $username = mysqli_real_escape_string($mysqli,$_POST['username']);
  $password = mysqli_real_escape_string($mysqli,$_POST['password']);

 
  $sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
  $result = $mysqli->query($sql);
  

  if (!$result->num_rows == 1) {
    ?>

    <div id="asa"class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Başarılı!</strong> Mesajınız Gönderildi.
    </div>
<?php
         
   // $message = "Kullanıcı adı veya şifre yanlış.\\nTekrar deneyin.";
    //echo "<script type='text/javascript'>alert('$message');</script>";
   // echo "<script type='text/javascript'>location.reload();</script>";
        
  } else {
    $row =mysqli_fetch_array($result);
    $_SESSION['admin_name'] = $row['firstname']; 
    $_SESSION['admin_soyad'] = $row['lastname'];
    echo "<p>Logged in successfully</p>";
    // do stuffs
    header("Location:admin_panel.php");
  }
}
?>