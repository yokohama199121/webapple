
<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="banhang";
	$con=mysql_connect($tenmaychu,$tentaikhoan,$pass,$csdl)or die('cant connect');
	mysql_select_db($csdl,$con);
	mysql_query("set names 'utf8'");
	$sgl1="select * from loai";
	$run_loai=mysql_query($sgl1);
?>

					<div class="list-group">
						<a href="#" class="list-group-item disabled">Menu</a>
						<?php
							while($dong=mysql_fetch_array($run_loai)){
						?>
							<a class="list-group-item" href="index.php?xem=loai&id=<?php echo $dong['loai_id']?>"><?php echo $dong['tenloai'] ?></a>
						<?php
					 	}
						?>
				</div>
