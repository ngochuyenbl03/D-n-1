<?php
function viewcart($del)
{
    $img_path = "Uploads/";
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td = '';
    } ?>
    <table>
        <tr>
            <th>Stt</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <?= $xoasp_th ?>
        </tr>
        <?php
        foreach ($_SESSION['mycart'] as $cart) {
            $img = $img_path . $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong = $tong + $ttien;
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="<?= $img ?>" height="80px"></td>
                <td><?= $cart[1] ?></td>
                <td>$<?= $cart[3] ?></td>
                <td><?= $cart[4] ?></td>
                <td>$<?= $ttien ?></td>
                <?= $xoasp_td ?>
            </tr>
        <?php $i += 1;
        } ?>
        <tr>
            <td colspan="5">Tổng tiền tất cả đơn hàng</td>
            <td colspan="2">$<?= $tong ?></td>
        </tr>
    </table>
<?php }
function bill_chi_tiet($listbill)
{
    $img_path = "Uploads/";
    $tong = 0;
    $i = 0;


    foreach ($listbill as $cart) {
        $img = $img_path . $cart['img'];
        $ttien = $cart['price'] * $cart['soluong'];
        $tong = $tong + $ttien;

        echo '<tr>
            <td>' . $i . '</td>
            <td><img src="' . $img . '" height="80px"></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . $cart['thanhtien'] . '</td>
            
            
        </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="5">Tổng tiền tất cả đơn hàng</td>
                <td colspan="2">' . $tong . '</td>
                
            </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
    }
    return $tong;
}
function get_pttt($n)
{
    switch ($n) {
        case '1':
            $tt = "Thanh toán khi nhận hàng";
            break;
        case '2':
            $tt = "Thẻ tín dụng/ Thẻ ghi nợ";
            break;
        case '3':
            $tt = "Ví điện tử MOMO / ZALOPAY";
            break;
        default:
            $tt = "Thanh toán khi nhận hàng";
            break;
    }
    return $tt;
}
function loadAll_thongke()
{
    $sql = "select danh_muc.id as madm, danh_muc.name as tendm, count(san_pham.id) as countsp, 
    min(san_pham.price) as minprice, max(san_pham.price) as maxprice, avg(san_pham.price) as avgprice";
    $sql .= " from san_pham left join danh_muc on danh_muc.id=san_pham.iddm";
    $sql .= " group by danh_muc.id order by danh_muc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function insert_bill($name, $email, $address, $phone, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) value('$name','$email','$address','$phone','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) value('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

?>