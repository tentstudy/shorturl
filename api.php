<?php
	if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
		isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}
    require_once './lib/dbcon.php';

    echo $_POST['url'];
    if (isset($_POST['url']) && filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
        $inputUrl = $_POST['url'];
        $sql = 'SELECT * FROM shorturl WHERE url = "'.$inputUrl.'" AND user = "0"';
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
            $sql = 'INSERT INTO shorturl (id, url, timeupdate, user) VALUES ("'.$random.'","'.$inputUrl.'","'.$curTime.'","0")';
            $check = mysqli_query($connection,$sql);
            $outputUrl =  $protocol .$_SERVER['HTTP_HOST']."/".$random;
        } else { //có dữ liệu => tồn tại id rồi, trả về id thôi
            $outputUrl =  $protocol .$_SERVER['HTTP_HOST']."/".$row['id'];
        }
        header("Content-type:application/json");
        echo json_encode(array('success' => true, 'url' => $outputUrl));
    } else {
      if (!isset($_POST['url'])) $error = "Please send with url";
      else $error = "invalid url";
        header("Content-type:application/json");
        echo json_encode(array('success' => false, 'error' => $error));
    }