<?php require('config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Code by Peter Veerman -->

<html>

<head>
	<!-- Website Title -->
	<title>Seating Chart Program</title>
	
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" media="all" href="main.css" />
	
	<!-- Description -->
	<meta name="description" content="The Arcadia Film Festival will be hosted by the Arcaida Film Club." />
	
	<!-- Keywords -->
	<meta name="keywords" content="film festival, indie films, independent films, arcadia high school, film club" />
	
	<!-- Author -->
	<meta name="author" content="Peter Veerman" />
	
	<!-- Character Set -->
	<meta charset="UTF-8" />
	
	<!-- JQuery Reference (Don't worry about this) -->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" ></script>-->
</head>



<body>
<div id="fb-root"></div>

<!-- Content -->
<div id="wrapper">
<span id="about"></span>
	<!-- Make Major Changes Inside Here!!! -->
	<div class="container">
		<h2>About (Edit)</h2>
		<p>
		<?php 

		$result = $conn->query("SELECT * FROM `users` WHERE `users_id`='1'");
		
		if($result)
		{
			$info = $result->fetch_array();
			echo "Username: " . $info['username'];
		}
		?>
		</p>
		<p>
		</p>
		<p>
		1st: <b>$240</b><br />
		2nd: <b>$120</b><br />
		3rd: <b>$60</b>
		</p>
		<p>
		Every submission will recieve a <b>FREE</b> AMC movie ticket.
		</p>
		<p>
		The goal of the Arcadia Film Festival is to grow a culture and a community of film makers. We believe that the Film Festival will give students' work exposure and allow them to learn from the feedback of video production professionals.
		</p>
		<p>
		The Film Festival will take place <b>May 20th</b>. Submissions will be due by <b>May 13th</b>. Submission fees are <b>$10</b> per submission and can be paid at the ASB office at a TBD date or paid at the festival.
		</p>
		<p>
		The Film Festival is being hosted in collaboration with Film Club, Designation and Art Club. All "monetary" prizes are in the form of Amazon gift cards.
		</p>
	</div>
</div>
<!-- End Of Content -->

<script src="./scripts/js/scripts.min.js" type="text/javascript" charset="utf-8" async defer></script>

</body>

</html>