<?php
$id = $_POST["id"];
$email = $_POST["email"];
$name = $_POST["name"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$blood = $_POST["blood"];
$old = $_POST["old"];
$memo = $_POST["memo"];
$sql = "update userdata set email='".$email."', password='".$password."', name='".$name."', gender='".$gender."', blood='".$blood."', old=".$old.", memo='".$memo."'where id =".$id;
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
		<p>更新完了しました</p>
		<a href="index.php">ログインページへ</a>
		</body>
	</html>

update customer set email = aaa and password = aaa and name = 佐藤 and gender = 1 and blood = A and memo = あああ where id = 5