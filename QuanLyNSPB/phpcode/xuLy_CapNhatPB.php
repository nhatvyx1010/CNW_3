<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

if (isset($_POST['IDPB'])) {
    $IDPB = $_POST['IDPB'];
    $TenPB = $_POST['TenPB'];
    $MoTa = $_POST['MoTa'];
    
    $query = "UPDATE PHONGBAN SET TenPB = '$TenPB', MoTa = '$MoTa' WHERE IDPB = '$IDPB'";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<div class="container">';
        include 'bangCapNhatPB.php';
        echo '</div>';
    }

}
?>