<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Contact - Tugas Rutin 9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-slate-800 text-white p-4 flex gap-6">
        <a href="{{ route('home') }}" class="hover:text-orange-400">Home</a>
        <a href="{{ route('about') }}" class="hover:text-orange-400">About</a>
        <a href="{{ route('contact') }}" class="hover:text-orange-400">Contact</a>
    </nav>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Hubungi Saya</h1>

        <table class="w-full border-collapse">
            @foreach ($contacts as $c)
                <tr class="border-b">
                    <td class="py-2 font-semibold w-32">{{ $c['label'] }}</td>
                    <td class="py-2">{{ $c['value'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
