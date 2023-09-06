<div class="row mb">
    <div class="row formtitle">
        <h1>Thống kê dạng bảng</h1>
    </div>
    <div class="row formcontent">
        <div class="row formdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ MAX</th>
                    <th>GIÁ MIN</th>
                    <th>GIÁ TRUNG BÌNH</td>
                </tr>
                <?php

                foreach ($listthongke as $tk) {
                    extract($tk);
                    echo '<tr>
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>$' . $maxprice . '</td>
                            <td>$' . $minprice . '</td>
                            <td>$' . $avgprice . '</td>
                        </tr>';
                }

                ?>
            </table>

            <a href="index.php?act=bieudo"><button type="button">Biểu đồ thống kê</button></a>
        </div>
    </div>
</div>