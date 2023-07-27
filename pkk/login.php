<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css" />
    <meta name="viewport" content="widht=device-width,initial-scale=1.0" />
  </head>

  <body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN</h2>
          <div class="underline-title"></div>
        </div>
        <form action="koneksi.php" method="post" class="form">
          <label for="Username" style="padding-top: 13px">&nbsp; Username</label>
          <input id="username" class="form-content" type="username" name="username" autocomplete="on" required/>
          <div class="form-border"></div>

          <label for="password" style="padding-top: 22px">&nbsp; Password</label>
          <input id="password" class="form-content" type="password" name="password" autocomplete="on" required/>
          <div class="form-border"></div>
          <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        </form>
      </div>
    </div>
  </body>
</html>
