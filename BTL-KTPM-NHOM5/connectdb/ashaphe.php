<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>CÂU LẠC BỘ ASAPHE</title>
    <link rel="stylesheet" href="thietkeasp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!--Fornt chữ-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>

<body>


    
    <section class="header">
        <nav>
     
            <a href="index.html"><img src="logo.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="qltv/testn.html">QUẢN LÝ THÀNH VIÊN</a></li>
                    <li><a href="http://127.0.0.1:5500/home/index.html">TRANG CHỦ</a></li>
                    <li><a href="thuvien/home.html">THƯ VIỆN</a></li>
                    <li><a href="http://localhost/ktpm-end2/blog/index.php">HOẠT ĐỘNG</a></li>
                    <li><a href="">GÓP Ý</a></li>
                    <li><a href="http://127.0.0.1:5500/connectdb/lienhe/about.html">LIÊN HỆ</a></li>
                    <li><a href="vaologin1.php">THOÁT</a></li>
                   
                    
                   
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <!--Ở index có thể thêm <br> đầu câu để xuống dòng-->
            <p>HÃY CÙNG TÌM HIỂU, GIAO LƯU VỀ VĂN HÓA NHẬT BẢN NÀO! </p>
            <li><a href="http://127.0.0.1:5500/connectdb/lienhe/about.html" class="hero-btn">TÌM HIỂU THÊM VỀ CLB</a><li>
        </div>
    </section>
   
    <!--Menu cho điện thoại-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
</body>

</html>