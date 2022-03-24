<?php
session_start();
?>
<html>

<head>
	<title>
		Ticket Booking Successful
	</title>
	<style>
		input {
			border: 1.5px solid #030337;
			border-radius: 4px;
			padding: 7px 30px;
		}
		h2{
			text-align: center;
		}
		h3{
			text-align: center;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
			border-radius: 4px;
			padding: 7px 45px;
			margin: 0px 127px
		}

		.success-checkmark {
			width: 80px;
			height: 115px;
			margin: 0 auto;
		}

		.success-checkmark .check-icon {
			width: 80px;
			height: 80px;
			position: relative;
			border-radius: 50%;
			box-sizing: content-box;
			border: 4px solid #4caf50;
		}

		.success-checkmark .check-icon::before {
			top: 3px;
			left: -2px;
			width: 30px;
			transform-origin: 100% 50%;
			border-radius: 100px 0 0 100px;
		}

		.success-checkmark .check-icon::after {
			top: 0;
			left: 30px;
			width: 60px;
			transform-origin: 0 50%;
			border-radius: 0 100px 100px 0;
			animation: rotate-circle 4.25s ease-in;
		}

		.success-checkmark .check-icon::before,
		.success-checkmark .check-icon::after {
			content: "";
			height: 100px;
			position: absolute;
			background: #ffffff;
			transform: rotate(-45deg);
		}

		.success-checkmark .check-icon .icon-line {
			height: 5px;
			background-color: #4caf50;
			display: block;
			border-radius: 2px;
			position: absolute;
			z-index: 10;
		}

		.success-checkmark .check-icon .icon-line.line-tip {
			top: 46px;
			left: 14px;
			width: 25px;
			transform: rotate(45deg);
			animation: icon-line-tip 0.75s;
		}

		.success-checkmark .check-icon .icon-line.line-long {
			top: 38px;
			right: 8px;
			width: 47px;
			transform: rotate(-45deg);
			animation: icon-line-long 0.75s;
		}

		.success-checkmark .check-icon .icon-circle {
			top: -4px;
			left: -4px;
			z-index: 10;
			width: 80px;
			height: 80px;
			border-radius: 50%;
			position: absolute;
			box-sizing: content-box;
			border: 4px solid rgba(76, 175, 80, 0.5);
		}

		.success-checkmark .check-icon .icon-fix {
			top: 8px;
			width: 5px;
			left: 26px;
			z-index: 1;
			height: 85px;
			position: absolute;
			transform: rotate(-45deg);
			background-color: #ffffff;
		}

		@keyframes rotate-circle {
			0% {
				transform: rotate(-45deg);
			}

			5% {
				transform: rotate(-45deg);
			}

			12% {
				transform: rotate(-405deg);
			}

			100% {
				transform: rotate(-405deg);
			}
		}

		@keyframes icon-line-tip {
			0% {
				width: 0;
				left: 1px;
				top: 19px;
			}

			54% {
				width: 0;
				left: 1px;
				top: 19px;
			}

			70% {
				width: 50px;
				left: -8px;
				top: 37px;
			}

			84% {
				width: 17px;
				left: 21px;
				top: 48px;
			}

			100% {
				width: 25px;
				left: 14px;
				top: 45px;
			}
		}

		@keyframes icon-line-long {
			0% {
				width: 0;
				right: 46px;
				top: 54px;
			}

			65% {
				width: 0;
				right: 46px;
				top: 54px;
			}

			84% {
				width: 55px;
				right: 0px;
				top: 35px;
			}

			100% {
				width: 47px;
				right: 8px;
				top: 38px;
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>

<body>
	<img class="logo" src="images/shutterstock_22.jpg" />
	<h1 id="title">
		RGD AIRLINES
	</h1>
	<div>
		<ul>
			<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
	<h2>BOOKING SUCCESSFUL</h2>
	<div class="success-checkmark">
		<div class="check-icon">
			<span class="icon-line line-tip"></span>
			<span class="icon-line line-long"></span>
			<div class="icon-circle"></div>
			<div class="icon-fix"></div>
		</div>
	</div>

	<h3>Your payment of &#x20b9; <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['pnr']; ?></strong>. Your tickets have been booked successfully.</h3>
	<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
</body>
<script>
	$("button").click(function() {
		$(".check-icon").hide();
		setTimeout(function() {
			$(".check-icon").show();
		}, 10000);
	});
</script>

</html>