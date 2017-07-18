<?php 
	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		require "lib/dbcon.php";
		$sql = 'SELECT * FROM shorturl WHERE id = "'.$id.'"';
		$check = mysqli_query($connection,$sql);
		echo mysqli_error($connection);
		$row = mysqli_fetch_assoc($check);
		
		if ($row != null){
			$url = $row['url'];
			$count = $row['count'];
			$count++;
			$sql = 'UPDATE shorturl SET count = "'.$count.'" WHERE id = "'.$row['id'].'"';
			mysqli_query($connection,$sql);
		} else {
			$url = "404error";
		}
		mysqli_close($connection);
		header("Location: $url");
	}
?>