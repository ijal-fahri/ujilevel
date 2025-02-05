<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body class="bg-gray-100 flex">
    <!-- Sidebar (Fixed) -->
    <x-sidebar></x-sidebar>

    <!-- Main Content (Scrollable) -->
    <div class="flex-1 ml-64 p-6">
        <h1 class="text-3xl font-bold mb-6">
            <span class="block">Welcome To Admin</span>
            <span class="block">ZOES STORE!</span>
        </h1>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-black text-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">JUMLAH STOCK</h3>
                <p class="text-2xl font-bold mt-2">99</p>
            </div>
            <div class="bg-gray-400 text-black p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">PENJUALAN BULAN INI</h3>
                <p class="text-2xl font-bold mt-2">10 produk</p>
            </div>
            <div class="bg-gray-400 text-black p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">PENJUALAN TAHUN INI</h3>
                <p class="text-2xl font-bold mt-2">10 prroduk</p>
            </div>
            <div class="bg-black text-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">PESANAN DI TUNDA</h3>
                <p class="text-2xl font-bold mt-2">7</p>
            </div>
        </div>

        <!-- Tabel Scrollable -->
        <div class="bg-white p-6 rounded-lg shadow-md mt-8">
            <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>
            <div class="overflow-y-auto max-h-96 border rounded-lg">
                <table class="min-w-full border-collapse">
                    <thead class="bg-gray-100 sticky top-0">
                        <tr>
                            <th class="px-4 py-2 text-left font-semibold">Produk</th>
                            <th class="px-4 py-2 text-left font-semibold">Price</th>
                            <th class="px-4 py-2 text-left font-semibold">Date</th>
                            <th class="px-4 py-2 text-left font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <td class="px-4 py-3">Sepatu Balita</td>
                            <td class="px-4 py-3">$345</td>
                            <td class="px-4 py-3">08-Dec, 2021</td>
                            <td class="px-4 py-3">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm">proses</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body> 
</html>
