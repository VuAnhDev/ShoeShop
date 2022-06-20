<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shoes Shop</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="header__inner">
			<div class="logo">
				<a href="index.php"><img src="img/logo.png"></a>
			</div>
			<ul class="menu">
				<li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
				<li class="menu__item"><a href="" class="menu__link">Danh mục</a>
					<div class="menu__child">
						<div class="menu__child-item">
							<ul class="menu__child-list">
								<li>Danh mục 1</li>
								<li>Danh mục 2</li>
								<li>Danh mục 3</li>
								<li>Danh mục 4</li>
								<li>Danh mục 5</li>
							</ul>
						</div>
					</div>
				</li>
				<li class="menu__item"><a href="products.php" class="menu__link">Sản phẩm</a></li>
				<li class="menu__item"><a href="" class="menu__link">Liên hệ</a></li>
			</ul>
		</div>
		<div class="header__right">
			<div class="cart">
		 <?php
		  	$cart = [];
			if(isset($_COOKIE['cart'])) {
				$json = $_COOKIE['cart'];
				$cart = json_decode($json, true);
			}
			$count = 0;
			foreach ($cart as $item) {
				$count += $item['num'];
			}
		  ?>
			<a href="cart.php">
				<button type="button" class="btn btn-primary">
					Cart <span class="badge badge-light"><?=$count?></span>
				</button>
			</a>
			</div>
			<div class="login">
				<a href="login.php">
		  			<i class="fas fa-user-tie login__icon"></i>
		  			<h4 class="login__title">Login</h4>
		  		</a>
			</div>
			<div class="signup">
				<a href="register.php">
					<i class="fas fa-user-plus signup__icon"></i>
					<h4 class="signup__title">Signup</h4>
				</a>
			</div>
		</div>
	</div>
</body>
</html>