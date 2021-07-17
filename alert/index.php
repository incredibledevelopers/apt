<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jQuery Toaster.js Demo</title>
        <meta charset="UTF-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="toast.style.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="toast.script.js"></script>
      
    </head>
    <body>

<?php
if(isset($_GET['msg']))
 {
     $msg= $_GET['msg'];
     if($msg == 'contactsuccess') {
 
?>
        
        <script>
            function addToast(){
                $.Toast("Success", "You have been subscribed Succesfully !", "success", {
                    has_icon:true,
                    has_close_btn:true,
					stack: true,
                    fullscreen:true,
                    timeout:5000,
                    sticky:false,
                    has_progress:true,
                    rtl:false,
                });
            }
            addToast();
        </script>
    <?php
     } }
    ?>

    </body>
</html>