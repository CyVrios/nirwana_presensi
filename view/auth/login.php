<?php
session_start();

if (isset($_SESSION['status']) && $_SESSION['status'] == "login") {
    header("location:../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Halaman Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center min-h-screen bg-cover bg-center p-5">
    
    <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-full max-w-md text-center">
        <img src="../../assets/img/logo-rs-nirwana.png" class="w-full max-w-xs mb-6 mt-5 mx-auto" alt="Logo">
        <h2 class="text-gray-800 mb-5 text-2xl font-bold">Login</h2>
        <form method="post" action="login_proses.php">
            <div class="relative mb-4">
                <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">person</span>
                <input type="text" name="nip" placeholder="Masukkan NIP" class="w-full p-3 pl-10 rounded-md border border-gray-300 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="relative mb-6">
                <span class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">lock</span>
                <input type="password" name="password" placeholder="Masukkan Password" class="w-full p-3 pl-10 rounded-md border border-gray-300 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <input type="submit" name="login" value="LOGIN" class="w-full p-3 rounded-md bg-green-600 text-white font-semibold hover:bg-green-700 transition-colors cursor-pointer">
        </form>
    </div>
</body>
</html>
