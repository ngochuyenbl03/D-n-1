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
            <div class="boxtitle">Quên mật khẩu</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=quenmk" method="post">
                <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="tendn" >
                        <?php 
                        if(isset($thongbaotdn)&&($thongbaotdn!="")){
                            echo "<br>".$thongbaotdn."<br>"; }?>
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" >
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Nhận lại mật khẩu" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")){
                            echo "<br>".$thongbao."<br>"; ?>
                            <br><a href="index.php?act=dangnhap"><input type="button" value="Đăng nhập"></a>
                            <a href="index.php?act=dangky"><input type="button" value="Đăng ký thành viên"></a>
                    <?php   }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
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
            <div class="boxtitle">Quên mật khẩu</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=quenmk" method="post">
                <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="tendn" >
                        <?php 
                        if(isset($thongbaotdn)&&($thongbaotdn!="")){
                            echo "<br>".$thongbaotdn."<br>"; }?>
                    </div>
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" >
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Nhận lại mật khẩu" name="guiemail">
                        <input type="reset" value="Nhập lại">
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")){
                            echo "<br>".$thongbao."<br>"; ?>
                            <br><a href="index.php?act=dangnhap"><input type="button" value="Đăng nhập"></a>
                            <a href="index.php?act=dangky"><input type="button" value="Đăng ký thành viên"></a>
                    <?php   }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
