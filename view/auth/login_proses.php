<?php
session_start();

include '../../koneksi.php';

$nip = htmlspecialchars($_POST['nip']);
$password = htmlspecialchars($_POST['password']);

// Query untuk memeriksa user berdasarkan nip dan password
$sql = "SELECT * FROM user WHERE nip='$nip' AND password='$password'";
$query = mysqli_query($db, $sql);
$cek = mysqli_num_rows($query);

if ($cek > 0) {
    // Query untuk mengambil data pegawai berdasarkan nip
    $pegawai_query = "SELECT * FROM pegawai WHERE nip='$nip'";
    $pegawai_result = mysqli_query($db, $pegawai_query);
    $pegawai_data = mysqli_fetch_assoc($pegawai_result);
    
    // Simpan data pegawai ke dalam session
    $_SESSION['nip'] = $pegawai_data['nip'];
    $_SESSION['nama_pegawai'] = $pegawai_data['nama'];
    $_SESSION['status'] = "login";

    header("location:../index.php");
} else {
    header("location:login.php?pesan=gagal");
}
