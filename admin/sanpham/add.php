<<<<<<< HEAD
<div class="row">
            <div class="row formtitle">
                <h1>THEM MOI LOAI SAN PHAM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Ma san pham<br>
                        <input type="text" name="masp" disabled> 
                    </div>
                    <div class="row mb10">
                        Ten san pham<br>
                        <input type="text" name="tensp"> 
                    </div>
                    <div class="row mb10">
                        Gia san pham<br>
                        <input type="text" name="price">
                    </div>
                    <div class="row mb10">
                        Hinh anh san pham<br>
                        <input type="file" name="image"> 
                    </div>
                    <div class="row mb10">
                        Mo ta san pham<br>
                        <textarea name="mota" cols="130" rows="15"></textarea> 
                    </div>
                    <div class="row mb10">
                        Danh muc <br>
                        <select name="iddm" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="add_new" value="Them moi"> 
                        <input type="reset" value="Nhap lai"> 
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"> </a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    } 
                    ?>
                </form>
            </div>
        </div>
=======
<div class="row">
            <div class="row formtitle">
                <h1>THEM MOI LOAI SAN PHAM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Ma san pham<br>
                        <input type="text" name="masp" disabled> 
                    </div>
                    <div class="row mb10">
                        Ten san pham<br>
                        <input type="text" name="tensp"> 
                    </div>
                    <div class="row mb10">
                        Gia san pham<br>
                        <input type="text" name="price">
                    </div>
                    <div class="row mb10">
                        Hinh anh san pham<br>
                        <input type="file" name="image"> 
                    </div>
                    <div class="row mb10">
                        Mo ta san pham<br>
                        <textarea name="mota" cols="30" rows="10"></textarea> 
                    </div>
                    <div class="row mb10">
                        Danh muc <br>
                        <select name="iddm" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="add_new" value="Them moi"> 
                        <input type="reset" value="Nhap lai"> 
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"> </a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    } 
                    ?>
                </form>
            </div>
        </div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
    </div>