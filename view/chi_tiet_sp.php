<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <div class="boxtitle">Danh muc: <?php if(is_array($tendm)) {extract($tendm); echo $name;} ?></div>
            <div class="row boxcontent2">
                <?php
                //extract($onesp);
                $img = $img_path.$image;
                ?>
                <table>
                    <tr>
                        <td colspan="2"><img src="<?=$img?>" width="40%" style="border-radius: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><?=$name?></td>
                    </tr>
                    <tr>
                        <td>Giá sản phẩm</td>
                        <td><?= number_format($price, 0, ".", ".") ?>đ</td>
                    </tr>
                    <tr>
                        <td>Mô tả sản phẩm</td>
                        <td><?=$mo_ta?></td>
                    </tr>
                </table>   
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
        </script>
        <div class="row mb10" id="binhluan">
            
        </div>
        <div class="row mb10">
            <div class="boxtitle">Sản phẩm cùng loại</div> 
            <div class="row boxcontent">
                <?php 
                    foreach ($sp_cl as $sp_cl) {
                        extract($sp_cl);
                        $linksp = "index.php?act=chi_tiet_sp&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>

