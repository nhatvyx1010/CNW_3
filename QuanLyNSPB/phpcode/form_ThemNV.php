<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

$query = "SELECT IDNV FROM NHANVIEN";
$rs = mysqli_query($link, $query);

if ($rs === false) {
    echo "Query error: " . mysqli_error($link);
} else {
    echo '
        <form action="xuLy_ThemNV.php" method="post">
            <table>
                <tr>
                    <th>IDNV</th>
                    <td><input type="text" name="IDNV" id="IDNV" onblur="checkIDNV()" required autofocus></td>
                </tr>
                <tr>
                    <th>Họ và tên</th>
                    <td><input type="text" name="HoTen" id="HoTen" required></td>
                </tr>
                <tr>
                    <th>Địa chỉ phòng ban</th>
                    <td><input type="text" name="IDPB" id="IDPB" required></td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td><input type="text" name="DiaChi" id="DiaChi" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Thêm"></td>
                </tr>
            </table>
        </form>';
}

mysqli_close($link);
?>

<script>
    function checkIDNV() {
        var IDNV = document.getElementById('IDNV').value;
        <?php
        if ($rs) {
            echo 'var found = false;';
            while ($row = mysqli_fetch_array($rs)) {
                echo 'if ("' . $row['IDNV'] . '" === IDNV) { found = true; }';
            }
            echo 'if (found) { 
                    alert("IDNV đã tồn tại!"); 
                    document.getElementById("IDNV").value = "";
                }';
        }
        ?>
    }
</script>
