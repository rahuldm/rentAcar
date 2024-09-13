<?php
	require_once('../db.php');
?>

<!DOCTYPE html>

<html>
<head>

<title></title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div id="header-wrapper">
  <div id="header" class="container">
    <div id="logo">
	<img src= "images/logo.jpg" alt = "RentAcar" class="ar">
      
    </div>
    <div id="menu">
      <ul>
        <li><a href="../index.php" accesskey="1" title="">Homepage</a></li>
        <li><a href="../about us/about.php" accesskey="3" title="">About us</a></li>
        <li class="current_page_item"><a href="#" accesskey="4" title="">GALLERY</a></li>
        <li><a href="../contact us/contact.php" accesskey="5" title="">BOOk ride</a></li>
	
      </ul>
    </div>
  </div>

</div>
<div id="head">

	<h1><b>|</b> &nbsp; Meet Our Fleet</h1>
</div>

<div id="header-featured"> </div>

<div id="page-wrapper">
	<div id="extra2" class="contain">
		
		<div class="tbox">
		<?php
				$sql = "SELECT * FROM gallerycar";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					//   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
					?>
			<div class="padding-bottom">
			<h2><?php echo $row["company"]. " " .$row["name"];?></h2>
						<img src="<?php echo $row['image'];?>" alt="" />
				
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
			<br />sonadanga</span>
		</div>
		<div class="fbox1">
			<span class="icon icon-phone"></span>
			<div class="pan2">
  		 
       		 <img src="12.png" />
      		 
     		 </div>
   		 
			<span>
				Telephone: +88 01950970633
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


</body>
</html>







