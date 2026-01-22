<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .button,
        .btn-cancel {
            flex: 1;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            display: block;
        }
        .button {
            background-color: #4CAF50;
            color: white;
        }
        .button:hover {
            background-color: #45a049;
        }
        .btn-cancel {
            background-color: #888;
            color: white;
        }
        .btn-cancel:hover {
            background-color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thêm Sản Phẩm</h1>
        
        <form>
            <div class="form-group">
                <label for="name">Tên Sản Phẩm</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="price">Giá</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="description">Mô Tả</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="button-group">
                <a class="button">Thêm</a>
                <a href="/product" class="btn-cancel">Hủy</a>
            </div>
        </form>
    </div>
</body>
</html>
