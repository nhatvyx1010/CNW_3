<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

if (isset($_GET['IDNV'])) {
    $IDNV = $_GET['IDNV'];
    
    $query = "SELECT * FROM NHANVIEN WHERE IDNV = '$IDNV'";
    $rs = mysqli_query($link, $query);
    $query2 = "SELECT IDPB FROM PHONGBAN";
    $rs2 = mysqli_query($link, $query2);

    if ($rs === false) {
        echo "Query error: " . mysqli_error($link);
    } else {
        echo '<table border="1" width="100%">';
        echo '<caption>Dữ liệu bảng nhân viên</caption>';
        echo '<tr><th>IDNV</th><th>Tên nhân viên</th><th>Địa chỉ phòng ban</th><th>Địa chỉ</th></tr>';
        $row = mysqli_fetch_array($rs);
        echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['HoTen'] . '</td><td>' . $row['IDPB'] . '</td><td>' . $row['DiaChi'] . '</td></tr>';
        echo '</table>';
        echo '
            <form action="xuLy_CapNhatNV.php" method="post">
                <table>
                    <tr>
                        <th>IDNV</th>
                        <td><input type="text" name="IDNV" value="' . $row['IDNV'] . '" readonly></td>
                    </tr>
                    <tr>
                        <th>Họ và Tên</th>
                        <td><input type="text" name="HoTen" value="' . $row['HoTen'] . '"></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ phòng ban</th>
                        <td>
                        <select name="IDPB" >';
                        while($row_option = mysqli_fetch_array($rs2)){
                            echo '<option value="' .$row_option[0] . '">' .$row_option[0] . '</option>';
                        }
            echo '      </select>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><input type="text" name="DiaChi" value="' . $row['DiaChi'] . '"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Cập nhật"></td>
                    </tr>
                </table>
            </form>';
    }

    mysqli_free_result($rs);
}
mysqli_close($link);

?>