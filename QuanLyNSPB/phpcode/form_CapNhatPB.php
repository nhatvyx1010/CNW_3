<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

if (isset($_GET['IDPB'])) {
    $IDPB = $_GET['IDPB'];
    
    $query = "SELECT * FROM PHONGBAN WHERE IDPB = '$IDPB'";
    $rs = mysqli_query($link, $query);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<table border="1" width="100%">';
        echo '<caption>Dữ liệu bảng phòng ban</caption>';
        echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th></tr>';

        $row = mysqli_fetch_array($rs);

        echo '<tr><td>' . $row['IDPB'] . '</td><td>' . $row['TenPB'] . '</td><td>' . $row['MoTa'] . '</td></tr>';

        echo '</table>';

        echo '
            <form action="xuLy_CapNhatPB.php" method="post">
                <table>
                    <tr>
                        <th>IDPB</th>
                        <td><input type="text" name="IDPB" value="' . $row['IDPB'] . '" readonly></td>
                    </tr>
                    <tr>
                        <th>Tên phòng ban</th>
                        <td><input type="text" name="TenPB" value="' . $row['TenPB'] . '"></td>
                    </tr>
                    <tr>
                        <th>Mô tả</th>
                        <td><input type="text" name="MoTa" value="' . $row['MoTa'] . '"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>';


    }

    mysqli_free_result($rs);
}else {
    $rs = mysqli_query($link, "SELECT * FROM PHONGBAN");

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<table border="1" width="100%>';
        echo '<caption>Dữ liệu bảng phòng ban</caption>';
        echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th><th></th></tr>';

        while ($row = mysqli_fetch_assoc($rs)) {
            echo '<tr><td>' . $row['IDPB'] . '</td><td>' . $row['TenPB'] . '</td><td>' . $row['MoTa'] . '</td><td><a href="xemthongtinNV.php?department=' . $row['IDPB'] . '"> </a></td></tr>';
        }

        echo '</table';
    }

    mysqli_free_result($rs);
}
mysqli_close($link);

?>