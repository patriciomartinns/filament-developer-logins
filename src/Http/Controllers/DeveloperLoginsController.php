<?php

namespace Patriciomartins\FilamentDeveloperLogins\Http\Controllers;

use Patriciomartins\FilamentDeveloperLogins\Exceptions\ImplementationException;
use Patriciomartins\FilamentDeveloperLogins\Facades\FilamentDevelopersLogin;
use Patriciomartins\FilamentDeveloperLogins\FilamentDeveloperLoginsPlugin;
use Patriciomartins\FilamentDeveloperLogins\Http\Requests\LoginAsRequest;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Livewire\Features\SupportRedirects\Redirector;

class DeveloperLoginsController extends Controller
{
    /**
     * @throws ImplementationException
     */
    public function loginAs(LoginAsRequest $request): RedirectResponse | Redirector
    {
        $panel = Filament::getPanel($request->validated('panel_id'));
        $plugin = FilamentDeveloperLoginsPlugin::getById($request->validated('panel_id'));
        $credentials = $request->validated('credentials');

        return FilamentDevelopersLogin::login($panel, $plugin, $credentials);
    }
}
