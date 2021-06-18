<?php

   if (isset($_POST['nameInfo']) && isset($_POST['emailInfo']) &&
        isset($_POST['addressInfo']) && isset($_POST['phoneInfo']) &&
        isset($_POST['dateInfo']) && isset($_POST['deliverInfo']) && isset($_POST['flavorInfo']) && isset($_POST['oprInfo'])) {
        
        $nameInfo = $_POST['nameInfo'];
        $emailInfo = $_POST['emailInfo'];
        $addressInfo = $_POST['addressInfo'];
        $phoneInfo = $_POST['phoneInfo'];
        $dateInfo = $_POST['dateInfo'];
        $deliverInfo = $_POST['deliverInfo'];
		$flavorInfo = $_POST['flavorInfo'];
		$oprInfo = $_POST['oprInfo'];

        $host = "localhost";
        $dbusername = "id17063259_chuyameannedbname";
        $dbpassword = "ziLqiKIyr+-1kvH$";
        $dbname = "id17063259_chuyameannedb";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if ($conn->connect_error) {
            echo('Could not connect to the database.' .$conn->connect_error);
	}  
    else {
		
		$SELECT = "SELECT emailInfo From OrderFormInfo Where emailInfo = ? Limit 1";
		$INSERT = "INSERT into OrderFormInfo (nameInfo, emailInfo, addressInfo, phoneInfo, dateInfo, deliverInfo, flavorInfo, oprInfo) values (?, ?, ?, ?, ?, ?, ?, ?)";

		// Prepare Statement

		$stmt = $conn->prepare($SELECT);
		
		$rnum = $stmt-> num_rows;
		
		if ($rnum == 0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssssss", $nameInfo, $emailInfo, $addressInfo, $phoneInfo, $dateInfo, $deliverInfo, $flavorInfo, $oprInfo);
			if ($stmt->execute()) {
				print "";
			}
			else {
				echo $stmt->error;
			}
		}
		
		$stmt->close();
		$conn->close();
	}
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" 
            rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        	<link rel="stylesheet" href="css/animate.css">
        	<link rel="stylesheet" href="css/owl.carousel.min.css">
       	 	<link rel="stylesheet" href="css/owl.theme.default.min.css">
        	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        	<link rel="stylesheet" href="css/magnific-popup.css">
        	<link rel="stylesheet" href="css/aos.css">
        	<link rel="stylesheet" href="css/flaticon.css">
        	<link rel="stylesheet" href="css/icomoon.css">
        	<link rel="stylesheet" href="css/ionicons.min.css">
        	<link rel="stylesheet" href="style.css">

            <title>ChuYameAnn</title>
	</head>
<body>

<div class="bg_2" style="background-image: url(images/order_bg2.jpg);">
    <div class="container">
        <div class="row slider-text js-fullheight justify-content-center align-items-center">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
			    <div>
			        <button class="bton Homepage" onclick="location.href='index.html'">Back to Homepage</button>
			    </div>
            </div>
        </div>
    </div>
   
    <!-- scripts -->
   <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="main.js"></script>
    
</body>
