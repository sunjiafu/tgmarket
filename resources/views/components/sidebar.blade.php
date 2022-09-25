<div class="flex items-start justify-between">
    <div class=" hidden lg:block my-4 ml-8 shadow-lg relative w-80">
        <div class="bg-white h-full rounded-2xl dark:bg-gray-700">

            <nav class="mt-2 ">
                <div>
                    <x-jet-nav-link href="{{ route('order') }}" :active="request()->routeIs('order')">

                        <span class="text-left">

                            @svg('heroicon-o-plus-circle','w-6 h-6 m-auto')

                        </span>
                        <span class="mx-4 text-sm font-normal">
                            创建订单
                        </span>

                    </x-jet-nav-link>
                    <x-jet-nav-link href="orderlist" :active="request()->routeIs('orderlist')">
                        <span class="text-left">
                            @svg('heroicon-o-identification','w-6 h-6 m-auto')
                        </span>
                        <span class="mx-4 text-sm font-normal">
                            我的订单
                        </span>

                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('service') }}" :active="request()->routeIs('service')">

                        <span class="text-left">

                            @svg('heroicon-o-table','w-6 h-6 m-auto')

                        </span>
                        <span class="mx-4 text-sm font-normal">
                            服务内容
                        </span>

                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('pay') }}" :active="request()->routeIs('pay')">

                        <span class="text-left">

                            @svg('heroicon-o-credit-card','w-6 h-6 m-auto')

                        </span>
                        <span class="mx-4 text-sm font-normal">
                            充值
                        </span>

                    </x-jet-nav-link>

                </div>
            </nav>
        </div>
    </div>