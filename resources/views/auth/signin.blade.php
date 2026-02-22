<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>
    <h2>Đăng ký tài khoản</h2>

    <form method="POST" action="{{ route('check.signin') }}">
        @csrf

        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>    
        <input type="password" name="password"><br><br>

        <label>Repass:</label>
        <input type="password" name="repass"><br><br>

        <label>MSSV:</label>
        <input type="text" name="mssv"><br><br>

        <label>Lớp môn học:</label>
        <input type="text" name="lopmonhoc"><br><br>

        <label>Giới tính:</label>
        <select name="gioitinh">
            <option value="nam">Nam</option>
            <option value="nu">Nữ</option>
        </select><br><br>

        <button type="submit">Sign In</button>
    </form>
</body>
</html>
