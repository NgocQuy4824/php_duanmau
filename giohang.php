<?php
session_start();
?>

<p>Giỏ Hàng</p>
<?php
if (isset($_SESSION['cart'])) {

}
?>
<table>
    <tr>
        <th>ID</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình Anh</th>
        <th>Số Lượng</th>
        <th>Gía Sản Phẩm</th>
        <th>Thành Tiền</th>

    </tr>
    <?php
    if (isset($_SESSION['cart'])) {
        $i = 0;
       
        foreach ($_SESSION['cart'] as $cart_item) {
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $cart_item['masp']; ?></td>
                <td><?php echo $cart_item['tensanpham']; ?></td>
                <td><?php echo $cart_item['hinhanh']; ?></td>
                <td><?php echo $cart_item['soluong']; ?></td>
                <td><?php echo $cart_item['giasp']; ?></td>
                <td><?php echo $thanhtien; ?></td>
            </tr>
           
            <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="6">
                <p>Hiện tại giỏ hàng trống</p>
            </td>

        </tr>
        <?php
    }
    ?>
</table>