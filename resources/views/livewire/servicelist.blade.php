@section('pagetitle','服务内容')

@section('meta_keywords',"$meta_keywords")

<main class="bg-white dark:bg-gray-800 rounded-2xl  relative ">

        <x-sidebar />

        <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <div class=" pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">

        

                {{$this->table}}

    

        </div>


        </div>
        </div>
        </div>
        </div>
        </div>
        
</main>
<x-footer />