<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "view/boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class="row boxcontent formtaikhoan ">
                <?php 
                    if(isset($_SESSION['username']) && (is_array($_SESSION['username']))){
                        extract($_SESSION['username']);
                    }
                ?>
                <form action="index.php?act=edittk" method="post">
                    <div class="row mb10">
                        Email <br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập <br>
                    <input type="text" name="username" value="<?=$username?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu <br>
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ <br>
                    <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại <br>
                        <input type="text" name="phone" value="<?=$phone?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
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
