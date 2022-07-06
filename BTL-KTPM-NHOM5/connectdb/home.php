<?php
session_start();
if (!isset($_SESSION['username'])) {
              header('location:login.php');
}

?>
<html>

<head>
              <title>ASHAPHE</title>
              <link rel="stylesheet" type="text/css" href="style.css">
              <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
              <div class="container">
                            <a href="login.php">Login</a>
                            <a class="float-right" href="loguot.php"> Logout</a>
                            <h1> Welcome <?php echo $_SESSION['username'] ?></h1>

              </div>
              </header>
              <div class="abc">
                            <video src="video.mp4" muted loop autoplay></video>
                            <div class="xyz"></div>
              </div>
</body>

</html>