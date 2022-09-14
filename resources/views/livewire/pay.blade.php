<div>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<x-filament::card.index>
<
</x-filament::card.index>
<x-filament::button>
123456
</x-filament::button>

<x-filament::link>
123456
</x-filament::link>

<x-filament::tabs.item>
notif
</x-filament::tabs.item>
<div class="mt-4">
            <form wire:submit.prevent="pay">
    {{ $this->form }}
    <div class=" items-center  mt-4">
    <x-jet-button >     
           提交订单
           </x-jet-button>
            </form>
</div>
            </div>
            
</div>
</div>
</div>


