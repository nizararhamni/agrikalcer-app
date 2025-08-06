@extends('layouts.app')

@section('title', 'Notifications - Agrikalcer App')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Notifikasi</h1>
    </div>

    <div class="w-full max-w-3xl mx-auto mt-10">
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex items-center">
                <div class="bg-blue-500 rounded-full h-10 w-10 flex items-center justify-center text-white">
                    <i class="fas fa-thermometer-three-quarters"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-800 font-semibold">Suhu Terlalu Tinggi</p>
                    <p class="text-sm text-gray-500">April 12, 2024. 12:30</p>
                </div>
            </div>
            <button id="dropdownButton1"
                class="mt-2 bg-blue-200 px-4 py-2 rounded-md focus:outline-none hover:bg-blue-300">
                Lihat Detail
            </button>
            <div id="dropdownContent1" class="hidden mt-2 bg-gray-50 p-4 rounded-lg shadow-md">
                <div class="grid grid-cols-1 gap-6">
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 1: Suhu harian</p>
                        </div>
                    </div>
                    <!-- Container 2 -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 2: Perbandingan mingguan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 3: Suhu ekstrem</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 4: Suhu bulan ini</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 5: Target suhu vs Aktual</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 6: Peningkatan suhu tahunan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 7: Prediksi suhu mendatang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-4 rounded-lg shadow-lg mb-4">
            <div class="flex items-center">
                <div class="bg-green-500 rounded-full h-10 w-10 flex items-center justify-center text-white">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="ml-4">
                    <p class="text-gray-800 font-semibold">Aisya Food and Juice</p>
                    <p class="text-sm text-gray-500">April 12, 2024. 12:30</p>
                </div>
            </div>
            <button id="dropdownButton2"
                class="mt-2 bg-green-200 px-4 py-2 rounded-md focus:outline-none hover:bg-green-300">
                Lihat Detail
            </button>
            <div id="dropdownContent2" class="hidden mt-2 bg-gray-50 p-4 rounded-lg shadow-md">
                <div class="grid grid-cols-1 gap-6">
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 1: Penjualan harian</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 2: Tren mingguan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 3: Performa bulanan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 4: Pendapatan tahunan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 5: Target vs Aktual</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 6: Pengeluaran bulanan</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4">
                        <img src="https://via.placeholder.com/50" alt="Icon" class="mr-4">
                        <div class="flex-1">
                            <img src="https://via.placeholder.com/150x100" alt="Graph" class="w-full rounded-md">
                            <p class="mt-2 text-gray-700 text-sm">Grafik 7: Prediksi penjualan mendatang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('dropdownButton1').addEventListener('click', function() {
            var content = document.getElementById('dropdownContent1');
            content.classList.toggle('hidden');
        });

        document.getElementById('dropdownButton2').addEventListener('click', function() {
            var content = document.getElementById('dropdownContent2');
            content.classList.toggle('hidden');
        });
    </script>
@endsection