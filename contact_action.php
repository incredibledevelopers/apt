<?php
if(isset($_POST['submit']))
	{
	$name  =  $_POST['name'];
	$email  =  $_POST['email'];
	$mobile  =  $_POST['mobile'];
	$messages  =  $_POST['message'];

	$inputMsg = 'New Enquiry::'.'%0AName:'.$name.'%0A%0AEmail: '.$email.'%0A%0AContact No:'.$mobile.'%0A%0AMessage:'.$messages;
	$url = 'https://api.callmebot.com/whatsapp.php?phone=+918796154725&text='.$inputMsg.'&apikey=981252';
	redirect($url);
	}

function redirect($url)
{
	if (!headers_sent())
	{
		header('Location: '.$url);
		exit;
	}
	else
	{
		echo '<script type="text/javascript">';
		echo 'window.location.href="'.$url.'";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		echo '</noscript>'; exit;
	}
}
?>
				