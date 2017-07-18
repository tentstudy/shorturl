<div class="col-xs-5 col-xs-offset-3 col-sm-8 col-sm-offset-2 col-md-5 col-md-offset-3" id="editUrlWrapper">
	<h2 class="page-header text-center">Sửa liên kết</h2>
	<h4>
		<a href="<?php echo $row['url']; ?>"
		   title="<?php echo $row['url']; ?>"
		   target="_blank"
		>
			<?php
				echo $row['url'];
			?>
		</a>
	</h5>
	<h5 <?php if (strpos($msg, "thành công") > -1) {
			echo 'class="alert alert-success text-center"';
			}
			else if ($msg != "") {
				echo 'class="alert alert-danger text-center"';
			}
		 ?>>
		 <?php echo $msg; ?>
	</h5>
	<form action="" method="post" class="txtEdit">
		<div class="input-group">
			<div class="input-group-addon"><?php echo $protocol.$_SERVER['HTTP_HOST']."/"; ?></div>
			<input hidden="true" value="<?php echo $curId; ?>" name="curId">
			<input type="text" class="form-control" name="txtEdited" value="<?php echo $curId; ?>" required>
			<span class="input-group-btn">
				<button class="btn btn-secondary btn-success" type="submit" name="btnXong">Xong</button>
			</span>
	    </div>
		<h5 class="alert alert-warning text-center">Liên kết chỉ gồm: chữ cái, số, dấu gạch ngang, dấu gạch dưới, từ 7 - 30 kí tự.</h5>
	</form>
	<?php require "../blocks/global/box-report.php" ?>
</div>