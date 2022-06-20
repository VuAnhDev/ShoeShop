<?php
	require_once('db/dbhelper.php');
	require_once('utils/utility.php');
	include_once('layout/header.php');

	$productList = executeResult('select * from products');
?>
<link rel="stylesheet" type="text/css" href="css/products.css">
<!-- body -->
<div class="container">

	<div class="row">
		<h2 class="category__title">Danh sách sản phẩm mới</h2>
		<?php 
		require_once('control/page.php');
			foreach ($result as $item) {
				echo '<div class="col-md-3 col-6 product">
						<a class="product__thumbnail" href="details.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" ></a>
						<a class="product__title" href="details.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
						<p class="product__price">'.number_format($item['price'], 0, ',', '.').'đ</p>
					</div>';
			}
		?>
	</div>
		<div class="row">
		<h2 class="category__title">Sản phẩm Hot</h2>
		<?php 
		require_once('control/page.php');
			foreach ($result as $item) {
				echo '<div class="col-md-3 col-6 product">
						<a class="product__thumbnail" href="details.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" ></a>
						<a class="product__title" href="details.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
						<p class="product__price">'.number_format($item['price'], 0, ',', '.').'đ</p>
					</div>';
			}
		?>
	</div>
		<div class="row">
		<h2 class="category__title">Danh sách sản phẩm</h2>
		<?php 
		require_once('control/page.php');
			foreach ($result as $item) {
				echo '<div class="col-md-3 col-6 product">
						<a class="product__thumbnail" href="details.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" ></a>
						<a class="product__title" href="details.php?id='.$item['id'].'"><p>'.$item['title'].'</p></a>
						<p class="product__price">'.number_format($item['price'], 0, ',', '.').'đ</p>
					</div>';
			}
		?>
	</div>
	<div class="row-2">
		<ul class="pagination">
		<?php
		for ($i=1; $i <= $page ; $i++) { 
		 	echo '<li class="pages__number"><a href="products.php?page='.$i.'">'.$i.'</a></li>';
		 } 
		?>
		</ul>
	</div>
</div>
<?php
	include_once('layout/footer.php');
?>