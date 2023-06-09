<?php 
    include('../koneksi/koneksi.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Berhasil Menghapus Admin.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Gagal Menghapus Admin. Coba Lagi Nanti.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }

?>