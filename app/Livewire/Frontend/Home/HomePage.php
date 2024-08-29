<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class HomePage extends Component
{
    ## Meta props
    public string $metaTitle = 'home';
    public array $data = [];


    /**
     * Create a new component instance.
     * @return void
     */
    public function mount(): void
    {
        $this->data = [
            'about' => [
                'title' => 'About Project Management',
                'subTitle' => 'Project Management section subtitle',
                'img' => Vite::imageWeb('service-img1.jpg'),
                'items' => [
                    'point number one. point number one. point number one. ',
                    'point number two. point number two. point number two',
                    'point number three. point number three. point number three',
                    'point number four. point number four. point number four',
                    'point number five. point number five. point number five',
                    'point number six. point number six. point number six',
                    'point number seven. point number seven. point number seven',
                    'point number eight. point number eight. point number eight',
                    'point number nine. point number nine. point number nine',
                ]
            ]
        ];
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title("Home")]
    public function render(): View
    {
        return view('livewire.frontend.home.home-page');
    }
}
