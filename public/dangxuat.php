<?php
if (session_status() === PHP_SESSION_NONE) { // neu trang thai chua duoc bat 
  session_start(); //if(session_status() !== PHP_SESSION_ACTIVE) session_start();
}
require_once '../bootstrap.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_SESSION['khach_hang_formdb'])) {
    unset($_SESSION['id']);
    unset($_SESSION['ten']);
    unset($_SESSION['email']);
    unset($_SESSION['mat_khau']);
    unset($_SESSION['khach_hang_formdb']);
    session_destroy();
    
  }
  if (isset($_SESSION['admin_formdb'])) {
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    unset($_SESSION['ten']);
    unset($_SESSION['mat_khau']);
    unset($_SESSION['khach_hang_formdb']);
    session_destroy();
    
  }
}
include '../admin/partials/header2.php';
?>
<main>
  <section>
    <?php if (!isset($_SESSION['user'])) : ?>
      <div style="height: 200px; margin-top:200px" class="text-center">
        <h1>
          <p> Bạn đã đăng xuất thành công</p>
        </h1>
        <a href="trangdangnhap.php"> <button class="btn btn-primary">Đi đến trang chủ</button></a>
        <a href="sanpham.php"> <button class="btn btn-primary">Đi đến trang sản phẩm</button></a>

      </div>

    <?php endif ?>

  </section>
</main>

<?php include('../admin/partials/footer.php') ?>