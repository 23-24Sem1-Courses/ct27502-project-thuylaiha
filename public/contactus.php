<?php
include('../admin/partials/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Liên Hệ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS tùy chỉnh */
    </style>
</head>

<body>

    <!-- Nội dung trang Liên Hệ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2>Liên Hệ Chúng Tôi</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- Biểu mẫu liên hệ -->
                    <form action="process_contact.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>   
   
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