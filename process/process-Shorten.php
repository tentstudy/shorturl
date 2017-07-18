<?php 
	if (isset($_POST["inputUrl"])) { //submit form rút gọn liên kết
    	$inputUrl = $_POST["inputUrl"];
    	$arrCheck = explode(".", $inputUrl);
    	if (sizeof($arrCheck) < 2) {
    		$msg = "Hãy nhập vào liên kết";
    	} else {
	    		if (preg_match('#^https?://#i', $inputUrl) !== 1) { //kiểm tra có chứa http hay https chưa (!==1 là chưa chứa)
			    // Starts with http:// or https:// (case insensitive).
			    $inputUrl = "http://$inputUrl"; //thêm cho nó
			}
	    	$user = "0"; //khách vãng lai
	    	if (isset($_SESSION["FBID"])) { //đã đăng nhập
				$user = $_SESSION["FBID"];
			}
			//tìm liên kết đo người đó tạo
			$sql = 'SELECT * FROM shorturl WHERE url = "'.$inputUrl.'" AND user = "'.$user.'"';
			$check = mysqli_query($connection,$sql);
			if (null == ($row = mysqli_fetch_assoc($check))){ //truy vấn không có dữ liệu => không tồn tại liên kết do người đó tạo => thêm liên kết thuộc sở hữu của người đó
				$i = 0;
				while ($i == 0) {
					$random = substr( md5(rand()), 0, 7);
					$sql = 'SELECT * FROM shorturl WHERE id = "'.$random.'"';
					$check = mysqli_query($connection,$sql);
					if (null == ($row = mysqli_fetch_assoc($check))){
						$i = 1;
					}
				}
				$curTime = date('d/m/Y == H:i:s');
				$sql = 'INSERT INTO shorturl (id, url, timeupdate, user) VALUES ("'.$random.'","'.$inputUrl.'","'.$curTime.'","'.$user.'")';
				$check = mysqli_query($connection,$sql);
				$outputUrl =  $protocol .$_SERVER['HTTP_HOST']."/".$random;
				$curId = $random;
			} else { //có dữ liệu => tồn tại id rồi, trả về id thôi
				$outputUrl =  $protocol .$_SERVER['HTTP_HOST']."/".$row['id'];
				$curId = $row['id'];
			}
    	}
    	
    }
?>