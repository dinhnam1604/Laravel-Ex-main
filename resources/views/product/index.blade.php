<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .btn-group {
            text-align: center;
            margin: 20px 0;
        }
        .btn-add {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-add:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tbody tr:hover {
            background-color: #f9f9f9;
        }
        .price {
            color: #e74c3c;
            font-weight: bold;
        }
        .actions a {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            margin-right: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .actions a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Danh Sách Sản Phẩm</h1>

        <div class="btn-group">
            <a href="{{ route('add') }}" class="btn-add">Thêm Sản Phẩm</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Laptop Dell XPS 13</td>
                    <td class="price">$999.99</td>
                    <td class="actions">
                        <a href="product/1">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>iPhone 15 Pro</td>
                    <td class="price">$1,099.99</td>
                    <td class="actions">
                        <a href="product/2">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Samsung Galaxy S24</td>
                    <td class="price">$899.99</td>
                    <td class="actions">
                        <a href="product/3">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>MacBook Pro 16"</td>
                    <td class="price">$2,499.99</td>
                    <td class="actions">
                        <a href="product/4">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>iPad Air 11"</td>
                    <td class="price">$799.99</td>
                    <td class="actions">
                        <a href="product/5">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Sony WH-1000XM5 Headphones</td>
                    <td class="price">$399.99</td>
                    <td class="actions">
                        <a href="product/6">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Samsung 65" QLED TV</td>
                    <td class="price">$1,299.99</td>
                    <td class="actions">
                        <a href="product/7">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Google Pixel 8 Pro</td>
                    <td class="price">$999.00</td>
                    <td class="actions">
                        <a href="product/8">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Nintendo Switch OLED</td>
                    <td class="price">$349.99</td>
                    <td class="actions">
                        <a href="product/9">Xem</a>
                    </td>
                </tr>
                <tr>
                    <td>Canon EOS R6 Mirrorless Camera</td>
                    <td class="price">$2,499.00</td>
                    <td class="actions">
                        <a href="product/10">Xem</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
