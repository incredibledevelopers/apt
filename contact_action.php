<?php
if($_POST)
{

    error_reporting(0);
    date_default_timezone_set('Asia/Kolkata');
    include('/home/incredib/public_html/apt/phpmailer/class.phpmailer.php');
    
    $user_name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_phone     = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $content        = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    
    $clientmailcontent="
            <table border='0' width='250' height='455'>
			<tr>
				<td height='68' width='250' ><img src=https://aptsocy.com/public/uploads/media/logo.png border=0></td>
			</tr>
			<tr>
				<td height='52' width='250'><font color=red>Hi $user_name,</font></td>
			</tr>
			<tr>
				<td height='41' width='250'>
					This is to let you know that we have received your email and one of our representative will contact you soon.<br><br>
					Please do not reply to this email as it will not be received.<br><br>
					This is an auto generated response to your enquiry sent by us.
				</td>
			</tr>
			<tr>
				<td height='122' width='250'>
					<br>
                     <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APT Socy</strong><br>
					  <p>A-11, Second Floor, Mangalam <br>Chambers Co-Operative Housing Society,Above Abhyudaya Co-Op Bank, <br>
					Paud Road, Kothrud,
					Pune-411038</p>
					
				</td>
			</tr>
		</table>";
		
	        $email = new PHPMailer();
	        $email->From      = 'incredib@lin6.plreseller.com';
	        $email->FromName  = 'APT Socy';
	        $email->Subject   = "APT Socy";
	        $email->Body      = $clientmailcontent;
	        $email->IsHTML(true); 
	        $email->AddAddress( $user_email );
	        $b=$email->Send();
	     
	   
        	$precisionmailcontent="
        
            <table border='0' width='250' height='455'>
			<tr>
				<td height='68' width='250' ><img src=https://aptsocy.com/public/uploads/media/logo.png border=0></td>
			</tr>
			<tr>
				<td height='52' width='250'><font color=red>Dear Sir,</font></td>
			</tr>
			<tr>
				<td height='41' width='250'>
				    You have received an enquiry from $user_name.<br>
				    Name : $user_name <br>
				    Email : $user_email <br>
				    Mobile No : $user_phone <br>
				    Message: $content <br>
				</td>
			</tr>
		    <tr>
				<td height='52' width='250'>Regards<br> APT Socy</td>
			</tr>
    		</table>";
    		
        	$subject=  "New Enquiry : ".date('d-M-Y');
	        $email = new PHPMailer();
	        $email->From      = 'incredib@lin6.plreseller.com';
	        $email->FromName  = 'APT Socy';
	        $email->Subject   = $subject;
	        $email->Body      = $precisionmailcontent;
	        $email->IsHTML(true); 
	        //email->AddAddress( 'housing@aptsocy.com' );  
	        $email->AddAddress( 'amitbaramatimca@gmail.com');  
	        $b=$email->Send();
	  
                

}
?>
<script> 
window.location.href = "index.php?msg=contactsuccess";
</script>