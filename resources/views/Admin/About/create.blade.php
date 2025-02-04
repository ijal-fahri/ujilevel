<html>
<head>
    <title>Create About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-4 sm:p-6 md:p-8 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl">
        <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-2 flex items-center">
            <span class="border-l-4 border-black pl-2">CREATE ABOUT</span>
        </h1>
        <p class="text-gray-600 mb-6">Enter the details to create an about section</p>
        <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="title">Title</label>
                <input class="w-full px-3 py-2 border border-gray-300 rounded" type="text" id="title" name="title" placeholder="Enter the title">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="description">Description</label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded" id="description" name="description" rows="4" placeholder="Enter the description"></textarea>
            </div>
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
                <button type="submit" class="bg-gradient-to-r from-pink-500 to-orange-500 text-white py-2 px-4 rounded-full text-sm sm:text-base lg:text-lg shadow flex items-center justify-center">
                    Create
                </button>
                <a href="{{ route('about.index') }}" class="bg-black text-white py-2 px-4 rounded-full text-sm sm:text-base lg:text-lg shadow flex items-center justify-center">
                    Back
                </a>
            </div>
        </form>
    </div>
</body>
</html>