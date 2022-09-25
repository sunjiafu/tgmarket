<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Contracts\View\View;
use App\Models\Service;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class Servicelist extends Component
{



    public function render(): View
    {


        return view('livewire.servicelist',['meta_keywords'=>'Tg增加会员,Telegram营销,telegram购买会员']);
    }
}
