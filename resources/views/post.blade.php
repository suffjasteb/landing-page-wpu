<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  

     {{-- <article class="py-8 max-w-screen-md border-b border-gray-500">
        <h2 class="mb-1 text-3xl tracking-tighter text-pink-900">{{ $post['title'] }}</h2>
        <div class="text-gray-500">
          <a href="#">{{ $post->author->name }}</a> | {{ $post->created_at->format('j F Y')}}
          
        </div>
        <p class="my-4 font-light">{{ $post['body']}}</p>
        <a href="/belajar-laravel/public/posts" class="font-medium text-blue-500">Back to Posts&laquo;</a>
      </article> --}}

      <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased ">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-1xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          <a href="/belajar-laravel/public/categories/{{ $post->category->slug }}">
                            <span class="bg-{{ $post->category->color }}-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                              </span>
                         </a>
                        
                          <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time></p>
                      </div>
                  </div>
              </address>
              <a href="/belajar-laravel/public/posts" class="text-blue-500 font-medium">&laquo; Back to all posts</a>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          <p>{{ $post->body }}</p>
      </article>
  </div>
</main>


    
    </x-layout>