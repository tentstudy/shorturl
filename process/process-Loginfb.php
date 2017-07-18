<?php 
	if (isset($_SESSION['FBID'])) {
		$sql = 'SELECT * FROM Users WHERE Fuid = "'.$_SESSION['FBID'].'"';
		$check = mysqli_query($connection,$sql);
		$check = mysqli_num_rows($check);
		if (empty($check)){ //chưa tồn tại người dùng
			echo "Chưa tồn tại";
			$sql = 'INSERT INTO User (Fuid, Ffname) VALUES ("'.$_SESSION['FBID'].'","'.$_SESSION['FULLNAME'].'")';
			mysqli_query($connection,$sql);
		} else {   // If Returned user . update the user record		
			$sql = 'UPDATE Users SET Ffname="'.$_SESSION['FULLNAME'].'" where Fuid="'.$_SESSION['FBID'].'"';
			mysqli_query($connection,$sql);
			echo "Đã tồn tại";
		}
	}
?>