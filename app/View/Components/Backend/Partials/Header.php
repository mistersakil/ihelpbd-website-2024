<?php

namespace App\View\Components\Backend\Partials;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Sidebar Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class Header extends Component
{

    public string $user_name = 'default name';
    public string $user_email = 'default@email.com';
    public bool $isDisplayLogoutAction = false;

    /**
     * Set initial value for once
     *
     * @return void
     */
    public function __construct()
    {
        $auth_user = auth()->user();
        if ($auth_user) {
            $this->user_name =  ucwords($auth_user->name);
            $this->user_email = $auth_user->email;
            $this->isDisplayLogoutAction = true;
        }
    }

    /**
     * Render view
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('components.backend.partials.header');
    }
}
