<?php 
	if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
		isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$protocol = 'https://';
	} else {
		$protocol = 'http://';
	}
    session_start();
    $p = "";
    if (!isset($_SESSION["FBID"])) {
        header("Location: ../");
    }
    $title = "";
    $msg = "";
    require "../lib/dbcon.php";
    if (isset($_GET["p"])) {
        $p = $_GET["p"];
        switch ($p) {
            case "list-url":
                $title = "Danh sách liên kết";
                break;
            case "profile":
                $title = "Thông tin";
                break;
            case "edit-url":
                require "process/pre-process-Edit.php";
                require "../process/process-Edit.php";
                $title = "Sửa liên kết";
                break;
            case "delete-url":
                require "process/process-Delete.php";
                $title = "Xóa liên kết";
                break;   
            default:
                $title = "Stlink";
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title><?php echo $title.' - '.$_SESSION["FULLNAME"];?></title>
    <link rel="shortcut icon" type="image/png" href="https://tentstudy.xyz/images/icons/favicon.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div id="wrapper">
        <?php require "blocks/nav-bar.php" ?><!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <?php 
                        switch ($p) {
                            case "about":
                                require "pages/about.php";
                                break;
                            case "list-url":
                                require "pages/list-url.php";
                                break;
                            case "profile":
                                require "pages/profile.php";
                                break;
                            case "edit-url":
                                require "pages/edit-url.php";
                                break;
                            case "delete-url":
                                require "pages/delete-url.php";
                                break;
                            default:
                                require "pages/about.php";
                                break;
                        }
                    ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="js/js.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

</body>

</html>
