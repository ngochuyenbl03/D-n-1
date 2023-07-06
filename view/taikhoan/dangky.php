<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "view/boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" >
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                    <input type="text" name="username" >
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="password" >
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" value="Nhập lại">
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")){
                            echo "<br>".$thongbao;?>
                            <br><a href="index.php?act=dangnhap">Bạn đã có tài khoản? Đăng nhập tại đây</a>
                    <?php    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
