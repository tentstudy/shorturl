<div class="col-xs-5 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-3" id="editUrlWrapper">
	<h2 class="page-header text-center">Xóa liên kết</h2>
	<h4>
		<a href="<?php echo $row['url']; ?>"
		   title="<?php echo $row['url']; ?>"
		   target="_blank"
		>
			<?php
				echo $row['url']; 
			?>
		</a>
	</h4>
	<h5><a href="<?php echo $protocol.$_SERVER['HTTP_HOST']."/".$row['id']; ?>"><?php echo $protocol.$_SERVER['HTTP_HOST']."/".$row['id']; ?></a>
	</h5>
	<form action="" method="post" class="txtEdit">
		<h5 class="alert alert-danger text-center">Bạn chuẩn bị xóa liên kết này!</h5>
		<div class="input-group" style="margin: auto;">
			<input type="text" hidden="true" value="<?php echo $row['id']; ?>" name = "curId">
			<button class="btn btn-secondary btn-default" type="submit" name="btnOK">OK</button> 
			<button class="btn btn-secondary btn-primary" name="btnCANCEL">CANCEL</button>
	    </div>
		
	</form>
	<br>
	<?php require "../blocks/global/box-report.php" ?>
</div>