

    <aside class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-indigo-500">
                
         
                <div class="sidebar-content px-4 py-6">
                        <ul class="flex flex-col w-full ">
                                <li class="py-2">
                                <x-jet-nav-link href="{{ route('order') }}" :active="request()->routeIs('order')">
                                   
                                                <span class="flex items-center justify-center text-lg text-gray-400">
                                                @svg('heroicon-o-plus-circle','w-6 h-6 m-auto')

                                                </span>
                                                <span class="ml-3">创建订单</span>
                                                </x-jet-nav-link>
                                </li>
                             
                                <li class="py-2">
                                <x-jet-nav-link href="orderlist" :active="request()->routeIs('orderlist')">
                                                <span class="flex items-center justify-center text-lg text-gray-400">
                                                @svg('heroicon-o-identification','w-6 h-6 m-auto')
                                                </span>
                                                <span class="ml-3">我的订单</span>
                                        </x-jet-nav-link>
                                </li>
                                <li class="py-2">
                                        <x-jet-nav-link href="pay" :active="request()->routeIs('pay')">
                                                <span class="flex items-center justify-center text-lg text-gray-400">
                                                @svg('heroicon-o-credit-card','w-6 h-6 m-auto')
                                                </span>
                                                <span class="ml-3">充值</span>
                                        </x-jet-nav-link>
                                        <li class="py-2">
                                        <x-jet-nav-link href="service" :active="request()->routeIs('service')">
                                                <span class="flex items-center justify-center text-lg text-gray-400">
                                                @svg('heroicon-o-credit-card','w-6 h-6 m-auto')
                                                </span>
                                                <span class="ml-3">服务内容</span>
                                        </x-jet-nav-link>
                                        </li>
                                        <li class="py-2">
                                        <x-jet-nav-link href="tgmarketing" :active="request()->routeIs('Post')">
                                                <span class="flex items-center justify-center text-lg text-gray-400">
                                                @svg('heroicon-o-academic-cap','w-6 h-6 m-auto')
                                                </span>
                                                <span class="ml-3">营销攻略</span>
                                        </x-jet-nav-link>
                                </li>
                                <li class="py-4">
                                        <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">账户管理</span>
                                </li>
                         
                        </ul>
                </div>
        </aside>