<?php 
$link = mysqli_connect("localhost", "root", "") or die ("Could not connect: ".mysqli_error());
mysqli_select_db($link, "dulieu");
$sql = "select * from nhanvien";
$rs = mysqli_query($link, $sql);
echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu bảng nhân viên</caption>';
echo '<tr><th>IDNV</th><th>Tên nhân viên</th><th>Địa chỉ phòng ban</th><th>Địa chỉ</th></tr>';

while($row = mysqli_fetch_array($rs))
{
    echo '<tr><td>' . $row['IDNV'] . '</td><td>' . $row['HoTen'] . '</td><td>' . $row['IDPB'] . '</td><td>' . $row['DiaChi'] . '</td></tr>';
}
echo '</table>';
mysqli_close($link);
mysqli_free_result($rs)
?>