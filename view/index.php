<?php
session_start();

if ($_SESSION['status'] != "login") {
    header("location:auth/login.php?pesan=belum_login");
}

// Ambil data dari session
$nip = $_SESSION['nip'];
$nama_pegawai = $_SESSION['nama_pegawai'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensi Rumah Sakit Umum Nirwana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col items-center">
        <div id="sidebar"
            class="fixed top-0 left-0 w-64 h-full bg-[#446655] text-white transform -translate-x-full sidebar z-50">
            <div class="">
                <div class="p-4">
                    <img src="../assets/img/logo-rs-nirwana.png" alt="Logo" class="w-full">
                </div>
                <hr class="bg-white h-0.5 my-2">
                <div class="p-4 flex items-center space-x-4">
                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                        </path>
                    </svg>
                    <div>
                        <h3 class="font-semibold text-lg"><?php echo $nip ?></h3>
                        <h3 class="font-semibold text-lg"><?php echo $nama_pegawai ?></h3>
                    </div>
                </div>
                <hr class="bg-white h-0.5 my-2">
                <ul>
                    <li class="mb-2">
                        <a href="#" class=" py-2 px-4 rounded hover:bg-green-700 flex items-center space-x-2">
                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class=" py-2 px-4 rounded hover:bg-green-700 flex items-center space-x-2">
                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                                </path>
                            </svg>
                            <span>Profil Saya</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class=" py-2 px-4 rounded hover:bg-green-700 flex items-center space-x-2">
                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                            </svg>
                            <span>Absen Divisi</span>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class=" py-2 px-4 rounded hover:bg-green-600 flex items-center space-x-2">
                            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" class="w-7 h-7"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                </path>
                            </svg>
                            <span>Pengajuan Izin</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden z-40"></div>

        <!-- Header -->
        <div class="w-full bg-[#446655] p-4 flex justify-between items-center">
            <button id="menuButton" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <!-- button logout -->
            <button class="text-white">
                <a href="auth/logout.php">
                    <svg data-slot="icon" fill="none" class="h-6 w-6" stroke-width="1.5" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9">
                        </path>
                    </svg>
                </a>
            </button>
        </div>
        <!-- User Info -->
        <div class="mx-10 p-4 rounded-lg shadow-lg bg-white my-7">
            <h1 class="text-xl font-bold text-center mb-2">Laras Kurniadesi</h1>
            <p class="text-gray-700">Divisi : <span class="font-bold text-black">Dokter Umum</span></p>
            <p class="text-gray-500">Kepala Divisi : <span class="font-bold text-black">Naura Islami Ayudya Suhardi,
                    S.Ked.</span></p>
        </div>

        <!-- Presensi Cards -->
        <div class="mt-4 grid w-full grid-cols-1 md:grid-cols-2 gap-4 bg-white shadow-lg p-2">
            <!-- Presensi Datang Card -->
            <div class="bg-[#446655] text-white p-4 rounded-lg shadow-lg flex flex-col justify-between min-h-[150px]">
                <div>
                    <h2 class="text-lg font-bold">PRESENSI DATANG</h2>
                    <p id="datangText" class="mt-2">Klik tombol “Tekan disini” Untuk melakukan presensi</p>
                </div>
                <div class="bg-[#334B3F] text-white mt-4 py-2 px-4 rounded-b-lg flex items-center justify-center cursor-pointer"
                    onclick="handlePresensiDatang()">
                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                    </svg>Tekan disini...
                </div>
            </div>

            <!-- Presensi Pulang Card -->
            <div class="bg-[#C9BB89] w-full text-white p-4 rounded-lg shadow-lg flex flex-col justify-between min-h-[150px]">
                <div>
                    <h2 class="text-lg font-bold">PRESENSI PULANG</h2>
                    <p id="pulangText" class="mt-2">Klik tombol “Tekan disini” Untuk melakukan presensi</p>
                </div>
                <div class="bg-[#AA9F79] text-white mt-4 py-2 px-4 rounded-b-lg flex items-center justify-center cursor-pointer"
                    onclick="handlePresensiPulang()">
                    <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                        class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                    </svg>Tekan disini...
                </div>
            </div>
        </div>



    </div>

    <script>
        const menuButton = document.getElementById('menuButton');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        menuButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });


        function handlePresensiDatang() {
            const currentTime = new Date().toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            document.getElementById('datangText').innerText = `Anda sudah hadir pada jam ${currentTime}`;
        }

        function handlePresensiPulang() {
            const currentTime = new Date().toLocaleTimeString('id-ID', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            document.getElementById('pulangText').innerText = `Anda sudah pulang pada jam ${currentTime}`;
        }


    </script>
</body>

</html>