<?php 
$pagetype = 'contact'; 
$pagetitle = 'Contact - Axis Automotive Products';
$keywords = 'Road, Hazard, Tire, wheel, cosmetic, curb, roadside, towing, flat, windshield, chip, dent, key, Pothole, warranty';
$description = 'Road hazard plans that protect your tires and wheels, and more.';


include('../includes/header.php');
?>


	<div id="main">
		<h1>Contact Axis Automotive Products</h1>
		
		<?php
		require "formprocess.php";
				
		if (!isset($_GET['from'])) {
		//display email form
		emailForm();
		}

		else {	
		//validation and submit
		validateForm();
		}
		?>
	</div>
</div>
	<?php include('../includes/footer.php'); ?>		





</body>
</html>




