<?php
require_once '../bootstrap.php'; // tu dong nap lop,khong gian ten,dbconnect
use CT275\Labs\khach_hang;
use CT275\Labs\admin;
use CT275\Labs\hang_hoa;
use CT275\Labs\loai_hang_hoa;

if (session_status() === PHP_SESSION_NONE) { // neu trang thai chua duoc bat 
  	session_start(); //if(session_status() !== PHP_SESSION_ACTIVE) session_start();
}


$loai_hang_hoa = new loai_hang_hoa($PDO);
$loai_hang_hoas= $loai_hang_hoa->all();
if(isset($_SESSION['carts'])){
    $count = count($_SESSION['carts']);
  }
 
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/love.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		 integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
		 crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/css_shoe.css">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/css_header.css" rel="stylesheet" />
		<link href="css/css_news.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
       	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  		<link rel="stylesheet" href="css/CSS_odinshop.css">
 		<script src="https://kit.fontawesome.com/e3c1c0124c.js" crossorigin="anonymous"></script>

	<!-- Thêm mã liên kết của Montserrat vào thẻ head của trang web -->
  		


</head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #add8e6; color: #000;">
<a href="index.php" class="navbar-brand ml-4"><img src="../public/assets/icon.png" alt="Logo" class="logo-icon">HLTL</a>
<style>.logo-icon{width:30px;height:auto;margin-right:10px;}</style>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="index.php" class="nav-item nav-link font-weight-bold">Trang chủ</a>
			<a href="news.php" class="nav-item nav-link font-weight-bold">Tin tức</a>	
					
			<div class="nav-item dropdown">
				<a href="hanghoa.php" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle font-weight-bold">Danh mục hàng</a>
				<div class="dropdown-menu">
					<?php foreach($loai_hang_hoas as $loai_hang_hoa) : ?>					
					<a href="<?= "../public/hanghoa.php?id=".$loai_hang_hoa->getId()?>" value="<?= $loai_hang_hoa->getId() ?>"  class="dropdown-item"><?= $loai_hang_hoa->ten_loai ?></a>
					<?php endforeach ?>
                </div>
            </div>
			<!-- Thêm mục FAQ -->
            <a href="faq.php" class="nav-item nav-link font-weight-bold">FAQ</a>

			<!-- Thêm mục Liên hệ với chúng tôi -->
            <a href="contactus.php" class="nav-item nav-link font-weight-bold">Liên hệ shop</a>
		</div>
		<form class="navbar-form form-inline " action="hanghoa.php">
			<div class="input-group search-box">								
				<input type="text" id="search" name="search" value="<?php if(isset($_GET['search'])){ echo($_GET['search']);}?>" class="form-control" placeholder="Tên sản phẩm...">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
				</div>
			</div>
		</form>
    
	<div class="navbar-nav ml-auto action-buttons">
    <form class="nav-form form-inline mr-2" action="cart.php">
		<button class="btn btn-outline-dark" type="submit">
			<i class="bi-cart-fill"></i>
			Cart
			<span class="badge bg-dark text-white rounded-pill"><?php if(isset($count)){
                      echo $count;
                    }  else{echo 0;} ?> </span>
		</button>
    </form>
	<?php if (!isset($_SESSION['ten'])): ?>
			<div class="nav-item dropdown">
                
						<a href="dangnhap.php" class="btn btn-outline-dark mt-auto">ADMIN</a>
						
						</div>
					</form>
                </div>
			</div>
			</div>
			<div class="nav-item dropdown">
			<a href="dangxuat.php" class="btn btn-outline-dark mt-auto">Đăng xuất</a>
               
			</div>
			
			<?php endif ?>
			<?php if (isset($_SESSION['ten'])) : ?>
				<form class="nav-form form-inline mr-4" action="<?= BASE_URL_PATH . 'dangxuat.php' ?>" method="post">
				<div class="btn-group">
                <button type="button" class="btn btn-danger">Đăng xuất</button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-caret-down-fill"></i>
                </button>
                <div class="nav-item dropdown-menu">
                    <a class="dropdown-item text-dark" href="profile.php"><i class="bi bi-person text-dark"></i> <?php echo $_SESSION['ten'] ?></a>
                    <div class="dropdown-divider"></div>
                    <input type="submit" class="btn btn-danger btn-block" value="Đăng Xuất">
                </div>
          	  </div>
    		</form>
          <?php endif ?>
        </div>
	</div>
</nav>
</body>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
