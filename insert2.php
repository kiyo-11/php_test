<?php
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$blood = $_POST["blood"];
$old = $_POST["old"];
$memo = $_POST["memo"];
$sql = "insert into userdata (email, name, password, gender, blood, old, memo)value
('".$email."', '".$name."', '".$password."', '".$gender."', '".$blood."', ".$old.", '".$memo."')";
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
		<p>登録が完了しました</p>
		<a href="index.php">ログインページへ</a>
	</body>
</html>