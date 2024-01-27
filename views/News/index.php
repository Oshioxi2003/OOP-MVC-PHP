<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Tin Tức</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .news-article {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
        display: flex;
    }

    .news-article img {
        width: 150px;
        height: 100px;
        margin-right: 10px;
    }

    .news-article div {
        flex-grow: 1;
    }

    .news-article h2 {
        margin: 0;
        font-size: 18px;
    }

    .news-article p {
        font-size: 14px;
        line-height: 1.6;
        color: #666;
    }
    </style>
</head>

<body>

    <section class="news-section" style="margin-bottom: 20px">
        <div class="container ">
            <div class="menu-icons" style="margin-bottom:10px;">
                <a href="<?php echo ROOT_PATH; ?>home/index">Home</a>
                <i class="bi bi-chevron-right"></i>
                <a href="<?php echo ROOT_PATH; ?>news/index">News</a>
            </div>
            <div class="row clearfix">
                <div class="col-8 col-left ">
                    <!-- Bài Tin Tức 1 -->
                    <a href="<?php echo ROOT_PATH; ?>news/detail">
                        <div class="news-article">
                            <img src="https://img.iproperty.com.my/angel-legacy-bds/520x300-crop/2022/12/29/JGcIp0rf/20221229143614-4be7.jpg"
                                alt="Thumbnail for news 1">
                            <div>
                                <h2>Đặt Cọc Mua Đất: Cảnh Báo 4 Thủ Đoạn Lừa Đảo Thường Gặp</h2>
                                <p>Đặt cọc là một trong những yêu cầu không thể thiếu trong giao dịch mua bán đất. Điều
                                    này có thể giúp cho cả hai bên giữ đúng cam kết, hạn chế tình trạng phá vỡ thỏa
                                    thuận. Tuy nhiên, trong quá trình đặt cọc mua đất..</p>
                            </div>
                        </div>
                    </a>

                    <!-- Bài Tin Tức 2 -->
                    <a href="<?php echo ROOT_PATH; ?>news/posts">
                        <div class="news-article">
                            <img src="https://img.iproperty.com.my/angel/520x300-crop/wp-content/uploads/sites/7/2023/11/148e5700e7b631e868a7.jpg"
                                alt="Thumbnail for news 2">
                            <div>
                                <h2>5 Hình Thức Lừa Đảo Đất Đai Phổ Biến Và Cách Phòng Tránh</h2>
                                <p>Trước ma trận lừa đảo đất đai tinh vi, biến hóa khôn lường hiện nay, các chuyên gia
                                    bất động sản khuyên người mua và nhà đầu tư luôn đề cao cảnh giác, cẩn trọng khi tìm
                                    hiểu thông tin và giao dịch để không sập bẫy..</p>
                            </div>
                        </div>
                    </a>
                    <!-- Bài Tin Tức 3 -->
                    <div class="news-article">
                        <img src="../assets/images/location_hn.jpg" alt="Thumbnail for news 3">
                        <div>
                            <h2>Kinh doanh cho thuê kho cần đóng những loại thuế nào?</h2>
                            <p>Cho thuê kho cần nộp những loại phí nào? Mô hình kinh doanh cho thuê kho Kinh
                                doanh cho
                                thuê kho là hoạt động thương mại, trong đó chủ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-right section-container">

                    <?php include dirname(__DIR__) . '/home/clearfix-right.php';?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>