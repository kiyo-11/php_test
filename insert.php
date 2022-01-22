<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF=8">
	</head>
	<body>
		<?php
	echo'<form action="insert2.php" method="post">';
		echo'<label for="email">Email</label>';
		echo'<input type="text" id="email" name="email">';
		echo'<label for="password">Password</label>';
		echo'<input type="password" id="password" name="password">';
		echo'<label for="name">名前</label>';
		echo'<input type="text" id="name" name="name">';
		echo'<label for="gender">性別</label>';
		echo'<input type="radio" name="gender" value="0" checked=checked>男';
		echo'<input type="radio" name="gender" value="1">女';
		echo'<label for="blood">血液型</label>';
		echo'<select name="blood">';
		echo'<option value="A">A型</option>';
		echo'<option value="B">B型</option>';
		echo'<option value="O">O型</option>';
		echo'<option value="AB">AB型</option>';
		echo'</select>';
			echo'<label for="old">年齢</label>';
			echo'<input type="text" id="old" name="old">';
			echo'<label for="memo">メモ</label>';
			echo'<textarea name="memo" rows="4" cols="20" maxlength="100"></textarea>';
			echo'<input type="submit" value="登録">';
			echo'</form>';
			?>
	</body>
</html>
