<?php
$sql_lietke_sp = "SELECT * FROM tbl_sanpham,danhmuc WHERE tbl_sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY  id_sanpham DESC ";
$query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>

<p>Liệt Kê Danh mục sản phẩm</p>
<table width="80%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình ảnh</th>
        <th>Gía sản phẩm</th>
        <th>Số Lượng</th>
        <th>Danh Mục</th>
        <th>Mã Sản Phẩm</th>
        <th>Tóm Tắt</th>
        <th>Trạng Thái</th>
        <th>Quản Lý</th>

    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;
        ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $row['tensanpham'] ?>
            </td>
            <td>
                <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
            </td>
            <td>
                <?php echo $row['giasp'] ?>
            </td>
            <td>
                <?php echo $row['soluong'] ?>
            </td>
            <td>
                <?php echo $row['tendanhmuc'] ?>
            </td>
            <td>
                <?php echo $row['masp'] ?>
            </td>
            <td>
                <?php echo $row['tomtat'] ?>
            </td>
            <td>
                <?php if ($row['tinhtrang'] == 1) {
                    echo 'kích hoạt';
                } else {
                    echo 'ẩn';
                } ?>
            </td>
            <td>
                <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a
                    href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
            </td>   

        </tr>
        <?php
    }
    ?>
</table>