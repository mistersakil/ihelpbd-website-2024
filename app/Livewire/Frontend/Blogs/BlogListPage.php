<?php

namespace App\Livewire\Frontend\Blogs;

use Livewire\Component;
use Illuminate\Contracts\View\View;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogListPage extends Component
{
    public string $metaTitle = 'blog list';
    public string $module = 'blog';

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.blogs.blog-list-page')->title($this->metaTitle);
    }
}
