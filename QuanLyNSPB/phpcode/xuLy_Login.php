<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST['Username'])){
    $link = mysqli_connect("localhost", "root", "", "dulieu");

    if (!$link) {
        die("Could not connect: " . mysqli_connect_error());
    }
    $username = $_POST['Username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE Username='$username' AND password='$password'";
    $rs = mysqli_query($link, $query);

    if ($rs == false || mysqli_num_rows($rs) === 0) { 
        header("Location: index.php");
    } else {
        $row = mysqli_fetch_array($rs);
        $_SESSION['ID'] = $row['ID'];

        echo '<script>window.top.location.reload();</script>';
        exit();
    }
    mysqli_close($link);
}

?>