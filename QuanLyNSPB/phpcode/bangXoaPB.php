<?php
$link = mysqli_connect("localhost", "root", "") or die ("Could not connect: ".mysqli_error());
mysqli_select_db($link, "dulieu");
$sql = "select * from phongban";
$rs = mysqli_query($link, $sql);
echo '<form action="xuLy_XoaPB.php" method="post">';
echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu bảng phòng ban</caption>';
echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th><th>Xóa</th><th></th></tr>';
while($row = mysqli_fetch_array($rs))
{
    echo '<tr>  <td>' . $row['IDPB'] . '</td>
                <td>' . $row['TenPB'] . '</td>
                <td>' . $row['MoTa'] . '</td>
                <td><a href="xuLy_XoaPB.php?IDPB=' . $row['IDPB'] . '">Xóa</a></td>

                <td><input type="checkbox" id="checkbox" name="options[]" value="' . $row['IDPB'] . '" onchange="Change(this)"></td>
            </tr>';
}
echo '</table>';
echo '<input type="submit" name="xoaTatCa" value="Xóa tất cả" style="width: 80px; height: 30px; margin: 50px;">';
echo '</form>';
?>

<script>
    function Change(checkbox) {
        if (checkbox.checked) {
            checkbox.value = checkbox.value;
        } else {
            checkbox.value = "";
        }
    }
</script>

<?php 
mysqli_close($link);
mysqli_free_result($rs)
?>