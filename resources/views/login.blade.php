<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | FrameLab</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-red-900 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg flex w-3/4 max-w-4xl overflow-hidden">
        <div class="w-1/2 bg-yellow-50 p-10 flex flex-col justify-center items-center">
            <div class="text-6xl font-bold text-red-900 mb-4"></div>
            <img src="images/logo.png" alt="Gambar 1" width="300" class="rounded shadow-md m-2">
            <p class="text-red-900 mt-2">More Than Just a Studio</p>
        </div>
        <div class="w-1/2 p-10">
            <h2 class="text-2xl text-red-900 font-bold mb-2 text-center">Welcome To FrameLab</h2>
            <p class="text-red-900 mb-6 text-center">Sign In To Continue</p>
            <form>
                <div class="mb-4">
                    <label class="block text-red-900 font-semibold mb-1">Username</label>
                    <input type="text" class="w-full border border-red-900 px-3 py-2 rounded" placeholder="Enter a Username">
                </div>
                <div class="mb-4">
                    <label class="block text-red-900 font-semibold mb-1">Password</label>
                    <input type="password" class="w-full border border-red-900 px-3 py-2 rounded" placeholder="Enter a Password">
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">Login</button>
            </form>
            <p class="text-sm mt-4 text-red-900">Don't have an account? <a href="#" class="text-blue-500 hover:underline">Register now</a></p>
        </div>
    </div>
</body>
</html>
