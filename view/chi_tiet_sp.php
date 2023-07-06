<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            <?php
                extract($onesp); 
            ?>
            <div class="boxtitle"><?=$name?></div>
            <div class="row boxcontent">
                <?php 
                    extract($onesp);
                    $img = $img_path.$image;
                    echo '<div class="row mb10"><img src="'.$img.'" style="margin-left:37%;border-radius: 5px;"></div>';
                    echo " Tên sản phẩm: ".$name."<br>";
                    echo " Giá sản phẩm: ".$price."<br>";
                    echo " Mô tả sản phẩm: ".$mo_ta;
                ?>   
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
