 		<?php
	$koneksi = mysqli_connect("localhost","root","","elektronik");
	// cek koneksi
	if (!$koneksi){
	  die("Error koneksi: " . mysqli_connect_errno());
	}
	?>
