<div class="row">
            <div class="row frmtitle">
                <h1>THEM MOI LOAI HANG HOA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class=" row mb10">
                        Ma loai<br>
                        <input type="text" name="maloai" disabled></input>
                    </div>
                    <div class="row mb10">
                        Ten loai<br>
                        <input type="text" name="tenloai" required></input>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="submit" name="add_new" value="Them moi"></input>
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