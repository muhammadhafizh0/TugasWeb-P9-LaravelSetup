<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Tugas Rutin 9</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-slate-800 text-white p-4 flex gap-6">
        <a href="{{ route('home') }}" class="hover:text-orange-400">Home</a>
        <a href="{{ route('about') }}" class="hover:text-orange-400">About</a>
        <a href="{{ route('contact') }}" class="hover:text-orange-400">Contact</a>
    </nav>

    <div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded-lg shadow">
        <h1 class="text-2xl font-bold mb-4">Selamat Datang!</h1>
        <p><strong>Nama:</strong> {{ $profile['nama'] }}</p>
        <p><strong>Jurusan:</strong> {{ $profile['jurusan'] }}</p>
        <p><strong>Kampus:</strong> {{ $profile['kampus'] }}</p>
        <p><strong>Kelas:</strong> {{ $profile['kelas'] }}</p>

        <p class="mt-3 font-semibold">Skill:</p>
        <ul class="list-disc list-inside">
            @foreach ($profile['skills'] as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
