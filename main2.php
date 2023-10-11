<?php
$sql_pro = "SELECT * FROM tbl_sanpham,danhmuc WHERE  tbl_sanpham.id_danhmuc=danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
$query_pro = mysqli_query($mysqli, $sql_pro);



?>
<h3>Sản Phẩm Mới Nhất</h3>
<ul class="product_list">
    <?php
    while ($row = mysqli_fetch_array($query_pro)) {
        ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                <p class="tilte_product">Tên Sản Phẩm :
                    <?php echo $row['tensanpham'] ?>
                </p>
                <P class="price_product">Gía :
                    <?php echo number_format($row['giasp'], 0, ',', '.') . 'VNĐ' ?>
                </P>
                <p style="text-align: center;color: #d2d2d2">
                    <?php echo $row['tendanhmuc'] ?>
                </p>
            </a>
        </li>
        <?php
    }
    ?>


</ul>