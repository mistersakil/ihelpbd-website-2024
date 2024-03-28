<?php

namespace App\Livewire\Frontend\Blogs;

use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class BlogListPage extends Component
{
    public string $metaTitle = 'blog list';
    public string $module = 'blog';

    public function render()
    {
        return view('livewire.frontend.blogs.blog-list-page')->title($this->metaTitle);
    }
}
