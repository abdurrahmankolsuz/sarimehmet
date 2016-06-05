<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <script src="js/login.js"></script>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>sarimehmetservis admin girişi</h1>
      <form method="post" action="login.php">
        <p><input type="text" name="username" value="" placeholder="Kullanıcı Adı" required></p>
        <p><input type="password" name="password" value="" placeholder="Şifre" required></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Beni bu bilgisayarda hatırla!
          </label>
        </p>
        <p  class="submit"><input id="login" type="submit" name="commit" value="Giriş" ></p>
      </form>
    </div>

   <!-- <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div> -->
  </section>

  <section class="about">
    <p class="about-links">
    
    <p class="about-author">
     
  </section>
</body>
</html>
