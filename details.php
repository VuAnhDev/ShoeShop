<?php
	require_once('db/dbhelper.php');
	require_once('utils/utility.php');
	include_once('layout/header.php');
	$id = getGet('id');
	$product = executeSingleResult('select * from products where id = '.$id, true);
	if ($product == null) {
		header('Location: products.php');
		die();
	}
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/details.css">
</head>
<!-- body -->
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<img class="details__thumnail"src="<?=$product["thumbnail"]?>">
		</div>
		<div class="col-md-7 details__right">
			<h4 class="details__title"><?=$product["title"]?></h4>
			<p class="details__price">Giá Sản Phẩm: <?=$product["price"]?></p>
			<p class="details__gt">Giới thiệu sản phẩm:</p>
			<p class="details__gt-content">- No returns, no refunds.<br> - Đơn hàng được xác nhận sau khi xác nhận thanh toán.<br>- Không đổi hàng, trả hàng hay hoàn tiền trừ trường hợp pháp luật có quy định khác.<br>- Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và khuyến mãi nào.<br>-  Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.</p>
			<button class="btn btn-success details__btn" style="width: 100%; font-size: 30px;" onclick="addToCart(<?=$id?>)">Add to cart</button>
		</div>
		<div class="col-md-12 details__content">
			<p><?=$product["content"]?></p>
		</div>
</div>
<script type="text/javascript">
	function addToCart(id) {
		$.post('control/cookie.php', {
			'action': 'add',
			'id': id,
			'num': 1
		}, function(data) {
			location.reload()
		})
	}
</script>
<?php
	include_once('layout/footer.php');
?>