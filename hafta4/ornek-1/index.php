<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İleri İnternet Programcılığı</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br>Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form name="form" action="veritabani.php" method="post">
                  <div class="form-group">
                     <label>Kullanıcı Adı</label>
                     <input type="text" name="kullanici_adi" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Şifre</label>
                     <input type="password" name="sifre" class="form-control">
                  </div>
                  <button type="submit" name="giris" class="btn btn-black">Giriş Yap</button>
               </form>
            </div>
         </div>
    </div>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</body>
</html>