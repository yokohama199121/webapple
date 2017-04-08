
    <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form action="logout.php" method="post">
            <ul class="nav navbar-nav">
              <li><a href="index.php?xem=trangchu"><span class="glyphicon glyphicon-home"></span> Trang chủ</a></li>
              <li><a href="index.php?xem=huongdan"><span class="glyphicon glyphicon-book"></span> Hướng dẫn</a></li>
                <li><a href="index.php?xem=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
                <?php
            	if(isset($_SESSION['dangnhap'])){
                  echo '<li class="dropdown">';
                  echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['dangnhap'].'<span class="caret"></span></a>';
                  echo '<ul class="dropdown-menu">';
                  echo '<li class="text-center"><input class="btn btn-default" type="submit" href="#" name="logout" value="Đăng xuất"></li>';
                  echo '</ul>';
                echo '</li>';
            	}
              else {
                echo '<li><a href="index.php?xem=thanhtoan"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>';
                echo '<li><a href="index.php?xem=dangky"><span class="glyphicon glyphicon-pencil"></span> Đăng ký</a></li>';
              }
             ?>

            </ul>
            </form>
            <ul class="nav navbar-nav navbar-right navbar-s">
              <form action="index.php?xem=ketqua" method="post">
                <li class="col-md-7"><input class="form-control" type="text" name="search_query"/></li>
                <li class="col-md-2"><input class="btn btn-default" type="submit" name="search" value="Tìm kiếm" /></li>
              </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
