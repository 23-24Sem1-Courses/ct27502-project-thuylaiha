<?php include('../admin/partials/header2.php');

use CT275\Labs\hang_hoa;
use CT275\Labs\loai_hang_hoa;
?>

<!-- Thêm thư viện jQuery và Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Thêm CSS trực tiếp -->
<style>
    header {
        background-color: #0051ff; /* Màu chủ đạo - có thể điều chỉnh */
        color: #fff; /* Màu chữ - có thể điều chỉnh */
        padding: 15px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Hiệu ứng bóng đổ */
    }

    .carousel-image {
        max-height: 300px; /* Điều chỉnh giá trị max-height tùy theo kích thước mong muốn */
        transition: transform 0.3s ease-in-out;
    }

    .zoom-image:hover {
        transform: scale(1.1); /* Hiệu ứng zoom khi di chuột qua */
    }
</style>


<!-- Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <!-- Slide Carousel -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <!-- Ảnh Slide 1 -->
                <div class="carousel-item active">
                    <img src="../public/uploads/slide3.jpg" class="d-block w-100 carousel-image" alt="Slide 1">
                </div>
                <!-- Ảnh Slide 2 -->
                <div class="carousel-item">
                    <img src="../public/uploads/slide1.jpg" class="d-block w-100 carousel-image" alt="Slide 2">
                </div>
                <!-- Ảnh Slide 3 -->
                <div class="carousel-item">
                    <img src="../public/uploads/slide2.jpg" class="d-block w-100 carousel-image" alt="Slide 3">
                </div>
            </div>
            <!-- Nút chuyển slide trước và sau -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <br>
        <h2>Sản phẩm nổi bật của cửa hàng</h2>
        <br>
        <!-- Danh sách sản phẩm -->
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
            $hang_hoa = new hang_hoa($PDO);
            $hang_hoas = $hang_hoa->all();
            
            foreach ($hang_hoas as $hang_hoa) :
            ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image with zoom effect -->
                        <img class="card-img-top zoom-image" src="uploads/<?= $hang_hoa->hinh ?>" alt="..." style="height: 300px; object-fit: cover;">
                        
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name as a link to detail.php -->
                                <h5 class="fw-bolder">
                                    <a href="detail.php?id=<?= $hang_hoa->getId() ?>" class="text-decoration-none text-dark">
                                        <?= $hang_hoa->ten_hang_hoa ?>
                                    </a>
                                </h5>
                                
                                <!-- Product price -->
                                <?= $hang_hoa->gia ?>VND
                            </div>
                          
                            <!-- Product actions -->
                            <form action="themgiohang.php?id=<?= $hang_hoa->getId() ?>" method="POST">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center">
                                        <input type="submit" name="themgiohang" value="Add to cart" class="btn btn-outline-dark mt-auto">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('../admin/partials/footer.php') ?>

<!-- CSS trực tiếp -->
<style>
    .carousel-image {
        max-height: 300px; /* Điều chỉnh giá trị max-height tùy theo kích thước mong muốn */
        transition: transform 0.3s ease-in-out;
    }

    .zoom-image:hover {
        transform: scale(1.1); /* Hiệu ứng zoom khi di chuột qua */
    }
</style>

<!-- JavaScript để điều khiển thời gian chuyển đổi của carousel -->
<script>
    $(document).ready(function(){
        // Thiết lập thời gian chuyển đổi là 3 giây
        $('#carouselExample').carousel({
            interval: 3000
        });
    });
</script>

</body>
</html>





