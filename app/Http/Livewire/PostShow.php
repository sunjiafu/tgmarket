<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{

 

    public $post;

    public function mount($url){

        $this->post = Post::all()->where('url',$url);

       

    }

    public function render()
    {
        return view('livewire.post');
    }
}
