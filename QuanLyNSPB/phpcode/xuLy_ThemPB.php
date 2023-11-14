<?php
if (isset($_POST['IDPB'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $IDPB = $_POST['IDPB'];
    $TenPB = $_POST['TenPB'];
    $MoTa = $_POST['MoTa'];

    $query = "INSERT INTO phongban (IDPB, TenPB, MoTa) VALUES ('$IDPB', '$TenPB', '$MoTa')";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    }

    echo '<div class="container">';
    include 'bangCapNhatPB.php';
    echo '</div>';

}
?>