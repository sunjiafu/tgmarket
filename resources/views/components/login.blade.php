<div class="mb-12 lg:mb-0">
    <div class="block rounded-lg shadow-lg bg-white px-6 py-12 md:px-12">
        @if (Route::has('login'))
        @auth
        <div class="flex justify-center">
  <div class="block p-6 rounded-lg  bg-white max-w-sm">
    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ Auth::user()->name }}</h5>
    <p class="text-gray-700 text-base mb-4">
    余额:<span class=" text-red-500">${{ Auth::user()->balanceFloat }}</span>
    </p>
    <a href="{{ route('order') }}" class="inline-block px-7 py-3 bg-blue-800    text-white   fount-medium text-sm  leading-snug uppercase rounded shadow-md hover:underline hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900  active:shadow-lg transition duration-150 ease-in-out no-underline"  >去创建订单</a>
  </div>
</div>
        @else

  

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('记住我') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        忘记密码？
                    </a>
                    @endif

                    <x-filament::link class="ml-4" href="{{route('register')}}">
                        {{ __('注册') }}
                    </x-filament::link>
                    <x-jet-button class="ml-4">
                        {{ __('登录') }}
                    </x-jet-button>
                </div>
            </form>

 


    </div>
</div>
@endauth
@endif