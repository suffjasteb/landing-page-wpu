@props(['active' => false]) <!-- Tambahkan props active -->

<a {{ $attributes->merge(['class' => $active ? 'bg-black text-white' : 'text-black']) }} 
    class="text-sm font-semibold text-black px-6 py-3 rounded-md w-full text-center">
    {{ $slot }}
</a>
