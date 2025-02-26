
{{-- x-slot ini cara untuk --}}
{{-- x-slot ini kita kasih nama title yang ambil variable title dari routes web --}}
{{-- jadi yang kita kirim ke layout itu dari home --}}
{{-- web => home => layout --}}
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
      <h3 class="tex-xl">ini adalah Product Page</h3>
    </x-layout>