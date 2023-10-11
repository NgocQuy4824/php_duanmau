<?php
include('../../config/config.php');

$request_method = $_SERVER['REQUEST_METHOD'];


if ($request_method === 'GET') {
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM danhmuc WHERE id_danhmuc='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
}

if ($request_method === 'POST') {
    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];

    if (isset($_POST['themdanhmuc'])) {
        //thêm
        $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUE('" . $tenloaisp . "','" . $thutu . "')";
        mysqli_query($mysqli, $sql_them);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }

    if (isset($_POST['suadanhmuc'])) {
        //sửa
        $sql_update = "UPDATE danhmuc set tendanhmuc='" . $tenloaisp . "',thutu='" . $thutu . "' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli, $sql_update);
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=them");
    }
}



?>