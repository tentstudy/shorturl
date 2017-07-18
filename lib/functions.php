<?php 
	function kiemTraQuyenSoHuu($connection, $uid, $idurl) {
		$sql = 'SELECT * FROM shorturl WHERE id = "'.$idurl.'"';
		$check = mysqli_query($connection,$sql);
		$row = mysqli_fetch_assoc($check);
		if ($row['user'] == $uid) {
			return 1;
		}
		return 0;
	}
?>
