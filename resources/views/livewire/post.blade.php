
@foreach ($post as $posts)
@section('pagetitle',$posts->title)
@section('meta_keywords',$posts->auther)
<div class="post">
<style>
    .content p {

        text-indent: 2rem;
    }

    .content ol {

        list-style-type: disc;
        list-style-position: inside;

    }

    .content ul {

        list-style-type: disc;
        list-style-position: inside;

    }

    .content a {

        text-decoration-line: underline;
        color: blue;
    }

    .content img {


        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        height: auto;
        border-radius: 8px;
    }

    figure {

        max-width: 32rem
            /* 512px */
        ;


    }

    figcaption {

        margin-top: 0.5rem
            /* 8px */
        ;
        font-size: 0.875rem
            /* 14px */
        ;
        line-height: 1.25rem
            /* 20px */
        ;
        text-align: center;
        color: rgb(107 114 128 / var(--tw-text-opacity));


    }
</style>
<div class="max-w-7xl container flex flex-wrap justify-between items-center mx-auto px-4 pt-8 sm:px-6 lg:px-8   ">
<nav class="hidden lg:inline" aria-label="Breadcrumb">
  <ol class="inline-flex  items-center space-x-1 md:space-x-3">
    <li class="inline-flex items-center">
      <a href="{{route('index')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
        首页
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="{{route('Post')}}" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">TG营销攻略</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{$posts->title}}</span>
      </div>
    </li>
  </ol>
</nav>
</div>
<main class="pt-4 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900  ">

    <div class="flex justify-between px-4 mx-auto max-w-screen-xl rounded-lg border border-gary-200 shadow-md   ">


        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

            <header class="mb-4 lg:mb-6 not-format">

          


                <h1 class="mb-4 pt-8 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$posts->title}}</h1>
            </header>


            <div class="content py-6  space-y-1 text-gray-500 leading-loose   ">
                {!!$posts->content!!}
            </div>
        </article>
        @endforeach
    </div>

</main>


<x-footer />
</div>