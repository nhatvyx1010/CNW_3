<?php
$link = mysqli_connect("localhost", "root", "", "dulieu");

if (!$link) {
    die("Could not connect: " . mysqli_connect_error());
}

$query = "SELECT IDPB FROM PHONGBAN";
$rs = mysqli_query($link, $query);

if ($rs === false) {
    echo "Query error: " . mysqli_error($link);
} else {
    echo '
        <form action="xuLy_ThemPB.php" method="post">
            <table>
                <tr>
                    <th>IDPB</th>
                    <td><input type="text" name="IDPB" id="IDPB" onblur="checkIDPB()" required autofocus></td>
                </tr>
                <tr>
                    <th>Tên phòng ban</th>
                    <td><input type="text" name="TenPB" id="TenPB" required></td>
                </tr>
                <tr>
                    <th>Mô tả</th>
                    <td><input type="text" name="MoTa" id="MoTa" required></td>
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
    function checkIDPB() {
        var idpb = document.getElementById('IDPB').value;
        <?php
        if ($rs) {
            echo 'var found = false;';
            while ($row = mysqli_fetch_array($rs)) {
                echo 'if ("' . $row['IDPB'] . '" === idpb) { found = true; }';
            }
            echo 'if (found) { 
                alert("IDPB đã tồn tại!"); 
                document.getElementById("IDPB").value = "";
            }';
        }
        ?>
    }
</script>
