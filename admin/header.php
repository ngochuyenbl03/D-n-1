<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headerAdmin">
            <h1>QUẢN TRỊ WEBSITE - ADMIN</h1>
        </div>
        <div class="row mb menu">
            <?php
                if (isset($_SESSION['username'])) {
                    extract($_SESSION['username']);
                } ?>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=listdm">Danh mục</a></li>
                <li><a href="index.php?act=listsp">Hàng hóa</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=dsbill">Hóa đơn</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="index.php?act=dxadmin">Vào X-Shop</a></li>
                <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                <!-- <li>Xin chào, <?= $username ?></li> -->
            </ul>
        </div>