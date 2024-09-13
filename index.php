<?php
	session_start();
	require_once('db.php');
?>
<!DOCTYPE html>

<html>

<head>

	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
	<link href="css.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>


	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<img src="images/logo.jpg" alt="rentacar" class="ar">

			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
					<li><a href="about us/about.php" accesskey="3" title="">About us</a></li>
					<li><a href="gallery/gallery.php" accesskey="4" title="">GALLERY</a></li>
					<li><a href="contact us/contact.php" accesskey="5" title="">BOOk ride</a></li>
					<?php if(!isset($_SESSION['user'])){?>
							<li><a href="login.php" accesskey="5" title="">log in/Sign Up</a></li>
					<?php }
						else{ 
							echo '<li><a href="logout.php" accesskey="5" title="">Logout</a></li>';
						}?>

				</ul>
			</div>
		</div>
	</div>


	<div id="header-featured">
		<div class="images">
			<img class="mySlides" src="1.jpg" style="width:100%">
			<img class="mySlides" src="2.jpg" style="width:100%">
			<img class="mySlides" src="3.jpg" style="width:100%">
			<img class="mySlides" src="4.jpg" style="width:100%">
			<img class="mySlides" src="5.jpg" style="width:100%">
		</div>

		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) { myIndex = 1 }
				x[myIndex - 1].style.display = "block";
				setTimeout(carousel, 2500);
			}
		</script>
	</div>

	<div id="wrapper">

		<div id="extra1" class="container">
			<div class="title">
				<h2>Welcome to our website</h2>
			</div>
			<p>We offers you cars for rental as well as for buying. Cars can be bought from our website. We have
				ties with almost all the car companies in the world. Some of the honourable mentions are Mercedes, BMW,
				Nissan, Audi, Bently, Aston Martin and many more. </p>

			<a href="services/services.html" class="button">Learn More</a>
		</div>
		<div id="featured-wrapper">
			<div id="featured" class="container">

				<div class="column1">
					<img src="images/GG.jpg" alt="CAR" class="az">
				</div>


				<div class="column2">
					<div class="title">
						<h2>WHAT <b>WE DO?<b></h2>
					</div>
					<p>What we basically do is ,we help the customers to buy they desire. You've come across a cars that
						you've been wanting to buy for a while
						but always face some kind of complications? Too much transportaion charge? Dealer is asking for
						too much commission? Too much paper work?
						We've got this covered for you.<br /><br>
						We're different because we provide the best experience which other car sites fail to provide, We
						have our branches all over the world. And we provide
						free Servicing for next 5 years after buying the car from us*.
					</p>
				</div>

			</div>
		</div>




		<div id="page-wrapper">
			<div id="extra3" class="container">
				<div class="title">
					<h2>Get our <b>best offers<b></h2>
				</div>
				<div class="tboxa">
					<div class="padding-bottom">
						<h2>Featured Luxury Cars</h2>
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae nihil reiciendis eos iusto quia tempora nobis eaque, delectus molestias odit assumenda, illo aliquid labore tempore. Dolore, delectus sequi. Dolore officiis iusto sint vel nemo. Maxime consectetur, iure sunt explicabo fugit similique qui neque in quasi velit unde perspiciatis hic quis.
						</p>
					</div>
					<div class="padding-bottom">
						<h2>Insurance Included</h2>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugit assumenda similique accusamus nobis libero, modi, recusandae architecto eaque vero nam. Atque in eligendi, praesentium ullam deleniti aliquam dolores quae a accusantium necessitatibus quibusdam iure unde ducimus ab optio iste nam impedit, dignissimos tenetur quis voluptatibus id illo! Expedita, in!
						</p>
					</div>

					<h2>Available 12 640 Cars</h2>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugit assumenda similique accusamus nobis libero, modi, recusandae architecto eaque vero nam. Atque in eligendi, praesentium ullam deleniti aliquam dolores quae a accusantium necessitatibus quibusdam iure unde ducimus ab optio iste nam impedit, dignissimos tenetur quis voluptatibus id illo! Expedita, in!

					</p>


				</div>
				<div class="tboxc">
					<div class="padding-bottom">

						<img src="images/offer.jpg" alt="car" />

					</div>

				</div>
				<div class="tboxb">
					<div class="padding-bottom">
						<h2>Any Locations Rent</h2>
						Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit praesentium saepe magni officia quam assumenda eum, voluptate, eius laudantium, quia cupiditate provident commodi omnis ratione quasi tempora natus sapiente sint incidunt dicta illo. Dolor sunt itaque blanditiis magni, perspiciatis atque nesciunt cupiditate corrupti incidunt in inventore aliquam praesentium est quidem.
						</p>
					</div>
					<div class="padding-bottom">
						<h2>Cleaning Included</h2>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus rerum repellat quam quas molestias, id in ratione distinctio excepturi ea deserunt? Adipisci ut molestias culpa, totam voluptates numquam iusto, provident dolorum voluptatum veniam cumque perferendis neque commodi, inventore porro deleniti explicabo nisi non excepturi corporis modi dicta at nulla.
						</p>
					</div>

					<h2>Online 24 / 7 Support</h2>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, facilis nobis aliquam minus ducimus voluptas natus, perferendis similique accusamus veritatis sunt ex ea autem repellendus nostrum? Ad laudantium omnis est ducimus officiis nobis reprehenderit rerum deserunt debitis? Adipisci, dolorum cumque est facilis distinctio mollitia repellendus delectus voluptates dignissimos molestiae. Odio.
					V-6<br />
					</p>

				</div>
			</div>
		</div>



		<div id="extra" class="container">
			<h2>about us</h2>
			<span>Qutrum id, congue, and nibh</span>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo maiores voluptates nulla perspiciatis ut iusto, maxime magnam ex magni suscipit quibusdam accusamus non debitis a odit provident nesciunt veritatis expedita reiciendis. Ducimus officia nobis alias cupiditate blanditiis, quae magnam unde repellendus odit amet accusantium ipsam nisi id laborum assumenda voluptate neque, dolore saepe iste error quo. Molestiae quae eligendi illo fugit sint, rerum animi dignissimos dolor distinctio consequuntur consectetur deserunt reprehenderit, fugiat accusamus cum optio incidunt, quisquam sit praesentium nemo! Officiis, hic consectetur tenetur vitae odio labore cum molestiae aspernatur expedita voluptatibus modi, accusamus amet architecto quos repellat atque dolores!.</p>

			<a href="about us/about.html" class="button">Learn More</a>
		</div>


	</div>

	<div id="page-wrapper">
		<div id="extra2" class="contain">
			<div class="title">
				<h2>meet our fleet</h2>
			</div>
			
			<div class="tbox">
			<?php
				$sql = "SELECT * FROM car";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
				
					?>
					<div class="padding-bottom">
						<h2><?php echo $row["company"]. " " .$row["name"];?></h2>
						<img src="<?php echo $row['image'];?>" alt="" />
						<p>Type-<?php echo $row["type"];?> | Top Speed-<?php echo $row["top_speed"];?>
						<br>
						<?php echo $row["hp"];?>-hp supercharged </p>
						<a href="contact us/contact.php" class="button">book now</a>
					</div>
			<?php
					}
				} else {
					echo "0 results";
				  }
			?>
				
	
			</div>
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
					<br />sonadanga </span>
			</div>
			<div class="fbox1">
				<span class="icon icon-phone"></span>
				<div class="pan2">

					<img src="12.png" />

				</div>

				<span>
					Telephone: +8801905436373
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
		<p>&copy;  All rights reserved @rahul|
	</div>

</body>

</html>