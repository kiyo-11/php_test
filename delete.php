<?php
$id = $_POST["id"];
$sql ="delete from userdata where id=".$id;
$db = mysqli_connect("localhost", "root", "admin", "user");
$result = mysqli_query($db, $sql);
mysqli_close($db);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<p>削除が完了しました</p>
		<a href="index.php">ログインページへ</a>
	</body>
</html>