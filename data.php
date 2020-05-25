<?php
// Load file koneksi.php
include "config.php";

// Ambil Data yang Dikirim dari Form
$nama = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];


  $query = "INSERT INTO komen VALUES('".$nama."', '".$email."', '".$comment."')";
  $sql = mysqli_query($koneksi, $query); 

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }

?>
