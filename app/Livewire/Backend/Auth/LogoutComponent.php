<?php

namespace App\Livewire\Backend\Auth;

use App\Livewire\Backend\BackendComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

/**
 * LogoutComponent Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LogoutComponent extends BackendComponent
{
    public string $logout_icon;
    public string $title;

    /**
     * Set initial values for once
     * 
     * @return void 
     */

    public function mount(): void
    {
        $this->logout_icon = _icons("logout");
        $this->title = "Logout";
    }

    /**
     * Log the user out of the application
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {

        ## Logout currently login user
        Auth::logout();

        ## Invalidate the user's session
        request()->session()->invalidate();

        ## Regenerate their CSRF token
        request()->session()->regenerateToken();

        ## Redirect the user to login page 
        return redirect()->route('admin.login');
    }


    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('livewire.backend.auth.logout-component');
    }
}
