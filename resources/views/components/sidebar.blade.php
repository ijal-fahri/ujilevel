<div class="fixed left-0 top-0 h-screen w-64 bg-black shadow-lg">
    <div class="flex items-center justify-center h-20">
        <a href="#" class="px-6 py-2 text-2xl font-bold text-white rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Admin ZOES
        </a>
    </div>

    <ul class="space-y-2">
        <!-- Data Category with Dropdown -->
        <li class="relative group">
            <a href="#" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black flex justify-between items-center" onclick="toggleDropdown('categoryDropdown')">
                <span><i class="fas fa-bars mr-2"></i> Data Category</span>
                <i class="fas fa-chevron-down"></i>
            </a>
            <!-- Dropdown Content -->
            <ul id="categoryDropdown" class="hidden pl-6 space-y-1">
                <li>
                    <a href="/admin/category/manage" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black">
                        Kelola Category
                    </a>
                </li>
            </ul>
        </li>

        <!-- Other Menu Items -->
        <li class="relative">
            <a href="#" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black">
                <i class="fas fa-bars mr-2"></i> Data Pesanan
            </a>
        </li>
        <li class="relative">
            <a href="#" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black">
                <i class="fas fa-bars mr-2"></i> Data Laporan
            </a>
        </li>
        <li class="relative">
            <a href="#" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black">
                <i class="fas fa-bars mr-2"></i> Data Customer
            </a>
        </li>
        <li class="relative">
            <a href="#" class="block py-2 px-4 text-white hover:bg-gray-100 rounded-md hover:text-black">
                <i class="fas fa-bars mr-2"></i> Data Kupon
            </a>
        </li>
    </ul>
</div>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>
