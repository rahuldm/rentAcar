

<!DOCTYPE html>

<html>

<head>

	<title></title>

	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="css1.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

	<style>
		.abc {
			background: #363636;
		}

		.map h1 {
			color: #ffffff;
			font-family: "Lato", sans-serif;
			font-size: 18px;
			text-transform: capitalize;
			font-weight: 800;
			text-transform: uppercase;
			padding: 0em 0em 2em 0em;
		}

		.map {
			position: relative;
			text-align: center;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			padding: 3em;
			margin-left: auto;
			width: 1120px;
		}
	</style>
</head>

<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<img src="images/logo.jpg" alt="rentacar" class="ar">

			</div>
			<div id="menu">
				<ul>
					<li><a href="../index.php" accesskey="1" title="">Homepage</a></li>
					<li><a href="../about us/about.php" accesskey="3" title="">About us</a></li>
					<li><a href="../gallery/gallery.php" accesskey="4" title="">GALLERY</a></li>
					<li class="current_page_item"><a href="#" accesskey="5" title="">BOOk ride</a></li>

				</ul>
			</div>
		</div>

	</div>
	<div id="head">

		<h1><b>|</b> &nbsp; Book your Ride</h1>
	</div>



	<div id="header-featured">

		<div id="page-wrapper">
			<form method="POST" action="insert.php" class="ccform">
				<div id="extra2" class="contain">
					<div class="title">
						<h2><b>Book Your Car</b></h2>
					</div>
					<div class="tbox1">
						<div class="padding-bottom">
							<label id="heading">Name</label>
							<input class="inputfield" type="text" placeholder="Name" required name="username">
						</div>
						<div class="padding-bottom">
							<label>Pick up location</label>
							<input class="inputfield" type="text" placeholder="airpot or anywhere" required
								name="pickupl">
						</div>
						<div>
							<label>Pick up date</label>
							<input class="inputfield" type="date" placeholder="dd/mm/yy" required name="pickupd">
							</label>
						</div>
					</div>
					<div class="tbox2">
						<div class="padding-bottom">
							<label>drop-off location</label>
							<input class="inputfield" type="text" placeholder="Airport or anywhere" required name="dropoffl">
						</div>
						<div class="padding-bottom">
							<label>drop off date</label>
							<input class="inputfield" type="date" placeholder="dd/mm/yy" required name="dropoffd">
						</div>
						<div>
							<label>Car name</label>
							<input class="inputfield" type="text" placeholder="Car name" required name="carname">
						</div>
					</div>
				</div>
				<div class="butt">
					<input name="submit" type="submit" value="submit" id="button" />
				</div>
			</form>
		</div>
		</div>



		<div class="abc">
			<div class="map">
				<h1>Find us HERE</h1>
				<div id="googleMap" style="width:100%;height:300px;"></div>


			</div>

		</div>
		<div id="footer">
			<div class="container">
				<div class="fbox1">
					<span class="icon icon-map-marker"></span>
					<div class="pan2">

						<img src="11.png" />

					</div>
					<span>sibbari
						<br />sonadanga.</span>
				</div>
				<div class="fbox1">
					<span class="icon icon-phone"></span>
					<div class="pan2">

						<img src="12.png" />

					</div>

					<span>
						Telephone: +91 9869143542
					</span>
				</div>
				<div class="fbox1">
					<span class="icon icon-envelope"></span>
					<div class="pan2">

						<img src="13.png" />

					</div>
					<span>rentacar@gmail.com</span>
				</div>
			</div>
		</div>
		<div id="copyright">
			<p>&copy; All rights reserved @rahul | </p>

		</div>


		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<script>


			function initialize() {

				var mapOptions = {
					zoom: 14,
					scrollwheel: false,
					center: new google.maps.LatLng(22.822997774208023, 89.55207234758218)
				};

				var map = new google.maps.Map(document.getElementById('googleMap'),
					mapOptions);

				var marker = new google.maps.Marker({
					position: map.getCenter(),
					animation: google.maps.Animation.BOUNCE,
					icon: 'map-marker.png',
					map: map
				});

			}

			google.maps.event.addDomListener(window, 'load', initialize);


		</script>

</body>

</html>




