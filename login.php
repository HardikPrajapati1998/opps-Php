<?php
	//start session
	session_start();
 
	//redirect if logged in
	if(isset($_SESSION['user'])){
		header('location:table.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--  meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Demo</title>

    <!-- Icons font CSS-->
    <link href="colorlib-regform-3/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="colorlib-regform-3/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- colorlib-regform-3/vendor CSS-->
    <link href="colorlib-regform-3/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="colorlib-regform-3/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="colorlib-regform-3/css/main.css" rel="stylesheet" media="all">
</head>

<body>

        
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login</h2>
                    <form method="POST" action="pro.php"  class="was-validated">
                        
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" required>
                           
                        </div>
                       
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="password" required>
                           
                        </div>
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" value="submit" name="submit" type="submit">
                        </div>
                        <div class="p-t-10 ">
                        <a href ="forgot.php" style="color:white; ">Forgot Password </a>
                       
                        </div>
                        <div class="p-t-10 ">
                        
                        <a href ="index.php" style="color:white; ">Registration </a>
                        </div>
                    </form>
                    
                </div>
             
		    	
            </div>
        </div>
    </div>
    <?php
		    	if(isset($_SESSION['message'])){
		    		?>
		    			<div class="alert alert-info text-center">
					        <?php echo $_SESSION['message']; ?>
					    </div>
		    		<?php
 
		    		unset($_SESSION['message']);
		    	}
		    ?>


    <!-- Jquery JS-->
    <script src="colorlib-regform-3/vendor/jquery/jquery.min.js"></script>
    <!-- colorlib-regform-3/vendor JS-->
    <script src="colorlib-regform-3/vendor/select2/select2.min.js"></script>
    <script src="colorlib-regform-3/vendor/datepicker/moment.min.js"></script>
    <script src="colorlib-regform-3/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="colorlib-regform-3/js/global.js"></script>
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->