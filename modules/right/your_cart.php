
<div class="col-md-12">
	<h1 class="col-md-12 text-center">Giỏ hàng của bạn</h1>
    <?php


		$current_url=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		if(isset($_SESSION['product'])){
			$total=0;

			echo '<div class="row">';
			foreach($_SESSION['product'] as $cart_itm){
				echo '<div class="col-md-12 item_cart">';
				echo '<div class="col-md-4 hinh">';
				echo '<img src="admincp/modules/sanpham/uploads/'.$cart_itm['image'].'" width="70" height="70"/>';
				echo '</div>';
				echo '<div class="col-md-6">';
				echo '<p>Tên sản phẩm : <b>'.$cart_itm['name'].'</b></p>';
				echo '<p>Số lượng : <b>'.$cart_itm['qty'].'</b></p>';
				echo '<p>Giá : <b>'.$cart_itm['price'].'</b></p>';
				echo '</div>';
				echo '<div class="col-md-2 xoa">';
				echo '<p><a href="cart_update.php?removep='.$cart_itm['id'].'&return_url='.$current_url.'" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove-sign"></span></a></p>';
				echo '</div>';
				echo '</div>';
				$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        		$total = ($total + $subtotal);

			}

			echo '</div>';

			echo '<div class="col-md-12">';
			echo '<strong>Tổng tiền : '.$total.'$'.'</strong>';
			echo' <p><a class="btn btn-default" href="cart_update.php?emptycart=1&return_url='.$current_url.'">Xóa tất cả</a></p><br/><br/>';


		if(!isset($_SESSION['dangnhap'])){
		echo '<p><a href="?xem=thanhtoan">Đăng nhập</a></p>';}
		else{
		echo '<form action="thanhtoan.php" method="post">';
		echo '<input class="btn btn-primary" type="submit" name="muahang" value="Mua Hàng"/>';
		echo '</form>';
		}
		}
	else{
				echo 'Giỏ hàng của bạn trống';
	}
	echo '</div>';
	?>

    <?php

	echo '<div class="giohang">';

	if(isset($_SESSION['product'])){
		echo' <a href="giohang.php"><img src="image/14085970186309_icon-giao-hang.png" width="40" height="40"></a>';
		$count=count($_SESSION['product']);
		echo '<p style="color:red;">'.$count.'   Items'.'</p>';
	}
	echo '</div>';
	?>
 <p class="col-md-12"><a href="index.php">Tiếp tục mua hàng</a></p>
</div>
