<<<<<<< HEAD
<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "view/boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            
            <div class="boxtitle">Cảm ơn</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <h1>Cảm ơn quý khách đã đặt hàng</h1>
                </form>
            </div>
        </div>
        <?php
          if(isset($bill)&&(is_array($bill))){
            extract($bill);
            $pttt = get_pttt($bill['bill_pttt']);
          }
        ?>
        <div class="row mb10">
            <div class="boxtitle">Ma don hang</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <li>MA Don Hang: <?=$bill['id'];?></li>
                      <li>Ngay Dat Hang: <?=$bill['ngaydathang'];?></li>  
                      <li>Mã vận chuyển: XSHOPMVD<?=$bill['total'];?></li>  
                      <li>Phuong thuc thanh toan: <?=$pttt?></li>
                </form>
            </div>
        </div>
        <div class="row mb10">
            
            <div class="boxtitle">Thông tin người đặt hàng</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?=$bill['bill_name'];?></td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td><?=$bill['bill_address'];?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email'];?></td>
                        </tr>

                        <tr>
                            <td>Điện thoại</td>
                            <td><?=$bill['bill_tel'];?></td>
                        </tr>
                      </table>
                </form>
            </div>
        </div>

        <div class="row mb10">
            
            <div class="boxtitle">Chi tiet giỏ hàng</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                <div class="row mb10">
         <table border="1">
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                
            </tr>
           <?php
              bill_chi_tiet($billct);
            
           ?>
         </table>
                    </div>
                </form>
            </div>
        </div>

        
    </div>
    <div class="row mb footer">Copyright @ 2022</div>
=======
<div class="row mb ">
    <!-- mb: margin bottom -- mr: margin right-->
    <div class="boxtrai mr">
        <?php include "view/boxLeft.php"; ?>
    </div>
    <div class="boxphai">
        <div class="row mb10">
            
            <div class="boxtitle">Cảm ơn</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <h1>Cảm ơn quý khách đã đặt hàng</h1>
                </form>
            </div>
        </div>
        <?php
          if(isset($bill)&&(is_array($bill))){
            extract($bill);
            $pttt = get_pttt($bill['bill_pttt']);
          }
        ?>
        <div class="row mb10">
            <div class="boxtitle">Ma don hang</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <li>MA Don Hang: <?=$bill['id'];?></li>
                      <li>Ngay Dat Hang: <?=$bill['ngaydathang'];?></li>  
                      <li>Mã vận chuyển: XSHOPMVD<?=$bill['total'];?></li>  
                      <li>Phuong thuc thanh toan: <?=$pttt?></li>
                </form>
            </div>
        </div>
        <div class="row mb10">
            
            <div class="boxtitle">Thông tin người đặt hàng</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                      <table>
                        <tr>
                            <td>Người đặt hàng</td>
                            <td><?=$bill['bill_name'];?></td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td><?=$bill['bill_address'];?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><?=$bill['bill_email'];?></td>
                        </tr>

                        <tr>
                            <td>Điện thoại</td>
                            <td><?=$bill['bill_tel'];?></td>
                        </tr>
                      </table>
                </form>
            </div>
        </div>

        <div class="row mb10">
            
            <div class="boxtitle">Chi tiet giỏ hàng</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                <div class="row mb10">
         <table border="1">
            <tr>
                <th>STT</th>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                
            </tr>
           <?php
              bill_chi_tiet($billct);
            
           ?>
         </table>
                    </div>
                </form>
            </div>
        </div>

        
    </div>
    <div class="row mb footer">Copyright @ 2022</div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
</div>