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
            <div class="boxtitle">Thông tin tài khoản</div>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Tên đăng nhập</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                    </tr>
                    <?php 
                        if(isset($_SESSION['username'])) { 
                            extract($_SESSION['username']);
                    ?>
                        <tr>
                            <td><?=$id?></td>
                            <td><?=$username?></td>
                            <td><?=$email?></td>
                            <td><?=$address?></td>
                            <td><?=$phone?></td>
                        </tr>
                    <?php }?>
                    <tr>
                        <td colspan="5"><a href="index.php?act=edittk"><input type="button" value="Cập nhật tài khoản"></a>
                            <a href="index.php?act=thoat"><input type="button" value="Đăng xuất"></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
