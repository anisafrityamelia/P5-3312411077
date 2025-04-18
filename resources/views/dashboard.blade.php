<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Framelab</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-yellow-50">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-red-900 min-h-screen text-white px-6 py-6">
            <div class="flex items-center mb-10">
                <h1 class="text-xl font-bold ml-2">FrameLab</h1>
            </div>
            <ul class="space-y-6 text-sm font-semibold">
                <li><a href="#" class="flex items-center ml-7">Dashboard</a></li>
                <li><a href="#" class="flex items-center ml-7">Room Data</a></li>
                <li><a href="#" class="flex items-center ml-7">Orders Data</a></li>
                <li><a href="#" class="flex items-center ml-7">Feedback</a></li>
                <li><a href="#" class="flex items-center ml-7">Settings</a></li>
                <li><a href="#" class="flex items-center ml-7">Log Out</a></li>
            </ul>
        </div>

        <!-- Content -->
        <div class="w-4/5 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-red-900">Hi, Admin!</h2>
                <div class="w-10 h-10 bg-red-900 rounded-full"></div>
            </div>

            <div class="bg-red-900 text-white rounded-xl p-6">
                <h3 class="text-lg font-bold mb-2">Hello, Admin!</h3>
                <p>Welcome to your dashboard.</p>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-3 gap-4 mt-6">
                <!-- Card -->
                @php
                    $cards = [
                        ['title' => 'Room Data', 'value' => 20, 'desc' => 'Total room yang tersedia'],
                        ['title' => 'Orders Total', 'value' => 17, 'desc' => 'Total pesanan yang masuk'],
                        ['title' => 'User Data', 'value' => 130, 'desc' => 'Total pengguna terdaftar'],
                        ['title' => 'Pending', 'value' => 5, 'desc' => 'Pesanan yang belum dikonfirmasi'],
                        ['title' => 'Verifikasi', 'value' => 3, 'desc' => 'Pesanan yang sudah dikonfirmasi'],
                        ['title' => 'Feedback', 'value' => 85, 'desc' => 'Jumlah masukan yang diterima'],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div class="bg-white p-4 rounded shadow text-center">
                        <h4 class="font-bold text-red-900">{{ $card['title'] }}</h4>
                        <p class="text-2xl my-2 font-bold">{{ $card['value'] }}</p>
                        <p class="text-gray-600 text-sm">{{ $card['desc'] }}</p>
                        <button class="mt-4 bg-blue-500 text-white px-4 py-1 rounded hover:bg-blue-600">CHECK</button>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
