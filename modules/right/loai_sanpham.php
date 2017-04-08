<?php
	$sql="select tenloai,product_image,product_title,product_price,product_id from products,loai where products.product_cat=loai.loai_id and product_cat='$_GET[id]' ";
	$sql_tenloai="select tenloai from loai where loai_id='$_GET[id]'   ";
	$tenloai=mysql_query($sql_tenloai);
	$dong_tenloai=mysql_fetch_array($tenloai);
	$loai=mysql_query($sql);

?>
<p class="text-primary text-center col-md-12 bg-success"><?php echo $dong_tenloai['tenloai'] ?></p>
<div class="row">

	<?php
	while($dong=mysql_fetch_array($loai)){
	?>
             <div class="col-md-4 text-center"><a href="#">
                	<?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$dong['product_image'].'" width="150" height="150"/>';
					?>
                    <p><?php echo $dong['product_title'] ?></p>
                    <p>Giá:<?php echo $dong['product_price'] ?></p>
                    <p style="color:#900;"><a href="index.php?xem=chitiet&id=<?php echo $dong['product_id'] ?>"  style="color:#09C;">Chi tiết</p></a>

                </a></div>
              <?php
	}
			  ?>
			</div>
