<?php
if (isset($_POST['agree'])&& $_POST['agree']=="true")
{
	echo 'Done';
}
else
{
	echo 'You must agree to the terms!';
}