<p>Chi Tiết Sản Phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM tbl_sanpham,danhmuc WHERE tbl_sanpham.id_sanpham AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
    ?>
    <div class="wrapper_chitiet">
        <div class="hinhanh_sanpham">
            <img width="230px" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" alt="">
        </div>
        <form method="POST" action="themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="chitiet_sanpham">
                <h3 style="margin:0px">Tên Sản Phẩm :
                    <?php echo $row_chitiet['tensanpham'] ?>
                </h3>
                <p>Mã Sản Phẩm :
                    <?php echo $row_chitiet['masp'] ?>
                </p>
                <p>Gía Sản Phẩm :
                    <?php echo number_format($row_chitiet['masp'], 0, ',', '.') . 'VNĐ' ?>
                </p>
                <p>Số Lượng Sản Phẩm :
                    <?php echo $row_chitiet['soluong'] ?>
                </p>
                <p>Danh Mục Sản Phẩm :
                    <?php echo $row_chitiet['tendanhmuc'] ?>
                </p>
                <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm Giỏ Hàng"></p>
            </div>
        </form>
    </div>
    <?php
}
?>