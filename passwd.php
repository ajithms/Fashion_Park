<?php
	include('header.php');
	if(isset($_POST['new'])) {
		extract($_POST);
		$sql = "update login set password='".$_POST['new']."'";
		$res = mysqli_query($db, "update login set password='".$new."' where name='".$_SESSION['user']."';");
			
		if($db->affected_rows == 1) header('location:home.php?change=yes');
			//echo "<p class='lead' style='font-size: 30px'>Password updated successfully!</p>";
	}
	?>
