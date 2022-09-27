<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Postlist extends Component
{

    public $post;


    public function mount(){

        $this->post = Post::all();
    }


    
    public function render()
    {
        return view('livewire.postlist');
    }
}
