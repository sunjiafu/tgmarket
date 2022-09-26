
<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('index') }}" class="flex items-center mb-4 sm:mb-0">
            @svg('logo','mr-3 h-8')
     
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TGmarketing</font></font></span>
        </a>
        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                @svg('telegram','w-5 h-5' )
               
            
                <span class="sr-only">Telegram</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            @svg('wechat','w-5 h-5' )
                <span class="sr-only">Instagram page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
            @svg('whatsapp','w-5 h-5' )
                <span class="sr-only">Twitter page</span>
            </a>
        
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2022 </font></font><a href="{{ route('index') }}" class="hover:underline"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tgmarketing™</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">。</font><font style="vertical-align: inherit;">版权所有。
    </font></font></span>
</footer>
