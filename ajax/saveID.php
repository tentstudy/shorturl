<?php
    if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
        session_start();
        if (isset($_POST['id'])) {
            $_SESSION['FBID'] = $_POST['id'];
            $_SESSION['FULLNAME'] = $_POST['name'];
            echo true;
        } else {
            echo false;
        }
    } else {
		header("Location: ../");
	}