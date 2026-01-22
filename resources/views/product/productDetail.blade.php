<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
        }
        .back-btn {
            background-color: #888;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
        }
        .back-btn:hover {
            background-color: #666;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .product-info {
            margin: 30px 0;
        }
        .info-row {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
        .value {
            color: #666;
        }
        .price {
            color: #e74c3c;
            font-weight: bold;
        }
        .actions {
            text-align: center;
            margin-top: 30px;
        }
        .actions button,
        .actions a {
            background-color: #3498db;
            color: white;
            padding: 8px 16px;
            margin: 0 5px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .actions button:hover,
        .actions a:hover {
            background-color: #2980b9;
        }
        .btn-delete {
            background-color: #e74c3c;
        }
        .btn-delete:hover {
            background-color: #c0392b;
        }
        .btn-back {
            background-color: #888;
        }
        .btn-back:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="/product" class="back-btn">← Quay Lại</a>
        
        <h1>Chi Tiết Sản Phẩm</h1>
        
        <div class="product-info">
            <div class="info-row">
                <span class="label">ID:</span>
                <span class="value">{{ $id }}</span>
            </div>
            
            <div class="info-row">
                <span class="label">Tên Sản Phẩm:</span>
                <span class="value">Laptop Dell XPS 13</span>
            </div>

            <div class="info-row">
                <span class="label">Giá:</span>
                <span class="value price">$999.99</span>
            </div>

            <div class="info-row">
                <span class="label">Mô Tả:</span>
                <span class="value">Laptop cao cấp với hiệu năng mạnh mẽ, thiết kế mỏng nhẹ, phù hợp cho công việc và giải trí.</span>
            </div>

            <div class="info-row">
                <span class="label">Tình Trạng:</span>
                <span class="value">Còn hàng</span>
            </div>
        </div>

        <div class="actions">
            <button class="btn-edit">Chỉnh Sửa</button>
            <button class="btn-delete">Xóa</button>
            <a href="/product" class="btn-back">Danh Sách</a>
        </div>
    </div>
</body>
</html>
