<?php
$link = mysqli_connect("localhost", "root", "") or die ("Could not connect: ".mysqli_error());
mysqli_select_db($link, "dulieu");
$sql = "select * from phongban";
$rs = mysqli_query($link, $sql);
echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu bảng phòng ban</caption>';
echo '<tr><th>IDPB</th><th>Tên phòng ban</th><th>Mô tả</th><th></th></tr>';
while($row = mysqli_fetch_array($rs))
{
    echo '<tr><td>' . $row['IDPB'] . '</td><td>' . $row['TenPB'] . '</td><td>' . $row['MoTa'] . '</td><td><a href="form_CapNhatPB.php?IDPB=' . $row['IDPB'] . '">Update</a></td></tr>';
}
echo '</table>';
mysqli_close($link);
mysqli_free_result($rs)
?>