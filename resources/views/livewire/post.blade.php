@foreach ($post as $posts)
@section('pagetitle',$posts->title)
@section('meta_keywords',$posts->author)


<main class="bg-white dark:bg-gray-800 rounded-2xl  relative ">

        <x-sidebar />

        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <div class=" pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">

<!-- Container for demo purpose -->
<div class="container my-6 px-6 mx-auto">
  
  <!-- Section: Design Block -->
  <section class="mb-10 text-gray-800">
    <h1 class="font-bold text-3xl mb-4">{{$posts->title}}</h1>

    <p class="uppercase text-red-600 font-bold mb-6 flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-4 h-4 mr-2">
        <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
        <path fill="currentColor"
          d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85 63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z" />
        </svg>Hot news
    </p>

    <p class="note note-light border-l-4 border-gray-800 rounded p-2 mb-6">
      <strong>简介:</strong> {{$posts->jianjie}}
    </p>

    <p class="mb-6">
    {!!$posts->content!!}
    </p>

   
  </section>
  <!-- Section: Design Block -->
  
</div>
<!-- Container for demo purpose -->
@endforeach
</div>


</div>
</div>
</div>
</div>
</div>

</main>
<x-footer />