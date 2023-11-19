<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Giày HLTL</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/love.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="css/css_odinshop.css"> <!-- Thêm CSS tùy chỉnh của bạn nếu cần -->

    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            background-color: #ffffff;
            max-width: 400px;
            width: 100%;
            padding: 30px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border: 1px solid #0056b3;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- ... (nội dung của navbar) ... -->
    </nav>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form method="post" action="<?= BASE_URL_PATH . 'dangnhap.php' ?>" onsubmit="return redirectToHome()">
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <section class="py-5">
        <!-- ... (nội dung của phần này) ... -->
    </section>

    <!-- Footer -->
    <!-- ... (nội dung của phần này) ... -->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script>
        function redirectToHome() {
            // Thực hiện các xác nhận đăng nhập ở đây nếu cần
            // Sau khi xác nhận đăng nhập thành công, chuyển hướng trang đến trang chủ
            window.location.href = "trangdangnhap.php";
            return false; // Ngăn form submit
        }
    </script>
</body>

</html>