<!-- Container for demo purpose -->


<!-- Section: Design Block -->

<section class="mb-10 py-2  text-gray-800 text-center lg:text-left">

    <div class="block rounded-lg shadow-lg bg-white">
    <div class="py-2 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="flex flex-wrap items-center">
            <div class="grow-0 px-6  py-2 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12">

                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
          
                        <img class="rounded-t-lg" src="/img/image-visual-mapi.png" alt="Telegram购买会员">
              
                    <div class="p-5">
                       
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">只要一个账号开始</h5>
                     
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">你只需要注册一个账号，在系统里提交您需要的订单即可开始Telegram营销，这一切都是自动的.</p>
                        <a href="{{route('order')}}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                           立即开始
                            <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
                <div class="px-6 py-12 md:px-12">
                    <h2 class="text-3xl font-bold mb-4 text-blue-600 display-5">电报营销常见问题?</h2>


                    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-white dark:bg-white text-blue-600 dark:text-white" data-inactive-classes="bg-white">
                        <h2 id="accordion-color-heading-1">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 " data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                                <span>Telegram会员是真实账户还是机器人?</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-1" class="" aria-labelledby="accordion-color-heading-1">
                            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-white dark:bg-white">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">所有添加的会员都是真实的账户，我们从不为客户添加机器人。即使是离线会员（假），他们也是真实的账户，只是很久没有活动.</p>
                                
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-2">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                                <span>如何购买频道或群组的订阅者?</span>
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                            <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">您只需在我们的网站上创建一个账号，然后根据您的需求创建订单即可，您可以在我的订单页面看到您的订单状态.</p>
                                <p class="text-gray-500 dark:text-gray-400">如果您还没有注册网站，可以点击<a href="{{route('register')}}" class="text-blue-600 dark:text-blue-500 hover:underline">此处注册</a> 成为本站会员。</p>
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-3">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                                <span>我要怎么样才可以联系到客服?</span>
                                <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                            <div class="p-5 font-light border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">我们对用户提供24/7的客服支持，您可以通过WhatsApp、Telegram、微信联系我们</p>
                               
                                <p class="mb-2 text-gray-500 dark:text-gray-400">我们的联系方式:</p>
                                <ul class="pl-5 text-gray-500 list-disc dark:text-gray-400">
                                    <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Telegram</a></li>
                                    <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">WhatsApp</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    
    </div>
</section>
<!-- Section: Design Block -->

<!-- Container for demo purpose -->