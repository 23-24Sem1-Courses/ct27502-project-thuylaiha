<?php
// Nếu không có thông tin khuyến mãi, bạn có thể thực hiện kiểm tra và xử lý tại đây

// Ví dụ: Lấy thông tin khuyến mãi từ query string
if (isset($_GET['id'])) {
    $promotionId = $_GET['id'];

    // Thực hiện truy vấn hoặc lấy thông tin khuyến mãi từ nguồn dữ liệu
    $promotion = [
        'title' => 'Chương trình ưu đãi cuối năm',
        'description' => 'Sale 70% các mặt hàng',
        'content' => 'Nội dung chi tiết về chương trình ưu đãi cuối năm sẽ được hiển thị ở đây.',
    ];

    // Nếu không tìm thấy khuyến mãi, có thể chuyển hướng hoặc hiển thị thông báo lỗi
} else {
    // Nếu không có ID khuyến mãi, có thể chuyển hướng hoặc hiển thị thông báo lỗi
    header("Location: danh-sach-khuyen-mai.php");
    exit();
}

// Include header
include '../header.php';
?>

<div class="container">
    <h2><?= $promotion['title'] ?></h2>
    <p><?= $promotion['description'] ?></p>
    <div class="content">
        <?= $promotion['content'] ?>
    </div>
</div>

<?php
// Include footer
include '../footer.php';
?>