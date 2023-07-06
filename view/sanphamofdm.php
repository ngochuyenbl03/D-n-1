<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            
            <div class="boxtitle">
                <?php 
                    if(is_array($tendm)){
                        extract($tendm);
                        echo $name;
                    }
                ?>
            </div>
            <div class="row boxcontent">
                <div class="row">
                <?php
                    foreach($dssp as $ds){
                        extract($ds);
                        $linksp="index.php?act=chi_tiet_sp&idsp=".$id;
                        $img = $img_path.$image;?>
                        <div class="boxsp">
                            <div class="row"><a href="<?=$linksp?>"><img src="<?=$img?>" alt=""></a></div>
                            <div class="price">$<?=$price?></div>
                            <div class="tensp"><a href="<?=$linksp?>"><?=$name?></a></div>
                        <form action="index.php?act=addtocart" method="post">
                            <div class="row btnaddtocart mb10">
                                <input type="hidden" name="id" value="<?=$id?>">
                                <input type="hidden" name="name" value="<?=$name?>">
                                <input type="hidden" name="image" value="<?=$image?>">
                                <input type="hidden" name="price" value="<?=$price?>">
                                <?php 
                                    if(isset($_SESSION['username'])) { 
                                        extract($_SESSION['username']); 
                                        if($role!=1){ ?>
                                        <input type="submit" name="addtocart" value="Add to cart"> 
                                    <?php } }
                                ?>
                            </div>
                        </form>
                        </div>
                <?php }?>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row mb footer">Copyright @ 2022</div>
</div>
