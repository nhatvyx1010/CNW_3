<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex: 1;
            width: 100%;
        }
        .products {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .product {
            background-color: #ffffff;
            border: 1px solid black;
            border-radius: 5px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 10px;
            flex-basis: 100%; 
        }
        .product a {
            text-decoration: none;
            color: #333;
        }
        .product a:hover {
            color: #D8C3A5;
        }
        body{
            background-color: #0c937d;
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="products">
                <div class="product"><a href="timkiem.php" id="linkToFrame">Tìm kiếm</a></div>
                <div class="product"><a href="capnhatPhongban.php" id="linkToFrame">Cập nhật phòng ban</a></div>
                <div class="product"><a href="capnhatNhanvien.php" id="linkToFrame">Cập nhật nhân viên</a></div>
                <div class="product"><a href="xoaPhongban.php" id="linkToFrame">Xóa phòng ban</a></div>
                <div class="product"><a href="xoaNhanvien.php" id="linkToFrame">Xóa nhân viên</a></div>
                <div class="product"><a href="themPhongban.php" id="linkToFrame">Thêm phòng ban</a></div>
                <div class="product"><a href="themNhanvien.php" id="linkToFrame">Thêm nhân viên</a></div>
                <div class="product"><a href="xuLy_Logout.php" id="linkToFrame">Đăng xuất</a></div>
            </div>
        </div>
        
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var links = document.querySelectorAll("a#linkToFrame");
            links.forEach(function (link) {
                link.addEventListener("click", function (event) {
                    event.preventDefault(); 
                    var hrefValue = this.getAttribute("href"); 
                    window.parent.frames["T3"].changeFrameContent(hrefValue);
                });
            });
        });
    </script>
    
</body>
</html>