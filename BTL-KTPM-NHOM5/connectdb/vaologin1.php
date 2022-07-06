<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="stvaologin.css">
  <link rel="stylesheet"  type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>

<body>

  <section class="showcase">
    <header>
      <h2 class="logo" type=" margin: right;">ASAPHE</h2>

    </header>
    <div class="abc">
      <video src="vd.mp4" muted loop autoplay></video>
      <div class="xyz"></div>
    </div>


    <div class="overlay"></div>
    <div class="text">
      <h2 style=" color: rgb(244, 229, 229); font-family: 'Tapestry', cursive;">CHÀO MỪNG ĐẾN </h2>
      <h3 style=" color: rgb(244, 229, 229); font-family: 'Tapestry', cursive;">CÂU LẠC BỘ ASAPHE</h3>
     
      <div class="col-md-6 login-left">
        <h4 style="color:white" >Đăng Nhập </h4>
        <form action="validation.php" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>

          </div>
          <div class="form-group">
            <label>.Password </label>
            <input type="password" name="password" class="form-control" required>

          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div>
        <p>! Nếu bạn chưa có tài khoản hãy bấn Đăng kí ...</p>
      </div>
      <form class="login-right" action="dangki1.php">
        <button type="submit" class="btn btn-primary">Đăng kí</button>
      </form>

    </div>

  </section>
  <div class="menu">
    <ul>
      <li><a href="#">login</a></li>
      <li><a href="#">khach</a></li>
    </ul>
  </div>
  <script src="test.js"></script>

  <body>
    <html>