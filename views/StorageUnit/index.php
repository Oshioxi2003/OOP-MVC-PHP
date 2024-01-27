<!DOCTYPE html>
<html lang="en">
<head>
    <title>Danh sách sản phẩm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Danh sách sản phẩm</h1>

        <?php if (!empty($viewmodel)): ?>
            <?php foreach ($viewmodel as $row): ?>
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="<?php echo $row["Image"]; ?>" class="card-img" alt="Hình ảnh sản phẩm" style="width:100%; height:200px; object-fit:cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row["Name"]); ?></h5>
                                <p class="card-text"><strong>Địa chỉ:</strong> <?php echo htmlspecialchars($row["Address"]); ?></p>
                                <p class="card-text"><strong>Dung lượng:</strong> <?php echo htmlspecialchars($row["Capacity"]); ?> m²</p>
                                <p class="card-text"><strong>Giá:</strong> <?php echo htmlspecialchars($row["Rate"]); ?> VND</p>
                                <p class="card-text"><strong>Tình trạng:</strong> <?php echo htmlspecialchars($row["Available"]); ?></p>
                                <a href="<?php echo ROOT_PATH; ?>StorageUnit/getAllStorageUnits?id=<?php echo $row["UnitID"]; ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class='text-center'>Không có sản phẩm nào.</p>
        <?php endif; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
