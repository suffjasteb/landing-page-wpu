
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <style>
    .container {
    display: flex;
    justify-content: center; /* Untuk membuat elemen berada di tengah secara horizontal */
    align-items: center; /* Untuk membuat elemen berada di tengah secara vertikal */
    margin: 0; /* Hilangkan margin bawaan */
    flex-direction: column; /* Atur agar elemen tersusun secara vertikal */
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Saya</h1>
        <img src="img/profil.jpg" width="200" height="300">
        <h3>Email = <a href="" class="text-blue-500">shafwanjunindra36@gmail.com</a></h3>
        <h3>Nomor Hp = <a href="" class="text-blue-500">081252859954</a></h3>
    </div>
</body>
</html>
</x-layout>

