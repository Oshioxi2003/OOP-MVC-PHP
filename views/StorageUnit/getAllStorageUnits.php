<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiết sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .product-details {
        width: 100%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        border-radius: 20px;
        height: auto;
    }

    .contact {
        background-color: #f0ad4e;
        /* Change to your desired background color */
        border: none;
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <section class="container">
        <div class="row">
            <div class="col-8 slide bg-gray">
                <?php

                 // Kiểm tra xem có tham số "id" được truyền qua URL hay không
                 if (isset($_GET['id'])) {
                     $productID = $_GET['id'];
                 
                     // Kết nối đến cơ sở dữ liệu
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "batdongsandb";
                 
                     $conn = new mysqli($servername, $username, $password, $dbname);
                 
                     if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    
                     // Truy vấn dữ liệu chi tiết sản phẩm
                     $sql = "SELECT * FROM storageunits WHERE UnitID = ?";
                     $stmt = $conn->prepare($sql);
                     $stmt->bind_param("i", $productID);
                     $stmt->execute();
                     $result = $stmt->get_result();
                     
                     if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        // Hiển thị thông tin chi tiết sản phẩm
                        echo "<div class='card mb-3'>";
                        echo "<div class='row no-gutters'>";
                        echo "<div class='col-md-12'>";
                        echo "<img src='" . $row["Image"] . "' class='card-img' alt='Hình ảnh sản phẩm' style='width:100%; height:200px; object-fit: cover;'>";
                        echo "</div>";
                        echo "<div class='col-md-8'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $row["Name"] . "</h5>";
                        echo "<p class='card-text'><strong>Địa chỉ:</strong> " . $row["Address"] . "</p>";
                        echo "<p class='card-text'><strong>Dung lượng:</strong> " . $row["Capacity"] . "</p>";
                        echo "<p class='card-text'><strong>Giá:</strong> " . $row["Rate"] . "</p>";
                        echo "<p class='card-text'><strong>Tình trạng:</strong> " . $row["Available"] . "</p>";
                        $describe = $row["Describe"];
                        $describe_with_line_break = preg_replace('/\.\.\.|[.]/', '.<br>', $describe);
                        echo "<p class='card-text'><strong>Thông tin mô tả:</strong><br>" . $describe_with_line_break . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                     } else {
                         echo "Sản phẩm không tồn tại.";
                         
                     }
                 
                     // Đóng kết nối
                     $conn->close();
                 } else {
                     echo "Không có thông tin sản phẩm nào được hiển thị.";
                 }
                 
                ?>
            </div>

            <div class="col-4">
                <div class="contact bg-warning">
                    <br>
                    <div style="text-align: center;">
                        <a href="tel:0918180057" class="contact">
                            <i class="fa-solid fa-phone"></i> 0918180057
                        </a>
                        <br><br>

                        <a class="btn author-zalo" target="_blank" rel="nofollow" href="https://zalo.me/0918180057">
                            <i class="fa-brands fa-line"></i> Nhắn Zalo
                        </a>
                        <br><br>

                        <a class="btn author-zalo" target="_blank" rel="nofollow" href="#">
                            <i class="fa-regular fa-heart"></i> Yêu thích
                        </a>
                        <br><br>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="resources/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
