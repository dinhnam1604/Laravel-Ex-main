<!DOCTYPE html>
<html>
<head>
    <title>Thông Tin Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }
        .info-item {
            margin: 15px 0;
            padding: 10px;
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .value {
            color: #333;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông Tin Sinh Viên</h1>
        
        <div class="info-item">
            <span class="label">Họ và Tên:</span>
            <div class="value">{{ $name }}</div>
        </div>
        
        <div class="info-item">
            <span class="label">MSSV:</span>
            <div class="value">{{ $mssv }}</div>
        </div>
    </div>
</body>
</html>
