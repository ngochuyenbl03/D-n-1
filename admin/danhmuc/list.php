<<<<<<< HEAD
        <div class="row">
            <div class="row formtitle">
                <h1>Danh sach loai hang</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten loai</th>
                            <th>Hành động</th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $name ?></td>
                                <td><a href="<?= $suadm ?>"><input type="button" value="Sửa" name="" id=""></a> <a href="javascript:confirmDelete('<?= $xoadm ?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <script>
                    function confirmDelete(deleUrl) {
                        if (confirm("Bạn chắc chắn muốn xóa danh mục này?")) {
                            document.location = deleUrl;
                        }
                    }
                </script>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                    <a href="index.php?act=adddm"><input type="button" value="Nhap them"></a>
                </div>
            </div>
=======
        <div class="row">
            <div class="row formtitle">
                <h1>Danh sach loai hang</h1>
            </div>
            <div class="row formcontent">
                <div class="row formdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten loai</th>
                            <th>Hành động</th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=" . $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;
                        ?>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $id ?></td>
                                <td><?= $name ?></td>
                                <td><a href="<?= $suadm ?>"><input type="button" value="Sửa" name="" id=""></a> <a href="javascript:confirmDelete('<?= $xoadm ?>')"><input type="button" value="Xóa"></a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <script>
                    function confirmDelete(deleUrl) {
                        if (confirm("Bạn chắc chắn muốn xóa danh mục này?")) {
                            document.location = deleUrl;
                        }
                    }
                </script>
                <div class="row mb10">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                    <a href="index.php?act=adddm"><input type="button" value="Nhap them"></a>
                </div>
            </div>
>>>>>>> 4efff5ec34ac3df5b2a063c2e7e8c697533e8d7a
        </div>