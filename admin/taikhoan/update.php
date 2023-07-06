<?php

    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>  
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT TÀI KHOẢN</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Tên đăng nhập<br>
                        <input type="text" name="username" value="<?php if(isset($username)&&($username!="")) echo $username; ?>"> 
                    </div>
                    <div class="row mb10">
                        Mật khẩu<br>
                        <input type="password" name="password" value="<?php if(isset($password)&&($password!="")) echo $password; ?>">
                    </div>
                    <div class="row mb10">
                        Email<br>
                        <input type="text" name="email" value="<?php if(isset($email)&&($email!="")) echo $email; ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ<br>
                        <input type="text" name="address" value="<?php if(isset($address)&&($address!="")) echo $address; ?>">
                    </div>
                    <div class="row mb10">
                        Số điện thoại<br>
                        <input type="number" name="phone" value="<?php if(isset($phone)&&($phone!="")) echo $phone; ?>">
                    </div>
                    <div class="row mb10">
                        Phân quyền<br>
                    <select name="idrole" id="">
                        <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listrole as $role) {
                                    extract($role);
                                    if($role==$id) echo '<option value="'.$id.'" selected>'.$name.'</option>';
                                    else echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?> 
                    </select>
                    </div>
                    <br>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$_GET['id']?>">
                        <input type="submit" name="cap_nhattk" value="Cap nhat"></input>
                        <input type="reset" value="Nhap lai"></input>
                        <a href="index.php?act=dskh"><input type="button" value="Danh sach"></input></a>
                    </div>
                    <?php
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    } 
                    ?>
                </form>
            </div>
        </div>
    </div>
