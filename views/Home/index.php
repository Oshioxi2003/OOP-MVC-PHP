<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
* {
    list-style: none;
    padding: 0;
    margin: 0;
}

li,
ol,
ul {
    list-style: none;
    padding: 0;
    margin: 0;
}





.location-city a:hover,
.list-links a:hover {
    color: #ff6666;
}


.location-bg img {
    width: 100%;
    height: auto;
    display: block;
}

.location-city {
    flex-basis: calc(22.222% - 20px);
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 4px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.location-city:hover {
    transform: translateY(-5px);
}

.location-item {
    display: block;
    color: white;
    text-decoration: none;
}

.location-cat {
    box-sizing: border-box;
    text-align: center;
}

.location-name {
    font-weight: bold;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .location-city {
        flex-basis: 100%;
        margin: 10px 0;
    }
}


.image-search-container {
    position: relative;
    width: 100%;
}

.image-search-container img {
    width: 100%;
    height: auto;
    display: block;
}

.search-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    background: rgba(255, 255, 255, 0.7);
}


/* chọn thành phố */
.search-city-size-price {
    padding-top: 20px;
    /* Additional padding if needed */
}

.popup {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.popup-content {
    background-color: white;
    margin: 15% auto;
    padding: 20px;
    width: 30%;
    border: 1px solid #888;
}

/* Nút đóng */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>



<section class="search">
    <div class="container">
        <div class="image-search-container">
            <img src="../assets/images/banner.jpg" alt="Warehouse">
            <div class="search-bar">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Tìm kiếm">
                    <div class="input-group-append">
                        <button class="btn btn-primary search-button" type="button">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="search-city-size-price">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4 mb-4 d-flex justify-content-center search-city">
                <button class="btn btn-primary" id="openPopup">Chọn thành phố<i
                        class="bi bi-chevron-right"></i></button>
                <div id="filterPopup" class="popup">
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h2>Bộ Lọc</h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center search-size">
                <button class="btn btn-primary" id="openPopup">Diện tích<i class="bi bi-chevron-right"></i></button>
                <div id="filterPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-size">&times;</span>
                        <h2>Chọn diện tích</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 d-flex justify-content-center search-size">
                <button class="btn btn-primary" id="openPopup">Mức tiền<i class="bi bi-chevron-right"></i></button>
                <div id="filterPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-size">&times;</span>
                        <h2>Mức tiền</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container">
    <div class="row justify-content-center">
        <div class="page-section welcome">
            <h1 class="page-h1" style="text-align:center;">Tìm kiếm chỗ thuê ưng ý</h1>
            <p class="page-description">Kênh thông tin Kho số 1 Việt Nam - Website đăng tin cho thuê phòng
                trọ,
                nhà nguyên căn, căn hộ, ở ghép nhanh, hiệu quả với 100.000+ tin đăng và 2.500.000 lượt xem mỗi
                tháng.
            </p>
        </div>
        <div class="location-city">
            <a class="location-item city-1" href="app" title="Kho Hồ Chí Minh">
                <div class="location-bg">
                    <img src="../assets/images/location_hcm.jpg" alt="Hồ Chí Minh">
                </div>
                <span class="location-cat">Kho <span class="location-name">Hồ Chí Minh</span></span>
            </a>
        </div>
        <div class="location-city">
            <a class="location-item city-2" href="#" title="Kho Hà Nội">
                <div class="location-bg">
                    <img src="../assets/images/location_hn.jpg" alt="Hà Nội">
                </div>
                <span class="location-cat">Kho <span class="location-name">Hà Nội</span></span>
            </a>
        </div>
        <div class="location-city">
            <a class="location-item city-3" href="#" title="Kho Đà Nẵng">
                <div class="location-bg">
                    <img src="../assets/images/location_hn.jpg" alt="Đà Nẵng">
                </div>
                <span class="location-cat">Kho <span class="location-name">Đà Nẵng</span></span>
            </a>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row clearfix">
        <div class="col-8 col-left ">
            <?php include dirname(__DIR__) . '/StorageUnit/index.php';?>
        </div>
        <div class="col-4 col-right section-container">
            <?php include 'clearfix-right.php'; ?>
        </div>
    </div>
</div>
</section>
<script>
// Tim
$(document).ready(function() {
    $('.favorite-btn').click(function() {
        $(this).toggleClass('active');
    });
});
// chọn thành phố 
var popup = document.getElementById("filterPopup");
var btn = document.getElementById("openPopup");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    popup.style.display = "block";
}

span.onclick = function() {
    popup.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}
</script>