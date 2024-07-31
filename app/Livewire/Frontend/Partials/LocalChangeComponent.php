<?php

namespace App\Livewire\Frontend\Partials;

use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LocalChangeComponent extends Component
{
    public array $locales = [];
    public string $selectedLocale;
    public $segments;

    /**
     *  Initialize the component
     *
     * @return void
     */
    public function mount(): void
    {
        $this->locales = localList();
        $this->selectedLocale = session()->has('locale') ?  session()->get('locale') : env('APP_LOCALE', 'en');
    }

    /**
     * changeLocale to change one language to another
     *
     * @return mixed
     */
    public function changeLocale(): mixed
    {
        if (!array_key_exists($this->selectedLocale, $this->locales)) {
            abort(400);
        }

        app()->setLocale($this->selectedLocale);
        session()->put('locale', $this->selectedLocale);

        $url = url()->previous();
        $this->segments = parse_url($url)['path'];

        return $this->redirect($this->segments);
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
