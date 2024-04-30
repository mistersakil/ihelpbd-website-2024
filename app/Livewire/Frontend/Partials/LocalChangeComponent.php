<?php

namespace App\Livewire\Frontend\Partials;

use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LocalChangeComponent extends Component
{
    public array $locals = [];
    public string $selectedLocal;
    public $segments;

    /**
     *  Initialize the component
     *
     * @return void
     */
    public function mount(): void
    {
        $this->locals = [
            'en' => 'English',
            'bd' => 'বাংলা',
            'my' => 'Malay'
        ];

        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
            $this->selectedLocal = session()->get('locale');
        } else {
            $this->selectedLocal = 'en';
            app()->setLocale($this->selectedLocal);
        }
    }

    /**
     * changeLocaleAction to change one language to another
     *
     * @return mixed
     */
    public function changeLocaleAction(): mixed
    {

        
        if (!array_key_exists($this->selectedLocal, $this->locals)) {
            abort(400);
        }

        app()->setLocale($this->selectedLocal);
        session()->put('locale', $this->selectedLocal);

        $url = url()->previous();
        $this->segments = parse_url($url)['path'];

        return $this->redirect($this->segments, navigate: true);
    }

    /**
     * Render view
     *
     * @return  \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.frontend.partials.local-change-component');
    }
}