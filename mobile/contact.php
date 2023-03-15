<?php
include('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$fd = $_POST['feed'];
	
	if(mysql_query("INSERT INTO `contact` (`Name`,`Email`,`Mobile`,`Feedback`) VALUES ('$name','$email','$mob', '$fd')"))
	{
		header('Location: C:/XAMPP/htdocs/Mobile/contact.html');
		
	}
	else
		echo mysql_error();
	}
}
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not contact';
?>