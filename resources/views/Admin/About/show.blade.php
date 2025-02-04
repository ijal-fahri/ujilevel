<html>
<head>
    <title>Show About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-4 sm:p-6 md:p-8 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl">
        <h1 class="text-lg sm:text-xl md:text-2xl font-bold mb-2 flex items-center">
            <span class="border-l-4 border-black pl-2">ABOUT DETAILS</span>
        </h1>
        <p class="text-gray-600 mb-6">Here are the details of the about section</p>
        
        <div class="mb-4">
            <h2 class="text-gray-700 font-semibold">Title</h2>
            <p class="text-gray-800">{{ $about->title }}</p>
        </div>
        <div class="mb-6">
            <h2 class="text-gray-700 font-semibold">Description</h2>
            <p class="text-gray-800">{{ $about->description }}</p>
        </div>
        
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4">
            <a href="{{ route('about.index') }}" class="bg-black text-white py-2 px-4 rounded-full text-sm sm:text-base lg:text-lg shadow flex items-center justify-center">
                Back
            </a>
            <a href="{{ route('about.edit', $about->id) }}" class="bg-gradient-to-r from-pink-500 to-orange-500 text-white py-2 px-4 rounded-full text-sm sm:text-base lg:text-lg shadow flex items-center justify-center">
                Edit
            </a>
        </div>
    </div>
</body>
</html>