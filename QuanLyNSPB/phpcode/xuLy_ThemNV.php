<?php
if (isset($_POST['IDNV'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $IDNV = $_POST['IDNV'];
    $HoTen = $_POST['HoTen'];
    $IDPB = $_POST['IDPB'];
    $DiaChi = $_POST['DiaChi'];

    $query = "INSERT INTO nhanvien (IDNV, HoTen, IDPB, DiaChi) VALUES ('$IDNV', '$HoTen', '$IDPB', 'DiaChi')";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    }

    echo '<div class="container">';
    include 'bangCapNhatNV.php';
    echo '</div>';

}
?>