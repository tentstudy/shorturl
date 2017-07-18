<?php 
if (isset($_GET['id']) && $p == "delete-url") {
    $curId = $_GET['id'];
    $curId = substr($curId , 16, strlen($curId));
    $sql = 'SELECT * FROM shorturl WHERE id = "'.$curId.'"';
    $check = mysqli_query($connection,$sql);
    if (null == ($row = mysqli_fetch_assoc($check))){
        header("Location: ./");
    }
}
if (isset($_POST['btnOK'])) {
	echo "bam nut ok";
	$sql = 'DELETE FROM shorturl WHERE id = "'.$_POST['curId'].'"';
    $check = mysqli_query($connection,$sql);
    header("Location: ./list-url");
} else if (isset($_POST['btnCANCEL'])) {
	header("Location: ./list-url");
}
?>