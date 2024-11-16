<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('PQM - Blog')]
class Blog extends Component
{
/*     public $featuredPost;

    public function mount()
    {
        // Obtén el blog más reciente con 'is_featured = true'
        $this->featuredPost = ModelsBlog::where('is_featured', true)
                                  ->orderBy('created_at', 'desc')
                                  ->first();
    } */

    public function render()
    {
        return view('livewire.blog', [
            'latestPosts' => ModelsBlog::
                published()
                ->latest('created_at')
                ->take(3)
                ->get(),
            'featuredPost' => ModelsBlog::
                published()
                ->featured()
                ->latest('created_at')
                ->take(3)
                ->get(),
        ]);
    }
}
