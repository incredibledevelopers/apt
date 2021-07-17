<?php

function getIpAddress()
{
    $ipAddress = '';
    if (! empty($_SERVER['HTTP_CLIENT_IP'])) {
        // to get shared ISP IP address
        $ipAddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // check for IPs passing through proxy servers
        // check if multiple IP addresses are set and take the first one
        $ipAddressList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        foreach ($ipAddressList as $ip) {
            if (! empty($ip)) {
                // if you prefer, you can check for valid IP address here
                $ipAddress = $ip;
                break;
            }
        }
    } else if (! empty($_SERVER['HTTP_X_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (! empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $ipAddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    } else if (! empty($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (! empty($_SERVER['HTTP_FORWARDED'])) {
        $ipAddress = $_SERVER['HTTP_FORWARDED'];
    } else if (! empty($_SERVER['REMOTE_ADDR'])) {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
    }
    return $ipAddress;
}	
	


	include('conn.php');
	$email= $_POST['email'];

	$fetch_basic_profile="select email from cm_email_subscribers where email='$email'";	
	
	$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);
	
	$count = mysqli_num_rows($basic_profile_rs);
	
	if($count > 0) {
	    ?>
	    <script> window.location.href = "index.php?msg=alreadysubscribed";</script>
	    <?php
	    }
	else   {  
	   $ip = getIpAddress();
	   $createdat=date("Y-m-d h:i:s");
	   $updateddat=date("Y-m-d h:i:s");
	   
	   $query = "insert into cm_email_subscribers(email,ip_address,created_at,updated_at) values('$email','$ip','$createdat','$updateddat')";
	   mysqli_query($con,$query) or die(mysqli_error($con));
	   ?>
	    <script> window.location.href = "index.php?msg=subscribed";</script>
	   <?php
	}
	

?>