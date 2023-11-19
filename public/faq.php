<!DOCTYPE html>
<html lang="en">
<?php include('../admin/partials/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .faq-question {
        text-align: center;
    }
</style>

</head>

<body>

    <!-- Nội dung trang FAQ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">

                    <br>
                    <br>
                    <!-- Thêm câu hỏi và câu trả lời tại đây -->
                    <div class="accordion" id="faqAccordion">

                        <!-- Câu hỏi 1 -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Làm thế nào để tìm sản phẩm muốn mua?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body text-left">
                                Nếu bạn đang tìm kiếm một sản phẩm cụ thể, hãy sử dụng hộp tìm kiếm từ khóa nằm ở đầu trang để gõ những gì bạn đang tìm kiếm.
                                </div>
                            </div>
                        </div>

                        <!-- Câu hỏi 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Chính sách đổi trả hàng như thế nào?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body text-left">
                                    Shop chúng tôi sẽ chấp nhận đổi trả hàng hoàn toàn miễn phí trong vòng 15 ngày với những sản phẩm bị lỗi, hỏng hóc hoặc nhầm size.
                                </div>
                            </div>
                        </div>

                        <!-- Câu hỏi 3 -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Làm thế nào để đặt hàng trực tuyến?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body text-left">
                                    Truy cập trang web chính thức của chúng tôi. Chọn sản phẩm bạn muốn mua. Thêm vào giỏ hàng và tiến hành thanh toán.
                                </div>
                            </div>
                        </div>

                        <!-- Câu hỏi 4 -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Tôi cần hỗ trợ kỹ thuật, làm thế nào để liên hệ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqAccordion">
                                <div class="card-body text-left">
                                    Bạn có thể liên hệ với bộ phận hỗ trợ kỹ thuật qua email hoặc số điện thoại được cung cấp trên trang web.
                                </div>
                            </div>
                        </div>

                        <!-- Câu hỏi 5 -->
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Sản phẩm của tôi đến bị hỏng, làm thế nào để đổi/trả?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqAccordion">
                                <div class="card-body text-left">
                                    Vui lòng chụp ảnh sản phẩm hỏng và liên hệ với bộ phận hỗ trợ để được hỗ trợ đổi/trả sản phẩm. 
                            </div>
                        </div>

<!-- Bootstrap core JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lắng nghe sự kiện click trên các nút câu hỏi
        var accordionButtons = document.querySelectorAll('.btn-link');

        accordionButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Loại bỏ lớp 'show' từ tất cả các câu trả lời
                var allCollapses = document.querySelectorAll('.collapse');
                allCollapses.forEach(function (collapse) {
                    collapse.classList.remove('show');
                });

                // Thêm lớp 'show' chỉ cho câu trả lời của câu hỏi được nhấn
                var targetCollapseId = button.getAttribute('data-bs-target');
                var targetCollapse = document.querySelector(targetCollapseId);
                targetCollapse.classList.add('show');
            });
        });
    });
</script>

                       

    <?php
    // Include footer and necessary JavaScript files
    include('../admin/partials/footer.php');
    ?>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="js/scripts.js"></script>
    <?php
    // Include footer and necessary JavaScript files
    include('../admin/partials/footer.php');
    ?>
</body>

</html>