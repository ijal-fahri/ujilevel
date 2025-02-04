<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations - Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-sm">
        <h1 class="text-2xl font-bold text-black mb-6 tracking-wide text-center flex items-center justify-center">
            <span class="w-1 h-6 bg-black mr-2"></span>CRUD OPERATIONS
        </h1>
        <h2 class="text-lg font-semibold text-black mb-2 text-center">SIGN IN</h2>
        <p class="text-black mb-8">Enter your credentials to access your account</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-semibold mb-2">Email</label>
                <input id="email"
                    class="w-full px-4 py-2 border border-black rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400 placeholder-black"
                    type="email" name="email" placeholder="Enter your email" required />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-800 font-semibold mb-2">Password</label>
                <input id="password"
                    class="w-full px-4 py-2 border border-black rounded-md focus:outline-none focus:ring-2 focus:ring-gray-400  placeholder-black"
                    type="password" name="password" placeholder="Enter your password" required />
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-black text-white font-normal py-3 rounded-lg hover:bg-gray-800 transition">
                SIGN IN
            </button>

            <!-- Forgot Password -->
            <p class="text-center text-sm text-gray-600 mt-6">
                Forgot your password?
                <a href="{{ route('password.request') }}"
                    class="text-black font-semibold hover:underline border-b-[2px] border-black pb-[1px]">
                    Reset Password</a>
            </p>
        </form>
    </div>
</body>
