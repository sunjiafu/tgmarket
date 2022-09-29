<nav x-data="{ open: false }" class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="max-w-7xl container flex flex-wrap justify-between items-center mx-auto px-4 sm:px-6 lg:px-8">

    <!-- logo -->
    <a href="{{ route('index') }}" class="flex items-center">

 
      <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Tgmarketing</font>
        </font>
      </span>
    </a>
    @if (Route::has('login'))
    <div class="flex items-center md:order-2">
      @auth
      <button type="button" class="flex mr-3 text-sm bg-white  md:mr-0 focus:ring-4 focus:ring-gray-300 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">打开用户菜单</font>
          </font>
        </span>
        {{ Auth::user()->name }}
        @svg('heroicon-o-chevron-down','w-6 h-3')
      </button>
      @else
      

      <div class="px-4">
      <a href="{{ route('login') }}" type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">登录</a>
      </div>
      @endauth
      @endif
      <!-- Dropdown menu -->
      <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 4910.4px, 0px);">
        @if (Route::has('login'))
        <div class="py-3 px-4">
          @auth
          <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
          <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">余额: {{ Auth::user()->balanceFloat }}</span>
          @else

          <a href="{{ route('login') }}" type="button" class="text-sm text-gray-700 dark:text-gray-500 underline">登录</a>
          @endauth
          @endif
        </div>
        <ul class="py-1" aria-labelledby="user-menu-button">
          <li>
            <a href="{{ route('profile.show') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">个人中心</a>
          </li>
          <li>
            <a href="{{ route('orderlist') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">我的订单</a>
          </li>
          <li>
            <a href="{{ route('pay') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">充值</a>
          </li>
          </ul>
<div class="py-2 flex justify-center">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
             
                <!-- <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit(); " role="button">
                

                  {{ __('退出') }}
                </a> -->

                <button class="py-2 px-3 text-xs font-medium text-center text-white bg-gray-700 rounded-lg hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('退出') }}</button>
     
            </form>

</div>
      </div>
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
        <x-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')">
        首页
        </x-nav-link>
       
        </li>
        <li>
        <x-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">
        服务内容
        </x-nav-link>
        </li>

        <x-nav-link href="{{ route('Post') }}" :active="request()->routeIs('Post')">
        TG营销攻略
        </x-nav-link>
        </li>

      </ul>
    </div>
  </div>
</nav>