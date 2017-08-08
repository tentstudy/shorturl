<?php 
if (isset($_POST["btnXong"])) { //submit form sửa liên kết
	$txtEdited =  $_POST["txtEdited"];
	$txtCurId =  $_POST["curId"];
	if ($txtEdited != $txtCurId) { //kiểm tra liên kết tùy chỉnh có khác liên kết cũ không
		if (preg_replace("/[^A-Za-z0-9_-]/", '', $txtEdited) == $txtEdited && strlen($txtEdited) >= 7 && strlen($txtEdited) <= 30) {   
		//kiểm tra xem liên kết tùy chỉnh có chứa kí tự không hợp lệ hay không và chiều dài có thỏa mãn hay không
			$curTime = date('d/m/Y == H:i:s');
			$sql = 'UPDATE shorturl SET id = "'.$txtEdited.'", timeupdate = "'.$curTime.'" WHERE id = "'.$txtCurId.'" AND user = "' . $_SESSION['FBID'] . '"';
			$check = mysqli_query($connection,$sql);
			if (mysqli_error($connection) == null) { //không có lỗi => thay đổi liên kết thành công
				$msg = "Tùy chình liên kết thành công.";
				$curId = $txtEdited;
			} else { //có lỗi => trùng id
				$msg = "Đã tồn tại liên kết.";
				$curId = $txtCurId;	
			}				
		} else { //định dạng liên kết không hợp lệ
			$msg = "Xuất hiện lỗi, kiểm tra lại định dạng.";
			$curId = $txtCurId;
		}
	} else {  //liên kết không thay đổi
		$curId = $txtCurId;
	}
	$outputUrl =  $protocol . $_SERVER['HTTP_HOST']. "/" .$curId;
} 
?>