<?php

include 'koneksi.php';
$deskripsi = $_POST['deskripsi'];
$id = $_POST['id'];
$nama_file = $_FILES['galeri']['name'];
$ukuran_file = $_FILES['galeri']['size'];
$tipe_file = $_FILES['galeri']['type'];
$tmp_file = $_FILES['galeri']['tmp_name'];

$path = "images/".$nama_file;



if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Jika gambar berhasil diupload, Lakukan :
  // Proses simpan ke Database
  $query = "UPDATE galeri SET nama = '".$nama_file."',ukuran = '".$ukuran_file."',tipe = '".$tipe_file."',deskripsi = '".$deskripsi."' WHERE id  = '".$id."'";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: listgaleri.php?pesan=update"); // Redirectke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit.php'>Kembali Ke Form</a>";
      header("location: listgaleri.php?pesan=update");
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='edit.php'>Kembali Ke Form</a>";
    header("location: listgaleri.php?pesan=update");
}

?>
