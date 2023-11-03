<?php
if (isset($_POST['options'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $options = $_POST['options'];

    foreach ($options as $option) {
        $query = "DELETE FROM nhanvien WHERE IDNV = '$option'";
        $rs = mysqli_query($link, $query);

        if ($rs === false) {
            echo "Query error: " . mysqli_error($link);
        }
    }

    echo '<div class="container">';
    include 'bangXoaNV.php';
    echo '</div>';

} else if (isset($_GET['IDNV'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $IDNV = $_GET['IDNV'];

    $query = "DELETE FROM nhanvien WHERE IDNV = '$IDNV'";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    }else{
        echo '<div class="container">';
        include 'bangXoaNV.php';
        echo '</div>';
    }

}
?>