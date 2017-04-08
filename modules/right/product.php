
<?php

	$sql="select * from products ";
	$sanpham=mysql_query($sql);
?>
<p class="text-primary text-center col-md-12 bg-success">Tất cả sản phẫm</p>
<div class="row">

<?php
while($row=mysql_fetch_array($sanpham)){
?>
             <div class="col-md-4 text-center"><a href="#">
                <?php
					echo '<img src="admincp/modules/sanpham/uploads/'.$row['product_image'].'" width="150" height="150"/>';
					?>
                    <p><?php echo $row['product_title'] ?></p>
                    <p>Giá:<?php echo $row['product_price'] ?></p>
                    <p style="color:#900;"><a href="index.php?xem=chitiet&id=<?php echo $row['product_id'] ?>" style="color:#09C;">Chi tiết</p></a>

                </a></div>

            <?php
}
			?>
            <div class="clear"></div>

					</div>
