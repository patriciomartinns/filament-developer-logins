<?php

namespace Patriciomartins\FilamentDeveloperLogins\View\Components;

use Patriciomartins\FilamentDeveloperLogins\FilamentDeveloperLoginsPlugin;
use Illuminate\View\Component;
use Illuminate\View\View;

class DeveloperLogins extends Component
{
    protected FilamentDeveloperLoginsPlugin $plugin;

    public function __construct()
    {
        $this->plugin = FilamentDeveloperLoginsPlugin::current();
    }

    public function render(): View
    {
        return view('filament-developer-logins::components.developer-logins', [
            'users' => $this->plugin->getUsers(),
        ]);
    }
}
