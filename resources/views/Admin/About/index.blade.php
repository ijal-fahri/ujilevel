<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <x-sidebar></x-sidebar>

    <!-- Content -->
    <div class="flex-1 p-6">
        <div class="flex flex-col md:flex-row justify-between items-center mb-4">
            <div class="mb-4 md:mb-0">
                <h3 class="text-2xl font-bold mb-3">About</h3>
                <h6 class="text-gray-600 mb-2">All About</h6>
            </div>
            <div>
                <a href="{{ route('about.create') }}"
                    class="inline-block bg-gradient-to-r from-pink-500 to-orange-500 text-white py-2 px-4 rounded-full text-base lg:text-lg shadow flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Create About
                </a>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">Judul</th>
                        <th class="py-3 px-6 text-left">Deskripsi</th>
                        <th class="py-3 px-6 text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($about as $row)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <span class="font-medium">{{ $row->title }}</span>
                            </td>
                            <td class="py-3 px-6 text-left">
                                <span>{{ $row->description }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center space-x-2">
                                    <a href="{{ route('about.show', $row) }}" class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('about.edit', $row) }}"
                                        class="text-yellow-500 hover:text-yellow-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('about.destroy', $row->id) }}" method="POST" class="inline"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
