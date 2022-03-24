<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Airlines
		</title>
		<style>
			@import url("https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700");
@import url("https://fonts.googleapis.com/css?family=Indie+Flower");
.animation {
  box-shadow: 0 0 10rem 0 #000000;
}




a {
  text-decoration: none;
  color: #FFA500;
}
a:hover {
  text-decoration: underline;
}

.animation {
  position: relative;
  overflow: hidden;
  width: 100%;
  height: 20rem;
  max-width: 55rem;
  background-color: #ffffff;
  border-radius: 10rem;
  animation: 24s linear infinite sky;
  left: 22vw;
  top:7vw;
}
.animation:after {
  position: absolute;
  z-index: 0;
  top: 0;
  left: 0;
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  box-shadow: 0 7rem 30rem -4rem #5aacdc inset;
}
.animation [class^=animation__], .animation [class*=" animation__"] {
  position: absolute;
}
.animation__plane {
  position: absolute;
  z-index: 1;
  top: calc(40% - (62px/2));
  left: calc(50% - (272px/2));
  width: 17rem;
  height: 6.2rem;
  animation: 2s ease-in-out takeOff, 5s ease-in-out infinite alternate flight 2s;
}
.animation__plane--shadow {
  bottom: 1rem;
  left: calc(54% - (8rem/2));
  width: 8rem;
  height: 1rem;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.15);
  animation: 2s ease-in-out takeOffShadow, 5s ease-in-out infinite alternate flightShadow 2s;
}
.animation__cloud--front {
  z-index: 2;
  top: 50%;
  left: 20%;
  width: 8.5rem;
  height: 3rem;
  fill: #cee4e7;
  animation: 4s linear infinite cloudFront;
}
.animation__cloud--middle {
  top: 22%;
  left: 75%;
  width: 6rem;
  height: 3rem;
  fill: #cee4e7;
  animation: 5s linear infinite cloudMiddle;
}
.animation__cloud--back {
  top: 6%;
  left: 34%;
  fill: #cee4e7;
  animation: 8s linear infinite cloudBack;
}
.animation .animation__loader {
  position: absolute;
  left: 0;
  bottom: 3rem;
  width: 100%;
  height: 4px;
  background-color: rgba(0, 0, 0, 0.15);
}
.animation .animation__loader:after {
  position: absolute;
  display: block;
  content: "";
  width: 100%;
  height: 100%;
  background-color: #cee4e7;
  overflow: hidden;
  animation: 1.5s ease-in-out infinite loader;
}

