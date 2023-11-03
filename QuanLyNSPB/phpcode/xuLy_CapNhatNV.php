<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

if (isset($_POST['IDNV'])) {
    $IDNV = $_POST['IDNV'];
    $HoTen = $_POST['HoTen'];
    $IDPB = $_POST['IDPB'];
    $DiaChi = $_POST['DiaChi'];
    
    $query = "UPDATE NHANVIEN SET HoTen = '$HoTen', IDPB = '$IDPB', DiaChi = '$DiaChi' WHERE IDNV = '$IDNV'";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<div class="container">';
        include 'bangCapNhatNV.php';
        echo '</div>';
    }

}
?>