

@section('title','order')

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form wire:submit.prevent="Getorder">
    {{ $this->form }}
    <div class=" items-center  mt-4">
    <x-jet-button >     
           提交订单
           </x-jet-button>
            </form>
            </div>
</div>
</div>