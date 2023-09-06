<<<<<<< HEAD
<?php
    session_start();
    include "model/pdo.php";
    include "model/danh_muc.php";
    include "model/san_pham.php";
    include "model/tai_khoan.php";
    include "model/cart.php";
    include "view/header.php";
    include "global.php";
    

    if(!isset($_SESSION['mycart'])){$_SESSION['mycart']=[];} ;

    $spmoi = loadAll_sanpham_home();
    $dsdm = loadAll_danhmuc();
    $dstop10 = loadAll_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanphamofdm':
                if (isset($_POST['kyw'])&&(($_POST['kyw'])!="")) {
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                if (isset($_GET['iddm'])&&(($_GET['iddm'])>0)) {
                    $iddm = $_GET['iddm'];
                } else{
                    $iddm = 0;
                }
                $dssp = loadAll_sanpham_index($kyw,$iddm);
                $tendm = loadOne_danhmuc($iddm);
                include "view/sanphamofdm.php";
                break;
            case 'chi_tiet_sp':
                if (isset($_GET['idsp'])&&($_GET['idsp'])>0) {
                    $id = $_GET['idsp'];
                    $onesp = loadOne_sanpham($id);
                    extract($onesp);
                    $sp_cl = load_sanpham_cungloai($iddm);
                    $tendm = loadOne_danhmuc($iddm);
                    include "view/chi_tiet_sp.php";
                } else{
                    include "view/home.php";
                }
                break;
            case 'dangky':
                    if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                        if($_POST['email']=="" || $_POST['username']=="" || $_POST['password']==""){
                            $thongbao = "Vui lòng điền đầy đủ thông tin cần thiết để hoàn tất đăng ký.";
                        } else {
                            $email = $_POST["email"];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            insert_taikhoan($username,$password,$email);
                            $thongbao = " Đăng ký thành công. Bây giờ bạn có thể đăng nhập.";
                        }
                    }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $check_user = check_user($username,$password);
                    if(is_array($check_user)){
                        $_SESSION['username'] = $check_user;
                        $thongbao = "Đăng nhập thành công.";
                        header('location: index.php');
                    } else{
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu hoặc đăng ký thành viên để thực hiện các chức năng.";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'edittk':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $id = $_POST['id'];
                    $idrole=$_POST['idrole'];

                    update_taikhoan($id,$username,$password,$email,$address,$phone,$idrole);
                    $_SESSION['username'] = check_user($username,$password);
                    header('location: index.php?act=viewtk');

                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case "viewtk":
                include "view/taikhoan/viewtaikhoan.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $username = $_POST['tendn'];
                    $email = $_POST['email'];

                    $check_quenmk = check_quenmk($username,$email);
                    if(is_array($check_quenmk)){
                        $thongbao = "Mật khẩu của bạn là: ".$check_quenmk['password'];
                    } else{
                        $thongbao = "Tên đăng nhập chưa đúng hoặc email này chưa được đăng ký. Hãy thử lại.";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'addtocart':
                // add thông tin sản phẩm từ form add to cart đến session
                if (isset($_POST['addtocart'])&&($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['image'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $spadd = [$id,$name,$img,$price,$soluong];
                    array_push($_SESSION['mycart'],$spadd);
                }

                include "view/gio_hang/viewcart.php";
                break;
            case 'thoat':
                session_unset();
                header('location: index.php');
                break;
            case "viewcart":
                include "view/gio_hang/viewcart.php";
                break;
            case "delcart":
                    if(isset($_GET['idcart'])){
                        unset($_SESSION['mycart'][$_GET['idcart']]);
                    } else{
                        $_SESSION['mycart'] = [];
                    }
                header('location: index.php?act=viewcart');
                break;
            case 'bill':
                include "view/gio_hang/bill.php";
                break;
            case 'billconfirm':
                if (isset($_POST['confirm'])&&($_POST['confirm'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngaydathang = date("h:i:sa d/m/Y");
                    $tongdonhang = tongdonhang();
                    $pttt = $_POST['pttt'];
                    $idbill=insert_bill($name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang);

                    foreach($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['username']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$tongdonhang,$idbill);
                    }
                    $_SESSION['cart']=[];
                }
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "view/gio_hang/billconfirm.php";
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

    include "view/footer.php";
=======
<?php
    session_start();
    include "model/pdo.php";
    include "model/danh_muc.php";
    include "model/san_pham.php";
    include "model/tai_khoan.php";
    include "model/cart.php";
    include "view/header.php";
    include "global.php";
    

    if(!isset($_SESSION['mycart'])){$_SESSION['mycart']=[];} ;

    $spmoi = loadAll_sanpham_home();
    $dsdm = loadAll_danhmuc();
    $dstop10 = loadAll_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'sanphamofdm':
                if (isset($_POST['kyw'])&&(($_POST['kyw'])!="")) {
                    $kyw = $_POST['kyw'];
                } else{
                    $kyw = "";
                }
                if (isset($_GET['iddm'])&&(($_GET['iddm'])>0)) {
                    $iddm = $_GET['iddm'];
                } else{
                    $iddm = 0;
                }
                $dssp = loadAll_sanpham_index($kyw,$iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanphamofdm.php";
                break;
            case 'chi_tiet_sp':
                if (isset($_GET['idsp'])&&($_GET['idsp'])>0) {
                    $id = $_GET['idsp'];
                    $onesp = loadOne_sanpham($id);
                    extract($onesp);
                    $sp_cl = load_sanpham_cungloai($id,$iddm);
                    include "view/chi_tiet_sp.php";
                } else{
                    include "view/home.php";
                }
                break;
            case 'dangky':
                    if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                        if($_POST['email']=="" || $_POST['username']=="" || $_POST['password']==""){
                            $thongbao = "Vui lòng điền đầy đủ thông tin cần thiết để hoàn tất đăng ký.";
                        } else {
                            $email = $_POST["email"];
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            insert_taikhoan($username,$password,$email);
                            $thongbao = " Đăng ký thành công. Bây giờ bạn có thể đăng nhập.";
                        }
                    }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $check_user = check_user($username,$password);
                    if(is_array($check_user)){
                        $_SESSION['username'] = $check_user;
                        $thongbao = "Đăng nhập thành công.";
                        header('location: index.php');
                    } else{
                        $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu hoặc đăng ký thành viên để thực hiện các chức năng.";
                    }
                }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'edittk':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $id = $_POST['id'];
                    $idrole=$_POST['idrole'];

                    update_taikhoan($id,$username,$password,$email,$address,$phone,$idrole);
                    $_SESSION['username'] = check_user($username,$password);
                    header('location: index.php?act=viewtk');

                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case "viewtk":
                include "view/taikhoan/viewtaikhoan.php";
                break;
            case 'quenmk':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $username = $_POST['tendn'];
                    $email = $_POST['email'];

                    $check_quenmk = check_quenmk($username,$email);
                    if(is_array($check_quenmk)){
                        $thongbao = "Mật khẩu của bạn là: ".$check_quenmk['password'];
                    } else{
                        $thongbao = "Tên đăng nhập chưa đúng hoặc email này chưa được đăng ký. Hãy thử lại.";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;
            case 'addtocart':
                // add thông tin sản phẩm từ form add to cart đến session
                if (isset($_POST['addtocart'])&&($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $img = $_POST['image'];
                    $price = $_POST['price'];
                    $soluong = 1;
                    $spadd = [$id,$name,$img,$price,$soluong];
                    array_push($_SESSION['mycart'],$spadd);
                }

                include "view/gio_hang/viewcart.php";
                break;
            case 'thoat':
                session_unset();
                header('location: index.php');
                break;
            case "viewcart":
                include "view/gio_hang/viewcart.php";
                break;
            case "delcart":
                    if(isset($_GET['idcart'])){
                        unset($_SESSION['mycart'][$_GET['idcart']]);
                    } else{
                        $_SESSION['mycart'] = [];
                    }
                header('location: index.php?act=viewcart');
                break;
            case 'bill':
                include "view/gio_hang/bill.php";
                break;
            case 'billconfirm':
                if (isset($_POST['confirm'])&&($_POST['confirm'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngaydathang = date("h:i:sa d/m/Y");
                    $tongdonhang = tongdonhang();
                    $pttt = $_POST['pttt'];
                    $idbill=insert_bill($name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang);

                    foreach($_SESSION['mycart'] as $cart){
                        insert_cart($_SESSION['username']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                    }
                    $_SESSION['cart']=[];
                }
                $bill=loadone_bill($idbill);
                $billct=loadall_cart($idbill);
                include "view/gio_hang/billconfirm.php";
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
        }
    } else {
        include "view/home.php";
    }

    include "view/footer.php";
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
