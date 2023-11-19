<?php
include '../admin/partials/header.php';
require_once '../bootstrap.php';
?>


<?php
$news = [
    [
        'title' => 'Sức ép của Bitis sau dịch',
        'date' => '14th November, 2023',
        'summary' => 'Sau năm 2019 đạt đỉnh, một phần nhờ chiến dịch marketing thành công, doanh thu của Bitis sụt giảm trong hai năm đại dịch và đến nay, theo công ty, “đang tăng trở lại”.',
    ],
    [
        'title' => 'Giày phân hủy sinh học',
        'date' => '14th November, 2023',
        'summary' => 'Nhóm nhà khoa học tại Đại học California San Diego phát triển loại giày có khả năng phân hủy sinh học trong nước biển 
        để làm thức ăn cho vi sinh vật, Newsweek hôm 23/9 đưa tin.',
    ],
    // Thêm tin tức khác nếu cần
];

$promotions = [
    [
        'title' => 'Chương trình ưu đãi cuối năm',
        'date' => '14th November, 2023',
        'summary' => 'Sale 70% các mặt hàng',
    ],
    [
        'title' => 'Giày trẻ em mua 1 tặng 1',
        'date' => '14th November, 2023',
        'summary' => 'Dành cho các bé dưới 3 tuổi ',
    ],
    // Thêm thông tin cho các khuyến mãi khác nếu cần
];
?>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="section-title mb-2">
                    <span class="display-4 font-weight-bold my-element animated bounce">  Tin mới nhất</span>
                </div>
                <div class="row">
                    <?php foreach ($news as $article) : ?>
                        <!-- Hiển thị tin tức -->
                        <div class="col-4">
                            <a class="img-fluid" src="<?= $article['tintuc1.jpg'] ?>" alt="<?= $article['title'] ?>">
                        </div>
                        <div class="col-8">
                            <h4>
                                <a class="text-dark aTitle" href="https://vnexpress.net/suc-ep-cua-biti-s-sau-nam-vut-sang-4518494.html"><?= $article['title'] ?></a>
                            </h4>
                            <small><?= $article['date'] ?></small>
                            <p class="summary pt-3"><?= $article['summary'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="section-title mb-2 mt-4">
                    <span class="display-6 font-weight-bold my-element animated bounce">Khuyến mãi</span>
                </div>
                <div class="row">
                    <?php foreach ($promotions as $promotion) : ?>
                        <!-- Hiển thị khuyến mãi -->
                        <div class="col-4">
                            <a class="img-fluid" src="<?= $promotion['tintuc3.jpg'] ?>" alt="<?= $promotion['title'] ?>">
                        </div>
                        <div class="col-8">
                            <h4>
                                <a class="text-dark aTitle" href="chitietkhuyenmai.php"><?= $promotion['title'] ?></a>
                            </h4>
                            <small><?= $promotion['date'] ?></small>
                            <p class="summary pt-3"><?= $promotion['summary'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../admin/partials/footer.php'; ?>
