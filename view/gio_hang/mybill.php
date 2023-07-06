<!-- <!-- <div class="row mb ">
 mb: margin bottom -- mr: margin right
    <div class="boxtrai mr">
        <?php include "view/boxLeft.php"; ?>
    </div>
    <div class="boxphai">
       <div class="row mb10">
            
            <div class="boxtitle">Chi tiet giỏ hàng</div>
            <div class="row boxcontent">
                <form action="index.php?act=billconfirm" method="post">
                <div class="row mb10">
         <table border="1">
            <tr>
                
                <th>Mã dơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng mặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                
            </tr>
           <?php
            //   if(is_array($listbill)){
            //     foreach($listbill as $bill){
            //         extract($bill);
            //         $ttdh=get_ttdh($bill['bill_status']);
            //         $countsp= loadall_cart_count($bill['id']);
            //        echo '<tr>
                    
            //         <td>DAM-'.$bill['id'].'</td>
            //         <td>'.$bill['ngaydathang'].'</td>
            //         <td>'.$countsp.'</td>
            //         <td>'.$bill['total'].'</td>
            //         <td>'.$ttdh.'</td>

            //       </tr>';
            //     }
            //   }
            
           ?>
         </table>
                    </div>
                </form>
            </div>
        </div>
         
    </div>
    <div class="row mb footer">Copyright @ 2022</div>
</div>-->