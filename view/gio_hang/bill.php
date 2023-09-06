<<<<<<< HEAD
<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanphamofdm&iddm=" . $id;
                        echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searchbox">
                <form action="index.php?act=sanphamofdm" method="post">
                    <input type="text" name="kyw" placeholder="Search something...">
                    <input type="submit" name="search" value="Search">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=chi_tiet_sp&idsp=" . $id;
                    $img = $img_path . $image;
                    echo '<div class="row mb10 top10">
                                <img src="' . $img . '" alt="">
                                <a href="' . $linksp . '">' . $name . '</a>
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <form action="index.php?act=billconfirm" method="post">
                <div class="row mb">
                    <div class="boxtitle">Thông tin đặt hàng</div>
                    <div class="row boxcontent billform">
                        <table>
                            <?php
                            if (isset($_SESSION['username'])) {
                                $name = $_SESSION['username']['username'];
                                $address = $_SESSION['username']['address'];
                                $email = $_SESSION['username']['email'];
                                $phone = $_SESSION['username']['phone'];
                            } else {
                                $name = "";
                                $address = "";
                                $email = "";
                                $phone = "";
                            }
                            ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?= $name ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>" required></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="phone" value="<?= $phone ?>" required></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Phương thức thanh toán</div>
                    <div class="row boxcontent">
                        <table>
                            <tr>
                                <td><input type="radio" value="1" name="pttt" id="" checked>Thanh toán khi nhận hàng</td>
                                <td><input type="radio" value="2" name="pttt" id="">Thẻ tín dụng/ Thẻ ghi nợ</td>
                                <td><input type="radio" value="3" name="pttt" id="">Ví điện tử MOMO / ZALOPAY</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Giỏ hàng của tôi</div>
                    <div class="row boxcontent">
                        <?php viewcart(0); ?>
                    </div>
                </div>
                <div class="row mb bill">
                    <input type="submit" value="Xác nhận đặt hàng" name="confirm">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
=======
<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanphamofdm&iddm=" . $id;
                        echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="boxfooter searchbox">
                <form action="index.php?act=sanphamofdm" method="post">
                    <input type="text" name="kyw" placeholder="Search something...">
                    <input type="submit" name="search" value="Search">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=chi_tiet_sp&idsp=" . $id;
                    $img = $img_path . $image;
                    echo '<div class="row mb10 top10">
                                <img src="' . $img . '" alt="">
                                <a href="' . $linksp . '">' . $name . '</a>
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <form action="index.php?act=billconfirm" method="post">
                <div class="row mb">
                    <div class="boxtitle">Thông tin đặt hàng</div>
                    <div class="row boxcontent billform">
                        <table>
                            <?php
                            if (isset($_SESSION['username'])) {
                                $name = $_SESSION['username']['username'];
                                $address = $_SESSION['username']['address'];
                                $email = $_SESSION['username']['email'];
                                $phone = $_SESSION['username']['phone'];
                            } else {
                                $name = "";
                                $address = "";
                                $email = "";
                                $phone = "";
                            }
                            ?>
                            <tr>
                                <td>Người đặt hàng</td>
                                <td><input type="text" name="name" value="<?= $name ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>" required></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="phone" value="<?= $phone ?>" required></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Phương thức thanh toán</div>
                    <div class="row boxcontent">
                        <table>
                            <tr>
                                <td><input type="radio" value="1" name="pttt" id="" checked>Thanh toán khi nhận hàng</td>
                                <td><input type="radio" value="2" name="pttt" id="">Thẻ tín dụng/ Thẻ ghi nợ</td>
                                <td><input type="radio" value="3" name="pttt" id="">Ví điện tử MOMO / ZALOPAY</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Giỏ hàng của tôi</div>
                    <div class="row boxcontent">
                        <?php viewcart(0); ?>
                    </div>
                </div>
                <div class="row mb bill">
                    <input type="submit" value="Xác nhận đặt hàng" name="confirm">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
</div>