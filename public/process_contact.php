<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Xử lý dữ liệu (ví dụ: lưu vào cơ sở dữ liệu)

    // Hiển thị cảm ơn
    include('../admin/partials/header2.php');
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Cảm ơn bạn!</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* CSS tùy chỉnh */
        </style>
    </head>

    <body>

        <!-- Nội dung cảm ơn -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h2>Cảm ơn bạn đã liên hệ với chúng tôi! </h2>
                    </div>
                </div>
            </div>
        </section>

        <?php
        // Include footer và các tệp JavaScript cần thiết
        include('../admin/partials/footer.php');
        ?>
        <!-- Bootstrap core JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS -->
        <script src="js/scripts.js"></script>
    </body>

    </html>

<?php
} else {
    // Nếu không phải là phương thức POST, chuyển hướng về trang liên hệ
    header("Location: contactus.php");
    exit();
}
?>