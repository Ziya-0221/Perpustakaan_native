<?php
if($_POST){
    $judul_buku=$_POST['judul_buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    if(empty($judul_buku)){
        echo "<script>alert('judul buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_buku (judul_buku,penulis,penerbit) value  ('".$judul_buku."','".$penulis."','".$penerbit."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>
