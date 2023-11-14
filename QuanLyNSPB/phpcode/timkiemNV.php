<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['q'])) {
        $link = mysqli_connect("localhost", "root", "", "dulieu");

        if (!$link) {
            die("Could not connect: " . mysqli_connect_error());
        }

        $Find = $_GET['q'];

        $query = "SELECT * FROM NHANVIEN WHERE HoTen LIKE '%$Find%'";
        $rs = mysqli_query($link, $query);

        if ($rs === false) {
            echo "Query error: " . mysqli_error($link);
        } else {
            echo '<table border="1" width="100%">';
            echo '<caption>Dữ liệu bảng nhân viên</caption>';
            echo '<tr><th>IDNV</th><th>Họ và tên</th><th>IDPB</th><th>Địa chỉ</th></tr>';

            while ($row = mysqli_fetch_assoc($rs)) {
                echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['HoTen'] . '</td><td>' . $row['IDPB'] . '</td><td>' . $row['DiaChi'] . '</td></tr>';
            }

            echo '</table>';
        }

        mysqli_free_result($rs);
        mysqli_close($link);
    }
}
?>
