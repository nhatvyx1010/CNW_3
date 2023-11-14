<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
if(isset($_SESSION['ID'])){
  $src = "T2_Admin.php";
}else{
  $src = "T2_User.php";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<frameset ROWS="80, *, 80" frameborder="0">
    <frame name="T1" src="T1.php">
    <frameset COLS="140, *, 100">
      <frame name="T2" src="<?php echo $src; ?>" frameborder="0">
      <frame name="T3" src="T3.php" frameborder="0">
      <frame name="T4" src="T4.php" frameborder="0">
    </frameset>
    <frame name="T5" src="T5.php" frameborder="0">
  </frameset>
  
</html>

