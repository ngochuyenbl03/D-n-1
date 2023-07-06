<div class="row">
            <div class="row formtitle">
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Mã khách hàng</th>
                            <th>Mã sản phẩm</th>
                            <th>Thời gian</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                            foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl = "index.php?act=xoabl&id=".$id;
                            ?><tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?=$id?></td>
                                <td><?=$noi_dung?></td>
                                <td><?=$iduser?></td>
                                <td><?=$idpro?></td>
                                <td><?=$date?></td>
                                <td><a href="javascript:confirmDelete('<?=$xoabl?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
                <script>
                function confirmDelete(deleUrl){
                    if (confirm("Bạn chắc chắn muốn xóa bình luận này?")){
                        document.location = deleUrl;
                    }
                }
                </script>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                </div>
            </div>
        </div>
