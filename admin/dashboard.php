<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
?>
<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<link rel="preconnect" href="https://fonts.gstatic.com">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> STARBUC(:| Admin Dashboard</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Admin Stye -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">

</head>
<body>
<!-- navigation menu start  -->
<?php include('includes/leftbar.php'); ?>
<!-- navigation menu end  -->
<section class="home-section">
    <div class="home-content">
        <i class="bx bx-menu" ></i>
        <span class="text">Dashboard</span>
    </div>
</section>
</body>
<script src="js/main.js"></script>
</html>
<?php } ?>