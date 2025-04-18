<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Studio | Framelab</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com/3.4.1"></script>
</head>
<body class="bg-yellow-50 font-sans">
    <div class="container mx-auto px-6 py-10">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-red-900">Daftar Studio</h1>
            <p class="text-red-900">Berikut adalah list studio yang tersedia di Framelab.</p>
        </div>

        <div class="bg-red-900 text-white rounded-xl p-6 shadow">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold">List Studio</h2>
                <button class="bg-white text-red-900 font-semibold px-4 py-2 rounded hover:bg-gray-200 text-sm">Tambah Studio</button>
            </div>

            <div class="overflow-x-auto rounded">
                <table class="min-w-full text-sm text-left">
                    <thead>
                        <tr class="bg-white text-red-900">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama Studio</th>
                            <th class="px-4 py-2">Harga</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white text-red-900">
                        <tr class="hover:bg-white">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Studio A</td>
                            <td class="px-4 py-2">Rp 100.000</td>
                            <td class="px-4 py-2">Tersedia</td>
                            <td class="px-4 py-2 space-x-2">
                                <button class="bg-yellow-400 text-white px-3 py-1 rounded text-xs hover:bg-yellow-300">Edit</button>
                                <button class="bg-red-900 text-white px-3 py-1 rounded text-xs hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-white">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">Studio B</td>
                            <td class="px-4 py-2">Rp 120.000</td>
                            <td class="px-4 py-2">Disewa</td>
                            <td class="px-4 py-2 space-x-2">
                                <button class="bg-yellow-400 text-white px-3 py-1 rounded text-xs hover:bg-yellow-300">Edit</button>
                                <button class="bg-red-900 text-white px-3 py-1 rounded text-xs hover:bg-red-600">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
