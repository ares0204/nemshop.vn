<?php
// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect("localhost", "root", "", "data");

// Kiểm tra xem id sản phẩm được truyền qua yêu cầu xoá
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Xoá sản phẩm từ cơ sở dữ liệu
    $sql = "DELETE FROM cart WHERE id = $id";
    mysqli_query($connection, $sql);

    // Chuyển hướng trở lại trang giỏ hàng
    header("Location: /nemshop.vn-demo/pages/cart.php");
    exit();
}
?>