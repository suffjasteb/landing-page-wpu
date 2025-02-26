<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- alpine js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body class="h-full bg-black">
    <div class="bg-white">
      <x-navbar></x-navbar>

      {{-- title ini hanya bisa di baca di halaman home aja, jadi kalo kita mau pakai kita kirim dulu dari web ke home nanti kita ambil dari home bukan dari web --}}
     <x-header >{{ $title }}</x-header>
      
      {{-- main content kita --}}
      <main class="w-full h-full bg-black pt-20 px-6 text-white">
        {{ $slot }}
    </main>
      </div>
</body>
</html>