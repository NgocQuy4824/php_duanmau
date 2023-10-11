<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE  tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
$query_pro = mysqli_query($mysqli, $sql_pro);

//get tên danh mục
$sql_cate = "SELECT * FROM danhmuc WHERE  danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
$query_cate = mysqli_query($mysqli, $sql_cate);
$row_title = mysqli_fetch_array($query_cate);

?>

<h3>Danh Mục Sản Phẩm :
    <?php echo $row_title['tendanhmuc'] ?>
</h3>
<ul class="product_list">
    <?php
    while ($row_pro = mysqli_fetch_array($query_pro)) {
        ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                <p class="tilte_product">Tên Sản Phẩm :
                    <?php echo $row_pro['tensanpham'] ?>
                </p>
                <P class="price_product">Gía :
                    <?php echo number_format($row_pro['giasp'], 0, ',', '.') . 'VNĐ' ?>
                </P>
            </a>
        </li>
        <?php
    }
    ?>

</ul>