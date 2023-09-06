<div class="row">
    <div class="row formtitle">
        <h1>Danh sach san pham</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=listsp" method="post">
            <table>
                <tr>
                    <td><input type="text" name="kyw" id=""></td>
                    <td>
                        <select name="iddm" id="">
                            <option value="0" selected>Tat ca</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id . '">"' . $name . '"</option>';
                            }
                            ?>
                        </select>
                        <input type="submit" name="list_search" value="Search">
                    </td>
                    <td><a href="index.php?act=addsp"><input type="button" value="Nhap them"></a></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="row formdsloai">
        <table border="1">
            <tr style="background-color: rgb(206, 202, 202);">
                <th>Ma san pham</th>
                <th>Ten san pham</th>
                <th>Gia san pham</th>
                <th>Hinh anh</th>
                <th>Luot xem</th>
                <th>Hanh dong</th>
            </tr>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $imagePath = "../Uploads/" . $image;

                if (is_file($imagePath)) {
                    $image = "<img src='" . $imagePath . "' height= '80'>";
                } else {
                    $image = "No image";
                } ?>
                <tr>
                    <td><?= $id ?></td>
                    <td><?= $name ?></td>
                    <td><?= number_format($price, 0, ".", ".") ?>đ</td>
                    <td><?= $image ?></td>
                    <td><?= $view ?></td>
                    <td><a href="<?= $suasp ?>"><input type="button" value="Sửa" name="" id=""></a><a href="javascript:confirmDelete('<?= $xoasp ?>')"><input type="button" value="Xóa"></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script>
        function confirmDelete(deleUrl) {
            if (confirm("Bạn chắc chắn muốn xóa sản phẩm này?")) {
                document.location = deleUrl;
            }
        }
    </script>
</div>
</div>
<!-- index.php?act=xoasp&id="<?= $sanpham['id'] ?><!- -->

