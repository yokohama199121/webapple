<?php
	$sql="select * from products where product_brand='$_GET[id]' ";
	$hieu=mysql_query($sql);
	$sql_tenhieu="select tenhieu from hieu where hieu_id='$_GET[id]'   ";
	$tenhieu=mysql_query($sql_tenhieu);
	$dong_tenhieu=mysql_fetch_array($tenhieu);
?>
<p class="loai"><?php echo $dong_tenhieu['tenhieu'] ?></p>
<div class="row">

	<?php
	while($dong_hieu=mysql_fetch_array($hieu)){
	?>
             <div class="col-md-4"><a href="#">
                	<?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$dong_hieu['product_image'].'" width="120" height="150"/>';
					?>
                    <p>Tên sản phẫm: <?php echo $dong_hieu['product_title'] ?></p>
                    <p>Giá:<?php echo $dong_hieu['product_price'] ?></p>
                    <p style="color:#900;margin-left:20px;margin-top:5px;"><a href="index.php?xem=chitiet&id=<?php echo $dong_hieu['product_id'] ?>"  style="color:#09C;">Chi tiết</p></a>

                </a></div>
              <?php
	}
			  ?>
            </div>
