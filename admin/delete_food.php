<?php 
    include('../koneksi/koneksi.php');
    if(isset($_GET['id']) && isset($_GET['image_name']))
    {
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

         if($image_name != "")
        {
            $path = "../images/food/".$image_name;
            $remove = unlink($path);

            if($remove==false)
            {
                $_SESSION['upload'] = "<div class='error'>Gagal Menghapus Gambar.</div>";
                header('location:'.SITEURL.'admin/food.php');
                die();
            }

        }

        $sql = "DELETE FROM tbl_food WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['delete'] = "<div class='success'>Berhasil Menghapus Makanan.</div>";\
            header('location:'.SITEURL.'admin/food.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='error'>Gagal Menghapus Makanan.</div>";\
            header('location:'.SITEURL.'admin/food.php');
        }

    }
    else
    {
        $_SESSION['unauthorize'] = "<div class='error'>Gagal Mengganti Akses.</div>";
        header('location:'.SITEURL.'admin/food.php');
    }

?>