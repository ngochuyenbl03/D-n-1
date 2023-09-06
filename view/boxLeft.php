<<<<<<< HEAD

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
                                $img = $img_path.$image;
                                echo '<div class="row mb10 top10">
                                        <img src="'.$img.'" alt="">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
=======

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
                                $img = $img_path.$image;
                                echo '<div class="row mb10 top10">
                                        <img src="'.$img.'" alt="">
                                        <a href="'.$linksp.'">'.$name.'</a>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
