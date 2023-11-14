<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

if (isset($_GET['department'])) {
    $departmentID = $_GET['department'];
    
    $query = "SELECT * FROM NHANVIEN WHERE IDPB = '$departmentID'";
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
} else {
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<table border="1" width="100%>';
        echo '<caption>Dữ liệu bảng phòng ban</caption>';
        echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th><th></th></tr>';

        while ($row = mysqli_fetch_assoc($rs)) {
            echo '<tr><td>' . $row['IDPB'] . '</td><td>' . $row['TenPB'] . '</td><td>' . $row['MoTa'] . '</td><td><a href="xemthongtinNV.php?department=' . $row['IDPB'] . '">Xem</a></td></tr>';
        }

        echo '</table';
    }

    mysqli_free_result($rs);
}

mysqli_close($link);
?>