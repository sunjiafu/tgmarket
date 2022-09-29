@section('pagetitle','Telegram服务内容')

@if(Auth::check())
<div class="flex flex-row min-h-screen  text-gray-800">
        <x-sidebar/>
        <main class="main flex flex-col  w-full -ml-64 md:ml-0 transition-all duration-150 ease-in">
        <header class="header bg-white shadow py-4 px-4">
        <div class="header-content flex items-center flex-row">
          <form action="#">
            <div class="hidden md:flex relative">
              <div
                class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400"
              >
                <svg
                  class="h-6 w-6"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>

              <input
                id="search"
                type="text"
                name="search"
                class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                placeholder="Search..."
              />
            </div>
            <div class="flex md:hidden">
              <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                <svg
                  class="h-6 w-6 text-gray-500"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </a>
            </div>
          </form>
          <div class="flex ml-auto">
           
              <span class="flex flex-col ">
                <span class="truncate w-full font-semibold tracking-wide leading-none">  {{ Auth::user()->name }}</span>
                <span class="truncate w-full text-gray-500 text-xs leading-none mt-1">{{ Auth::user()->email }}</span>
              </span>
            </a>
          </div>
        </div>
      </header>
          
                <div class="main-content flex flex-col flex-grow p-4">
                        <h1 class="font-bold text-2xl text-gray-700">服务内容</h1>

                        <div class="flex flex-col  bg-white rounded mt-4">
                <div class=" pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0"> 
                          {{$this->table}}</div>
                     
                        </div>
                </div>
                <x-footer/>
        </main>
       
</div>
@else
<main class="bg-white dark:bg-gray-800 rounded-2xl  relative ">



        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <div class="pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                        
                {{$this->table}}
                </div>
        </div>
        </main>
<x-footer />
@endif