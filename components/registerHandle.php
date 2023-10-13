<?php
// header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'data') or die('Lỗi kết nối');
mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if (isset($_POST['register'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($firstName)) {
        array_push($errors, "firstName is required");
    }
    if (empty($lastName)) {
        array_push($errors, "Password is required");
    }
    if (empty($email)) {
        array_push($errors, "lastName is required");
    }
    if (empty($password)) {
        array_push($errors, "Two password do not match");
    }

    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM member WHERE email = '$email'";

    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);

    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="../pages/authen.php";</script>';

        // Dừng chương trình
        die();
    } else {
        $sql = "INSERT INTO member (firstName, lastName, email, password) VALUES ('$firstName','$lastName','$email','$password')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="../pages/authen.php";</script>';

        if (mysqli_query($conn, $sql)) {
        } else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="../pages/authen.php";</script>';
        }
    }
}
?>