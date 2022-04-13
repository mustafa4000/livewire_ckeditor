<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;

class MyEditor extends Component
{
    public $title;
    public $content;

    // public function mount()
    // {
    //     $article = Artikel::find(1);
    //     $this->title = $article->title;
    //     $this->content = $article->content;
    // }

    public function render()
    {
        return view('livewire.my-editor', [
            'articles' => Artikel::orderBy('id','desc')->get()
        ]);
    }

    public function articleStore()
    {
        $data = [
            'title' => $this->title,
            'content' => $this->content,
        ];
        // dd($data);
        $store = Artikel::create($data);
        if ($store) {
            $this->title = NULL;
            $this->dispatchBrowserEvent('articleStore');
        }
    }
}
