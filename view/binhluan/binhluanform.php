<?php
    session_start();

    include "../../model/pdo.php";
    include "../../model/binh_luan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadAll_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2">
            <table>
                <tr>
                    <th>Nội dung</th>
                    <th>ID khách hàng</th>
                    <th>Thời gian</th>
                </tr>
                <?php 
                    foreach ($dsbl as $bl) {
                        extract($bl);?>
                        <tr>
                        <td><?=$noi_dung?></td>
                        <td><?=$iduser?></td>
                        <td><?=$date?></td>
                        </tr>
                <?php }?>
            </table>
        </div>
        <?php 
        if(isset($_SESSION['username'])){ 
            extract($_SESSION['username']);
            if($role==1){
                echo "<br>"."Quản trị viên không được phép bình luận!";
            } else {?>
            <div class="boxfooter searchbox">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                    <input type="text" name="noi_dung" placeholder="Comment something...">
                    <input type="submit" name="guibinhluan" value="Đăng">
                </form>
            </div>
            <?php 
                if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                    $noi_dung = $_POST['noi_dung'];
                    $idpro = $_POST['idpro'];
                    $iduser = $_SESSION['username']['id'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $date = date("h:i:sa d/m/Y");
                    insert_binhluan($noi_dung,$iduser,$idpro,$date);
                    header("location: ".$_SERVER['HTTP_REFERER']);
                }
            }
        } else { ?>
            <div class="boxfooter searchbox">
                <a href="index.php?act=dangnhap">Đăng nhập để thực hiện chức năng bình luận</a>
            </div>
        <?php }?>
</div>

</body>
</html>