<?php 
    //require "../lib/dbcon.php";
    $user = $_SESSION['FBID'];
    $sql = 'SELECT * FROM shorturl WHERE user = "'.$user.'"';
    $check = mysqli_query($connection,$sql);
?>
<div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <h1 class="page-header text-center">Danh sách liên kết
        <!-- <small>List</small> -->
    </h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Liên kết</th>
                <th>Đích đến</th>
                <th>Số lượt click</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($check)){
                $url = $protocol.$_SERVER['HTTP_HOST']."/".$row['id'];
            ?>
            <tr class="odd gradeX" align="center">
                <td><a target="_blank" href="<?php echo $url ?>"><?php echo $url; ?></a></td>
                <td>
                    <a target="_blank" href="<?php echo $row['url']; ?>" title="<?php echo $row['url']; ?>" >
                        <?php
                            echo $row['url']; 
                        ?>
                    </a>
                </td>
                <td><?php echo $row['count']; ?></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="<?php echo 'delete-url='.$row['id']; ?>"> Xóa</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo 'edit-url='.$row['id']; ?>">Sửa</a></td>
            </tr>
            <?php } mysqli_close($connection); ?>
        </tbody>
    </table>
    <?php require "../blocks/global/box-report.php" ?>
</div>