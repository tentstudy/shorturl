<?php 
if (isset($_GET['id']) && $p == "edit-url") {
    $curId = $_GET['id'];
    $curId = substr($curId , 14, strlen($curId));
    $sql = 'SELECT * FROM shorturl WHERE id = "'.$curId.'"';
    $check = mysqli_query($connection,$sql);
    if (null == ($row = mysqli_fetch_assoc($check))){
        header("Location: ./");
    }
}
?>