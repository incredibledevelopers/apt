<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digitize Your Society With APTSOCY!</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  <meta name="keywords" content="A COMPLETE HOUSING SOCIETY MANAGEMENT SOLUTION" />
  <meta name="description"
    content="A COMPLETE HOUSING SOCIETY MANAGEMENT SOLUTION, Society Management Application, Society Management Software, best Society Management software, Society legal Services" />

  <meta name="og:title" content="Digitize Your Society With APTSOCY! " />
  <meta name="og:type" content="website" />
  <meta name="og:url" content="https://www.aptsocy.com" />
  <meta name="og:image" content="https://aptsocy.com/public/images/meta-image.png" />
  <meta name="og:site_name" content="Digitize Your Society With APTSOCY!" />
  <meta name="og:description"
    content="A COMPLETE HOUSING SOCIETY MANAGEMENT SOLUTION, Society Management Application, Society Management Software, best Society Management software, Society legal Services" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="https://aptsocy.com/public/uploads/media/file_1617260058.png">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/language.css" rel="stylesheet">
  <link href="toast.style.min.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php'); ?>
   
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <?php include('slider.php'); ?>
  <!-- End Hero -->

  <main id="main">
  <!-- ======= Values Section ======= -->
  <?php include('feature.php'); ?>
  <!-- End Values Section -->

 <!-- ======= About Section ======= -->
 <?php include('about.php'); ?>
 <!-- End About Section -->

 <!-- ======= Pricing Section ======= -->
 <?php include('pricing.php'); ?>
 <!-- End Pricing Section -->

  <!-- ======= Contact Section ======= -->
 <?php include('contactus.php'); ?>
 <!-- End Contact Section -->

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <?php include('footer.php'); ?>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
 <?php include('commonjs.php'); ?>
 
 <?php
if(isset($_GET['msg']))
 {
     $msg= $_GET['msg'];
     if($msg == 'contactsuccess') {
 
?>

<script>
    function contactUs(){
        $.Toast("Success", "Thank You for Contacting Us.We will get back to you !", "success", {
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
    contactUs();
</script>
<?php
    }
    if($msg == 'alreadysubscribed') {

?>
<script>
    function alreadySubscribed(){
        $.Toast("Error", "You are already subscribed !", "error", {
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
    alreadySubscribed();
</script>
<?php
}  
  if($msg == 'subscribed') {

?>
<script>
    function subscribed(){
        $.Toast("Success", "You have been Subscribed Succeswsfully !", "success", {
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
    subscribed();
</script>

<?php
}
}
?>

</body>

</html>