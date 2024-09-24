<?php

namespace App\Livewire\Frontend\About;

use Livewire\Component;

use Livewire\Attributes\Title;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Vite;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class AboutPage extends Component
{
    public string $metaTitle = 'about us';
    public string $module = 'about';

    public array $data = [];

    /**
     * Create a new component instance.     
     * @return void
     */
    public function mount(): void
    {
        $this->staticData();
    }


    /**
     * About page about us section static data
     *
     * @return void
     */
    public function staticData(): void
    {
        $this->data['about'] = [
            'title' => 'Who Are We?',
            'subTitle' => 'About iHelpKL',
            'imgThumb' => Vite::imageWeb('about-img1.jpg'),
            'items' => [
                "Website design, CRM solutions, web-based software, and more",
                "Over 15 years of experience in custom software development.",
                "High-quality outcomes for projects of all sizes.",
                "Budget-friendly options without compromising quality.",
                "Projects completed on schedule.",
                "Elevate your business with tailored technology solutions.",
            ]
        ];

        $this->data['projects'] = [
            'title' => 'Ambitions',
            'subTitle' => 'Our Goals',
            'items' => [
                [
                    'heading' => 'Vision',
                    'body' => 'To become a premier software development company delivering innovative solutions that enhance business operations and drive success, while inspiring and empowering individuals to realize their full potential.',
                    'img' =>  Vite::imageWeb('project-style1.jpg'),
                ],
                [
                    'heading' => 'Mission',
                    'body' => "Our mission is to create maintainable code and intuitive software that streamlines your business processes for greater efficiency.
                    
                    To meet our clients' needs, we excel at customizing processes. Our experience and resources equip us to tackle challenges, even when projects include new features and unique requirements. ",
                    'img' =>  Vite::imageWeb('project-style2.jpg'),
                ],
                
            ]
        ];
    }


    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    #[Title('About Us')]
    public function render(): View
    {
        return view('livewire.frontend.about.about-page');
    }
}
