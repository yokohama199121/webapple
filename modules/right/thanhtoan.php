<?php
	if(isset($_POST['login'])){
		$c_email=$_POST['email'];
		$c_pass=$_POST['password'];
		$sel_c="select * from customers where customer_pass='$c_pass' and customer_email='$c_email'";
		$run_login=mysql_query($sel_c);
		$check_login=mysql_num_rows($run_login);
		if($check_login==0){
			echo '<script>alert("password or email incorrect")</script>';
		}else{
			$_SESSION['dangnhap']=$c_email;
			header('location:index.php?xem=cart');
		}
	}
?>

<div class="content_right" style="width:100%;">
	<h1 align="center"><p class="text-primary text-center col-md-12 bg-success">Đăng nhập</p></h1>

<form class="form-horizontal" action="" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
	<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <a href="index.php?xem=dangky">Đăng ký</a>
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

</div>
