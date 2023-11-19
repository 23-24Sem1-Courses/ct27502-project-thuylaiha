<?php
include('../admin/partials/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sản Phẩm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS tùy chỉnh */
    </style>
</head>

<body>


    <!-- Phần chi tiết sản phẩm -->
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-6">
    <img src="giaynu2.jpg" class="img-fluid" alt="Tên Sản Phẩm" style="max-width: 100%; height: auto;">
</div>
            <div class="col-md-6">
                <h2>Stride Rite Walking Shoe</h2>
                <p>Sản xuất và độc quyền tại Đồ da Tâm Anh</p>
                <p>Bảo hành 12 tháng</p>
                <p>Giao hàng toàn quốc, thanh toán sau khi nhận hàng</p>
                <p>Đổi trả hàng trong vòng 15 ngày</p>
                <p>Chất liệu da bò cao cấp, da thật 100%</p>
                <p>Form giày ôm chân, thiết kế trẻ trung hiện đại</p>
                <p>Đường chỉ may tỉ mỉ, tinh tế</p>
                <p>Đế chống trơn trượt, thời trang</p>
                <p>Màu: Trắng</p>
                <p><strong>Giá:</strong> 1000000</p>
                <p><strong>Số lượng còn:</strong> 50</p>
                <div class="text-center">
                 <input type="submit" name="themgiohang" value="Add to cart" >
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Mô tả chi tiết sản phẩm -->
    <section class="product-description text-center">
        <!-- Mô tả chi tiết sản phẩm -->
        <h2>Mô Tả Chi Tiết</h2>
        <p>Chất liệu da được tuyển chọn kỹ lưỡng: siêu bền, siêu mềm</p>
       <p> Đường chỉ may tinh tế, hiện đại<p>
        <p>Đế giày được chắc chắn với phần thiết kế xẻ rãnh chống trơn trượt mang lại cảm giác thoải mái khi sử dụng.</p>
        <p>Trẻ trung, nam tính và hiện đại là điều bạn có thể dễ dàng nhận thấy trong thiết kế này.</p>
        <p>Chất liệu da cao cấp, mềm mại cùng thiết kế đế giày bằng chất liệu cao su ép gỗ mang lại cảm giác thoải mái khi sử dụng.</p>
    </section>
    <!-- Script Bootstrap và jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
    // Include footer and necessary JavaScript files
    include('../admin/partials/footer.php');
    ?>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
</body>

</html>