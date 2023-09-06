<<<<<<< HEAD
<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "boxLeft.php" ?>
    </div>
    <div class="boxphai">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <img src="view/images/banner/bn1.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="view/images/banner/bn2.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="view/images/banner/bn3.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="view/images/banner/bn4.jpg">
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <?php
            function new_name($name)
            {
                $n = strlen($name);
                $new_name = $name;
                if ($n < 20) {
                    echo $new_name;
                } else {
                    $my_new_name = substr($new_name, 0, 20);
                    echo $my_new_name;
                }

            }
            foreach ($spmoi as $sp) {
                extract($sp);
                $linksp = "index.php?act=chi_tiet_sp&idsp=" . $id;
                $img = $img_path . $image;
                ?>
                <div class="boxsp">
                    <div class="row image"><a href="<?= $linksp ?>"><img src="<?= $img ?>" alt=""></a></div>
                    <div class="price"><?= number_format($price, 0, ".", ".") ?>đ</div>
                    <div class="tensp"><a href="<?= $linksp ?>"><?php new_name($name); ?></a></div>
                    <form action="index.php?act=addtocart" method="post">
                        <div class="row btnaddtocart mb10">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input type="hidden" name="name" value="<?= $name ?>">
                            <input type="hidden" name="image" value="<?= $image ?>">
                            <input type="hidden" name="price" value="<?= $price ?>">
                            <?php
                            if (isset($_SESSION['username'])) {
                                extract($_SESSION['username']);
                                if ($role != 1) { ?>
                                    <input type="submit" name="addtocart" value="Add to cart">
                                <?php }
                            }
                            ?>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="row mb footer" style="text-align: center">
    VTNH-MCT-DAM-WEB2041
</div>
</div>
<?php
// Giới hạn ký tự tiêu đề trong WordPress

=======
        <div class="row mb ">
            <!-- mb: margin bottom -- mr: margin right-->
            <div class="boxtrai mr">
                <?php include "boxLeft.php" ?>
            </div>
            <div class="boxphai">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img src="view/images/banner/bn1.jpg">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/images/banner/bn2.jpg">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/images/banner/bn3.jpg">
                            </div>

                            <div class="mySlides fade">
                                <img src="view/images/banner/bn4.jpg">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($spmoi as $sp){
                            extract($sp);
                            $linksp="index.php?act=chi_tiet_sp&idsp=".$id;
                            $img = $img_path.$image; ?>
                            <div class="boxsp">
                                <div class="row image"><a href="<?=$linksp?>"><img src="<?=$img?>" alt=""></a></div>
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
        <div class="row mb footer">
            Copyright @ 2022
        </div>
    </div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
