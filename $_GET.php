<form action="$_GET.php" method="GET">
	Name <input type="text" name="name">
	Age <input type="text" name="age" size="5">
	<input type="submit" value="submit">
</form>
<?php
$name=$_GET['name'];
$age=$_GET['age'];
if (isset($name)&&isset($age)) {
	if(!empty($name)&&!empty($age)){
		echo 'I am '.$name.', I am '.$age;
	}
	else{
			echo 'noting entered';
		}
}