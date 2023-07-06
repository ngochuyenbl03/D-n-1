<?php

    if(is_array($sanpham)){
        extract($sanpham);
    }
    $imagePath = "../Uploads/".$image;

    if(is_file($imagePath)){
        $img = "<img src='".$imagePath."' height='80px'>";
    } else{
        $img = "No image";
    }
?>  
<div class="row">
            <div class="row formtitle">
                <h1>CAP NHAT SAN PHAM</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Ten san pham<br>
                        <input type="text" name="name" value="<?php if(isset($name)&&($name!="")) echo $name; ?>"> 
                    </div>
                    <div class="row mb10">
                        Gia san pham<br>
                        <input type="text" name="price" value="<?php if(isset($price)&&($price!="")) echo $price; ?>">
                    </div>
                    <div class="row mb10">
                        Hinh anh san pham<br>
                        <input type="file" name="image"><?php if(isset($img)&&($img!="")) echo $img; ?>
                    </div>
                    <div class="row mb10">
                        Mo ta san pham<br>
                        <textarea name="mo_ta" cols="30" rows="10"><?php if(isset($mo_ta)&&($mo_ta!="")) echo $mo_ta; ?></textarea> 
                    </div>
                    <div class="row mb10">
                        Danh muc<br>
                    <select name="iddm" id="">
                        <option value="0" selected>Tat ca</option>
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if($iddm==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                    else echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?> 
                    </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <input type="submit" name="cap_nhat" value="Cap nhat"></input>
                        <input type="reset" value="Nhap lai"></input>
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"></input></a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    } 
                    ?>
                </form>
            </div>
        </div>
    </div>
