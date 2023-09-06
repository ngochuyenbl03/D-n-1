<?php
session_start();
include "../model/pdo.php";
include "../model/danh_muc.php";
include "../model/san_pham.php";
include "../model/tai_khoan.php";
include "../model/binh_luan.php";
include "../model/cart.php";
include "../model/phan_quyen.php";

if (isset($_SESSION['username'])) {
    extract($_SESSION['username']);
    if ($role == 1) {

        include "header.php";
        //controller

        if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
        // cotroller danh muc loai hang
        case "adddm":
        // kiem tra xem nguoi dung co click vao nut add hay khong
        if (isset($_POST['add_new']) && ($_POST['add_new'])) {
            $ten_loai = $_POST['tenloai'];
            insert_danhmuc($ten_loai);
            $thongbao = "Them moi thanh cong!";
        }
        include "danhmuc/add.php";
        break;
        case "listdm":
        $listdanhmuc = loadAll_danhmuc();
        include "danhmuc/list.php";
        break;
        case "xoadm":
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_danhmuc($_GET['id']);
        }
        $listdanhmuc = loadAll_danhmuc();
        include "danhmuc/list.php";
        break;
        case "suadm":
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $dm = loadOne_danhmuc($_GET['id']);
        }
        include "danhmuc/update.php";
        break;
        case "updatedm":
        if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
            $ten_loai = $_POST['tenloai'];
            $id  = $_POST['id'];
            updatedm_danhmuc($id, $ten_loai);
            $thongbao = "Cap nhat thanh cong!";
        }
        $listdanhmuc = loadAll_danhmuc();
        include "danhmuc/list.php";
        break;


        // cotroller danh muc san pham
        case "addsp":
        if (isset($_POST['add_new']) && ($_POST['add_new'])) {
            $ten_sp = $_POST['tensp'];
            $price = $_POST['price'];
            $mota = $_POST['mota'];
            $img = $_FILES['image']['name'];
            $iddm = $_POST['iddm'];

            $target_dir = "../Uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }

            insert_sanpham($ten_sp, $price, $img, $mota, $iddm);
            $thongbao = "Them moi thanh cong!";
        }
        $listdanhmuc = loadAll_danhmuc();
        include "sanpham/add.php";
        break;
        case "listsp":
        if (isset($_POST['list_search']) && ($_POST['list_search'])) {
            $kyw = $_POST['kyw'];
            $iddm = $_POST['iddm'];
        } else {
            $kyw = '';
            $iddm = 0;
        }
        $listdanhmuc = loadAll_danhmuc();
        $listsanpham = loadAll_sanpham_index($kyw, $iddm);
        include "sanpham/list.php";
        break;
        case "xoasp":
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_sanpham($_GET['id']);
        }
        $listsanpham = loadAll_sanpham_admin();
        include "sanpham/list.php";
        break;
        case "suasp":
        if (isset($_GET['id']) && (($_GET['id']) > 0)) {

            $sanpham = loadOne_sanpham($_GET['id']);
        }
        $listdanhmuc = loadAll_danhmuc();
        include "sanpham/update.php";
        break;
        case "updatesp":
        if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $mo_ta = $_POST['mo_ta'];
            $iddm = $_POST['iddm'];
            $img = $_FILES['image']['name'];

            $target_dir = "../Uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }

            update_sanpham($id, $name, $price, $img, $mo_ta, $iddm);
            $thongbao = "Cap nhat thanh cong!";
        }
        $listdanhmuc = loadAll_danhmuc();
        $listsanpham = loadAll_sanpham_admin();
        include "sanpham/list.php";
        break;
        // cotroller list users
        case "dskh":
        $listtaikhoan = loadAll_taikhoan();
        include "taikhoan/list.php";
        break;
        case "xoatk":
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_taikhoan($_GET['id']);
        }
        $listtaikhoan = loadAll_taikhoan();
        include "taikhoan/list.php";
        break;
        case 'suatk':
        if (isset($_GET['id']) && (($_GET['id']) > 0)) {

            $taikhoan = load_taikhoan_user($_GET['id']);
        }
        $listrole = loadAll_role();
        include "taikhoan/update.php";
        break;
        case "updatetk":
        if (isset($_POST['cap_nhattk']) && ($_POST['cap_nhattk'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $id = $_POST['id'];
            $idrole = $_POST['idrole'];

            update_taikhoan($id, $username, $password, $email, $address, $phone, $idrole);
            $_SESSION['username'] = check_user($username, $password);
            $thongbao = "Cap nhat thanh cong!";
        }
        $listtaikhoan = loadAll_taikhoan();
        $listrole = loadAll_role();
        include "taikhoan/list.php";
        break;
        // cotroller list comments
        case "dsbl":
        $listbinhluan = loadAll_binhluan_admin();
        include "binhluan/list.php";
        break;
        case 'thoat':
        session_unset();
        header('location: ../index.php');
        break;
        case "xoabl":
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            delete_binhluan($_GET['id']);
        }
        $listbinhluan = loadAll_binhluan_admin();
        include "binhluan/list.php";
        break;
        case "dxadmin":
        header('location: ../index.php');
        break;
        case 'thongke':
        $listthongke = loadAll_thongke();
        include "thongke/list.php";
        break;
        case 'bieudo':
        $listthongke = loadAll_thongke();
        include "thongke/bieudo.php";
        break;
        case 'dsbill':
        include "hoa_don/list.php";
        break;
        default:
        include "home.php";
        break;
        }
        } else {
        include "home.php";
        }

        include "footer.php";
    }else{
    echo "<div style='text-align: center'><img src='404.png' width='50%'><br><h1>Bạn không có quyền truy cập.</h1> <br> <a href=../index.php>Trở về trang chủ</a></div>";
 }
}