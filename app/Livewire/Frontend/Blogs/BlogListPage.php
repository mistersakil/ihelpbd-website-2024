<?php

namespace App\Livewire\Frontend\Blogs;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogListPage extends Component
{
    public string $metaTitle = 'learning material list';
    public string $module = 'blogs';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('Blog List')]
    public function render(): View
    {
        return view('livewire.frontend.blogs.blog-list-page');
    }
}
