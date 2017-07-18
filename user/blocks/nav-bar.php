<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../">ShortURL - TentStudy</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["FULLNAME"]; ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li> -->
                <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li> -->
                <li class="divider"></li>
                <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="../"><i class="fa fa-home fa-fw"></i> Trang chủ</a><!-- <span class="fa arrow"></span></a> -->
                    <!-- <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Thông tin chi tiết</a>
                        </li>
                        <li>
                            <a href="#">Đối mật khẩu</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="profile"><i class="fa fa-user fa-fw"></i> Thông tin cá nhân</a><!-- <span class="fa arrow"></span></a> -->
                    <!-- <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Thông tin chi tiết</a>
                        </li>
                        <li>
                            <a href="#">Đối mật khẩu</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="list-url"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý liên kết</a><!-- <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Danh sách liên kết</a>
                        </li>
                        <li>
                            <a href="#">Add Category</a>
                        </li>
                    </ul> -->
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="about"><i class="fa fa-info-circle fa-fw"></i> Về tác giả</a>
                </li>
                <!-- <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List Product</a>
                        </li>
                        <li>
                            <a href="#">Add Product</a>
                        </li>
                    </ul>
                     /.nav-second-level 
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List User</a>
                        </li>
                        <li>
                            <a href="#">Add User</a>
                        </li>
                    </ul>
                     /.nav-second-level 
                </li> -->
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>