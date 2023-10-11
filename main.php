<div id="main">
    <?php
    include("sidebar.php");
    ?>
    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
            $tam = $_GET['quanly'];
        } else {
            $tam = "";
        }

        if ($tam == 'danhmucsanpham') {
            include('danhmuc.php');
        } elseif ($tam == 'giohang') {
            include('giohang.php');
        } elseif ($tam == 'tintuc') {
            include('tintuc.php');
        } elseif ($tam == 'lienhe') {
            include('lienhe.php');
        } elseif ($tam == 'sanpham') {
            include('sanpham.php');
        } else {
            include('main2.php');
        }
        ?>
    </div>
</div>