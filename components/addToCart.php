<?php
    $id = $_GET['id'];
    // Kết nối đến cơ sở dữ liệu MySQL
    $connect = mysqli_connect("localhost", "root", "", "data") or die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
    // Kiểm tra xem người dùng đã nhấp vào nút "Thêm vào giỏ hàng" chưa
    if (isset($_POST['addToCart'])) {
        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $query = "SELECT * FROM product WHERE id = $id";
        $result = mysqli_query($connect, $query);
        $product = mysqli_fetch_assoc($result);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $query = "SELECT * FROM cart WHERE id = '" . $product['id'] . "'";
        $result = mysqli_query($connect, $query);
        $existingProduct = mysqli_fetch_assoc($result);

        if ($existingProduct) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
            $newQuantity = $existingProduct['quantity'] + 1;
            $query = "UPDATE cart SET quantity = $newQuantity WHERE id = '" . $product['id'] . "'";
            mysqli_query($connect, $query);
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm sản phẩm mới vào giỏ hàng
            $quantity = 1;
            $query = "INSERT INTO cart (id, name, price, img, quantity) VALUES ('" . $product['id'] . "', '" . $product['name'] . "', '" . $product['price'] . "', '" . $product['img'] . "', $quantity)";
            mysqli_query($connect, $query);
        }
    }

    $connect->close();

    header("location: /nemshop.vn-demo/pages/product/item". $id .".php");
?>