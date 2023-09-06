<div class="row">
            <div class="row formtitle">
                <h1>Danh sách tài khoản</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                            foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $xoatk = "index.php?act=xoatk&id=".$id;
                            $suatk = "index.php?act=suatk&id=".$id;
                            ?><tr>
                                <td><?=$id?></td>
                                <td><?=$username?></td>
                                <td><?=$password?></td>
                                <td><?=$email?></td>
                                <td><?=$address?></td>
                                <td><?=$phone?></td>
                                <td><?php if($role==1){echo "Quản trị viên";}else{echo "Khách hàng";}?></td>
                                <td><a href="javascript:confirmDelete('<?=$xoatk?>')"><input type="button" value="Xóa"></a><a href="<?=$suatk?>"><input type="button" value="Sửa"></a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn xóa tài khoản này?")){
                        document.location = deleUrl;
                    }
                }
                </script>
                </div>
            </div>
        </div>
