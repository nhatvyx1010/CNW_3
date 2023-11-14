<?php
if (isset($_POST['options'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $options = $_POST['options'];

    foreach ($options as $option) {
        $query = "DELETE FROM phongban WHERE IDPB = '$option'";
        $rs = mysqli_query($link, $query);

        if ($rs === false) {
            echo "Query error: " . mysqli_error($link);
        }
    }

    echo '<div class="container">';
    include 'bangXoaPB.php';
    echo '</div>';

} else if (isset($_GET['IDPB'])) {
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }

    $IDPB = $_GET['IDPB'];

    $query = "DELETE FROM phongban WHERE IDPB = '$IDPB'";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    }else{
        echo '<div class="container">';
        include 'bangXoaPB.php';
        echo '</div>';
    }

}
?>