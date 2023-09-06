<div class="row">
            <div class="row formtitle">
                <h1>Danh sách hóa đơn</h1>
            </div>
            <!-- <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th></th>
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
                            ?><tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?=$id?></td>
                                <td><?=$username?></td>
                                <td><?=$password?></td>
                                <td><?=$email?></td>
                                <td><?=$address?></td>
                                <td><?=$phone?></td>
                                <td><?=$role?></td>
                                <td><a href="javascript:confirmDelete('<?=$xoatk?>')"><input type="button" value="Hủy đơn"></a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn hủy tài khoản này?")){
                        document.location = deleUrl;
                    }2036
                    
                }
                </script>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                </div> -->
            </div>
        </div>

