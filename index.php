<?php
	if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
		isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}
    session_start();
    require "lib/dbcon.php"; //mở kết nối csdl
    $msg = ""; //lỗi
    require "process/process-Edit.php";
    require "process/process-Shorten.php";
    mysqli_close($connection); //đóng kết nối csdl
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="fb:app_id" content="1878792532378003" />
    <meta property="og:site_name" content="short.tentstudy.xyz" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ShortURL - TentStudy" />
    <meta property="og:description" content="ShortURL - TentStudy" />
    <meta property="og:url" content="https://short.tentstudy.xyz/" />
    <meta property="og:image" content="https://tentstudy.xyz/images/banner_share_fb_short_url.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:locale" content="vi_VN" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ShortURL - TentStudy</title>
    <link rel="shortcut icon" type="image/png" href="https://tentstudy.xyz/images/icons/favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 	
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-10" id="top-bar">
                <!-- Large button group -->
                <?php require "blocks/home/btn-top-right.php" ?>
            </div>
        </div> <!-- row -->
        <div class="row main">
            <div class="col-md-6 col-md-offset-3">
                <div class="text-center">
                    <h1><a href="./"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></a> RÚT GỌN LIÊN KẾT</h1>
                    <?php require "blocks/home/btn-login.php" ?>
                    <!-- <h2><span class="label label-info">Nguyễn Đăng Dũng - 2017</span></h2> -->
                    <h2></h2>
                    <br>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" name="inputUrl" placeholder="Nhập đường dẫn vào đây nài..." required autofocus>
                            <span class="input-group-btn">
                                <button class="btn btn-secondary btn-primary" type="submit" name="btnRG">Rút gọn</button>
                            </span>
                        </div>
                    </form>
                    <br>
                    <?php 
                        if (strpos($msg, "nhập vào") > -1) {
                            echo '<h5 class="alert alert-danger text-center">'.$msg.'</h5>';
                        }
                    ?>
                    <div class="input-group center-block">
                        <label id="outputUrl"><?php if (isset($outputUrl)) echo '<h3><a target="_blank" href="'.$outputUrl.'">'.$outputUrl.'</a></h3>'; ?></label>
                        <?php require "blocks/home/btn-edit.php" ?>
                    </div>
                </div><!-- /form-wapper -->
                <?php require "blocks/global/box-report.php" ?>
            </div> <!-- col-md-4 col-md-offset-4 -->

        </div> <!-- row -->
    </div><!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>
