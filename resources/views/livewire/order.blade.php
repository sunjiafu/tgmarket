<main class="bg-white   dark:bg-gray-800 rounded-2xl  relative ">

        <x-sidebar />
        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">

                <div class="pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">

                        <div id="alert-1" class="flex p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200" role="alert">
                    
                                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div class="ml-3 text-sm font-medium text-blue-700 dark:text-blue-800">
                                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                                                <li class="mt-4">请务必阅读每项服务的服务说明。</li>
                                                <li class="mt-4">请准确填写您的Telegram关联链接地址。</li>
                                        </ul>
                                </div>
                                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-100 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-blue-200 dark:text-blue-600 dark:hover:bg-blue-300" data-dismiss-target="#alert-1" aria-label="Close">
                                        <span class="sr-only">Close</span>
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                </button>
                        </div>
                        <div>

                   
                                <form wire:submit.prevent="Getorder" >
                                        {{ $this->form }}
                                        <div class=" flex justify-center mt-4">
                                                <x-jet-button>
                                                        提交订单
                                                </x-jet-button>
                                </form>
                        
                        </div>

                </div>

        </div>


        </div>
        </div>
        </div>
        </div>
        </div>

        <x-footer/>
</main>


