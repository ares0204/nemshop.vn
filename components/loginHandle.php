<?php
    // Kết nối đến cơ sở dữ liệu MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data";
    $connect = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($connect->connect_error) {
        die("Kết nối thất bại: " . $connect->connect_error);
    }
    
    // Xử lý dữ liệu đăng nhập khi form được gửi đi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Truy vấn kiểm tra thông tin đăng nhập
        $sql = "SELECT * FROM member WHERE email = '$email' AND password = '$password'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // Người dùng đăng nhập thành công
            header("Location: ../index.php");
            exit();
        } else {
            // Sai tên đăng nhập hoặc mật khẩu
            echo "<h3>Sai tên đăng nhập hoặc mật khẩu!</h3>";
        }
    }

    $connect->close();
?>

<style type="text/css">
    h3 {
        color: red;
        font-size: 2rem;
    }
</style>
