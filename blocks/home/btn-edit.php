<?php if (isset($outputUrl)) { ?>
	<br>
	<button class="btn btn-default" onclick="copyToClipboard('#outputUrl')">Copy</button>
	<?php if (isset($_SESSION["FBID"])){ ?>
		<button class="btn btn-default" onclick="showEditBox()">Edit</button>
	<?php } ?>
	<h5 <?php if (strpos($msg, "thành công") > -1) {
			echo 'class="alert alert-success text-center"';
			}
			else if ($msg != "") {
				echo 'class="alert alert-danger text-center"';
			}
		 ?>>
		 <?php echo $msg; ?>
	</h5>
	<br>
	<form action="" method="post" class="txtEdit" style="display: none;">
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
<?php } ?>