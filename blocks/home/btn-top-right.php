<?php if (isset($_SESSION["FBID"])){ ?>
	<div class="btn-group largebtn">
	  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Chào <?php echo $_SESSION["FULLNAME"]; ?> <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a href="user/"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Trang cá nhân</a></li>
	    <li><a href="user/list-url"><span class="glyphicon glyphicon-link" aria-hidden="true"></span> Quản lý liên kết</a></li>
	    <li><a class="btn-warning" href="./logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Đăng xuất</a></li>
	  </ul>
	</div>
<?php } ?>