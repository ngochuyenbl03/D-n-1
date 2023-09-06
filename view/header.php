<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHSHOP</title>
    <link rel="stylesheet" href="view\css\style.css">
    <style>
        .header img {
            width: 30%;
            height: 50%;
            background-color: white;
            margin-left: 35%;
        }

        .header {
            font-size: 1vw;
            color: rgb(0, 0, 0);
            border-radius: 5px;
        }
        .dongchu {
            margin-top: 3px;
            color: darkorange;
            font-size: 20px;
            font-weight: bolder;
        }
    </style>
</header>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <a href="index.php"><img src="view\images\z4615444526916_7ba923700ae268ce1de68fbea59974ab.jpg" alt="error"></a>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    extract($_SESSION['username']);
                    if ($role == 1) { ?>
                        <li>
                            <a href="admin/index.php">Vào trang quản trị</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
                    <?php } ?>
                    <li><a href="index.php?act=viewtk">Thông tin tài khoản</a></li>
                    <li>Xin chào, <?= $username ?></li>
                <?php } else { ?>
                    <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                    <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="dongchu">
            <marquee behavior="alternate" loop="-1">
                Welcome to TechShop - The kingdom of the tech heaven!
            </marquee>
        </div>