@keyframes loader {
  0% {
    left: -100%;
  }
  100% {
    left: 100%;
  }
}
@keyframes takeOff {
  0% {
    transform: translate(-220%, 110%);
  }
  100% {
    transform: translate(0, 0);
  }
}
@keyframes takeOffShadow {
  0% {
    transform: translate(-440%, 110%);
    opacity: 1;
  }
  100% {
    transform: translate(0, 0);
    opacity: 0.8;
  }
}
@keyframes flight {
  0% {
    transform: translate(0, 0);
  }
  25% {
    transform: translate(0, 10%);
  }
  75% {
    transform: translate(0, -10%);
  }
  100% {
    transform: translate(0, 0);
  }
}
@keyframes flightShadow {
  0% {
    transform: scale(0.8);
    opacity: 0.8;
  }
  25% {
    transform: scale(0.9);
    opacity: 1;
  }
  75% {
    transform: scale(1.1);
    opacity: 0.6;
  }
  100% {
    transform: scale(0.8);
    opacity: 0.8;
  }
}
@keyframes cloudFront {
  0% {
    transform: translate(520%, 0);
  }
  100% {
    transform: translate(-600%, 0);
  }
}
@keyframes cloudMiddle {
  0% {
    transform: translate(230%, 0);
  }
  100% {
    transform: translate(-900%, 0);
  }
}
@keyframes cloudBack {
  0% {
    transform: translate(910%, 0);
  }
  100% {
    transform: translate(-1000%, 0);
  }
}
@keyframes sky {
  0% {
    background-color: #ffffff;
  }
  20% {
    background-color: #ffffff;
  }
  35% {
    background-color: #ffc8bd;
  }
  50% {
    background-color: transparent;
  }
  70% {
    background-color: transparent;
  }
  85% {
    background-color: #ffc8bd;
  }
  100% {
    background-color: #ffffff;
  }
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	</head>
	<body>

		<img class="logo" src="images/takeoff.gif"/> 

		<h1 id="title">
			RGD Airways
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
			
<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>

				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="welcome_text" style="text-align: center;">Welcome to RGD AIRWAYS!</div>
			<div class="animation">
  <svg id="master-artboard" class="animation__cloud--back" viewBox="0 0 45 18" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45px" height="18px"><path d="M 58.88372802734375 825.155517578125 C 16.61685562133789 826.1433715820312 57.925209045410156 781.6769409179688 58.883731842041016 781.3507080078125 C 106.25779724121094 731.152099609375 169.17739868164062 692.9862670898438 226.64694213867188 694.6730346679688 C 227.2968292236328 557.091552734375 389.74322509765625 563.0558471679688 425.166748046875 635.9559326171875 C 534.7359619140625 431.2034912109375 793.6226196289062 599.6361694335938 715.956298828125 741.27392578125 C 820.5570068359375 803.94287109375 789.773193359375 826.9736328125 767.21728515625 825.1555786132812 C 394.85125732421875 825.5911865234375 359.5561218261719 823.805908203125 58.88372802734375 825.155517578125 Z" transform="matrix(0.0573558509349823, 0, 0, 0.056244850158691406, -1.3596858978271484, -29.666284561157227)"/></svg>
<svg id="master-artboard" class="animation__cloud--middle" viewBox="0 0 45 18" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45px" height="18px"><path d="M 58.88372802734375 825.155517578125 C 16.61685562133789 826.1433715820312 57.925209045410156 781.6769409179688 58.883731842041016 781.3507080078125 C 106.25779724121094 731.152099609375 169.17739868164062 692.9862670898438 226.64694213867188 694.6730346679688 C 227.2968292236328 557.091552734375 389.74322509765625 563.0558471679688 425.166748046875 635.9559326171875 C 534.7359619140625 431.2034912109375 793.6226196289062 599.6361694335938 715.956298828125 741.27392578125 C 820.5570068359375 803.94287109375 789.773193359375 826.9736328125 767.21728515625 825.1555786132812 C 394.85125732421875 825.5911865234375 359.5561218261719 823.805908203125 58.88372802734375 825.155517578125 Z" transform="matrix(0.0573558509349823, 0, 0, 0.056244850158691406, -1.3596858978271484, -29.666284561157227)"/></svg>
<div class="animation__plane--shadow"></div>
<svg class="animation__plane" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" data-name="svgi-plane" viewBox="0 0 135.67 49.55"><path fill="#fff" stroke="#464646" stroke-linejoin="round" d="M74.663 45.572h-9.106z" class="svgi-plane--stripe3"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="M.75 26.719h23.309z" class="svgi-plane--stripe1"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="M11.23 31.82h22.654z" class="svgi-plane--stripe2"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="m 53.47597,24.263013 h 68.97869 c 6.17785,0 12.47074,6.758518 12.40872,8.67006 -0.05,1.537903 -5.43763,7.036166 -11.72452,7.056809 l -59.599872,0.201269 c -9.092727,0.03097 -23.597077,-5.992662 -22.178652,-11.794378 1.160348,-4.74789 7.862358,-4.13376 12.115634,-4.13376 z"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="M 45.243501,24.351777 37.946312,0.952937 h 7.185155 c 15.37061,20.184725 28.402518,23.28324 28.402518,23.28324 0,0 -27.106129,-0.178562 -28.290484,0.1156 z"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="m 42.699738,18.984597 h 10.627187 c 5.753726,0 5.364609,7.799958 0,7.799958 H 42.998828 c -4.96749,0 -5.574672,-7.799958 -0.29909,-7.799958 z m 33.139939,16.164502 h 29.656893 c 6.62199,0 6.49395,6.577892 0,6.577892 H 75.940707 c -8.658596,0 -8.499549,-6.35598 -0.10103,-6.577892 z m 9.693907,6.664592 h 8.86866 c 4.439332,0 4.309293,7.066099 0,7.066099 h -8.756626 z"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="m 85.55159,42.447431 c 0,0 -5.282585,0.456211 -6.372912,3.263659 1.335401,2.378073 6.397919,2.528767 6.397919,2.528767 z"/><path fill="#fff" stroke="#464646" stroke-linejoin="round" stroke-width="1" d="m 133.68903,31.07417 h -7.01411 c -1.26938,0 -2.89286,-1.005314 -3.21496,-3.216179 h 7.50225 z"/><ellipse cx="113.564" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="107.56219" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="101.56039" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="95.558594" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="89.556793" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="83.554993" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="77.553192" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="71.551392" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/><ellipse cx="65.549591" cy="29.448534" fill="#fff" stroke="#464646" stroke-linecap="square" stroke-linejoin="round" stroke-width="1" rx="1.3354006" ry="1.6400863"/></svg>
<svg id="master-artboard" class="animation__cloud--front" viewBox="0 0 45 18" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45px" height="18px"><path d="M 58.88372802734375 825.155517578125 C 16.61685562133789 826.1433715820312 57.925209045410156 781.6769409179688 58.883731842041016 781.3507080078125 C 106.25779724121094 731.152099609375 169.17739868164062 692.9862670898438 226.64694213867188 694.6730346679688 C 227.2968292236328 557.091552734375 389.74322509765625 563.0558471679688 425.166748046875 635.9559326171875 C 534.7359619140625 431.2034912109375 793.6226196289062 599.6361694335938 715.956298828125 741.27392578125 C 820.5570068359375 803.94287109375 789.773193359375 826.9736328125 767.21728515625 825.1555786132812 C 394.85125732421875 825.5911865234375 359.5561218261719 823.805908203125 58.88372802734375 825.155517578125 Z" transform="matrix(0.0573558509349823, 0, 0, 0.056244850158691406, -1.3596858978271484, -29.666284561157227)"/></svg>
        <div class="animation__loader"></div>
 </div>


			<img src="images/home.webp" width=100%>
			
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
</html>