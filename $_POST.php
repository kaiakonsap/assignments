<form action="$_POST.php" method="POST">
	Please enter your password <input type="password" name="password">
	<input type="submit" value="submit">
</form>
<?php
$password='password';

if (isset($_POST['password'])&&!empty($_POST['password'])) {
	if($_POST['password']===$password){
		echo 'correct ';
	}
	else{
		echo 'Incorrect';
	}
}
