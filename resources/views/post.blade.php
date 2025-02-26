<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  

     <article class="py-8 max-w-screen-md border-b border-gray-500">
        <h2 class="mb-1 text-3xl tracking-tighter text-pink-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500">
          <a href="#">{{ $post->author->name }}</a> | {{ $post->created_at->format('j F Y')}}
          
        </div>
        <p class="my-4 font-light">{{ $post['body']}}</p>
        <a href="/belajar-laravel/public/posts" class="font-medium text-blue-500">Back to Posts&laquo;</a>
      </article>
    </x-layout>