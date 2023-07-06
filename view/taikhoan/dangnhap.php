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
                        $linkdm="index.php?act=sanphamofdm&iddm=".$id;
                        echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
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
                    $linksp = "index.php?act=chi_tiet_sp&idsp=".$id;
                    $image = $img_path.$image;
                    echo '<div class="row mb10 top10">
                            <img src="'.$image.'" alt="">
                            <a href="'.$linksp.'">'.$name.'</a>
                        </div>';
                }
            ?>
        </div>
    </div>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <div class="boxtitle">Đăng nhập</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=dangnhap" method="post">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="username" id="">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="password" id="">
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="">Ghi nhớ tài khoản
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="dangnhap" value="Đăng nhập">
                    </div>
                </form>
                <li>
                    <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                </li>
                <li>
                    <a href="index.php?act=dangky">Đăng ký thành viên</a>
                </li>
                <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
