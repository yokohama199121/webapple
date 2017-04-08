<?php
	if(isset($_POST['register'])){
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_pass=$_POST['c_pass'];

		//$c_country=$_POST['c_country'];
		//$c_city=$_POST['c_city'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];
		//$c_image=$_FILES['c_image']['name'];
		//$c_image_tmp=$_FILES['c_image']['tmp_name'];
		//move_uploaded_file($c_image_tmp,"modules/right/customer_images/$c_image");
		$insert_c="insert into customers(customer_name,customer_email,customer_pass,customer_country,customer_city,customer_image,customer_contact,customer_address) values('$c_name','$c_email','$c_pass','','','','$c_contact','$c_address')";
		$run_c=mysql_query($insert_c);
		if($run_c){
			echo '<script>alert("insert thanh cong")</script>';

		}
	}
?>

<div class="content_right" style="width:100%;">
<h1 align="center"><p class="text-primary text-center col-md-12 bg-success">Đăng ký</p></h1>


		<form class="form-horizontal" action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Họ tên: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="c_name" id="inputEmail3" placeholder="Họ tên">
    </div>
  </div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email: </label>
		<div class="col-sm-10">
			<input type="email" class="form-control" name="c_email" id="inputEmail3" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Password: </label>
		<div class="col-sm-10">
			<input type="password" class="form-control" name="c_pass" id="inputPassword3" placeholder="Password">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Số điện thoại: </label>
		<div class="col-sm-10">
			<input type="number" class="form-control" name="c_contact" id="inputEmail3" placeholder="Số điện thoại">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ: </label>
		<div class="col-sm-10">
			<textarea type="text" class="form-control" name="c_address" id="inputEmail3" placeholder="Địa chỉ"></textarea>
		</div>
	</div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="register" class="btn btn-default">Đăng kí</button>
    </div>
  </div>
</form>
</div>
