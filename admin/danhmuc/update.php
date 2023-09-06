<<<<<<< HEAD
<?php
    
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CAP NHAT LOAI HANG HOA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class=" row mb10">
                        Ma loai<br>
                        <input type="text" name="maloai" disabled></input>
                    </div>
                    <div class="row mb10">
                        Ten loai<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="cap_nhat" value="Cap nhat"></input>
                        <input type="reset" value="Nhap lai"></input>
                        <a href="index.php?act=listdm"><input type="button" value="Danh sach"></input></a>
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
=======
<?php
    
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CAP NHAT LOAI HANG HOA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class=" row mb10">
                        Ma loai<br>
                        <input type="text" name="maloai" disabled></input>
                    </div>
                    <div class="row mb10">
                        Ten loai<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="cap_nhat" value="Cap nhat"></input>
                        <input type="reset" value="Nhap lai"></input>
                        <a href="index.php?act=listdm"><input type="button" value="Danh sach"></input></a>
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
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
