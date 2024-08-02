<?php

namespace Patriciomartins\FilamentDeveloperLogins\Http\Requests;

use Patriciomartins\FilamentDeveloperLogins\FilamentDeveloperLoginsPlugin;
use Illuminate\Foundation\Http\FormRequest;

class LoginAsRequest extends FormRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'panel_id' => ['required', 'string'],
            'credentials' => ['required', 'string'],
        ];
    }

    public function authorize(): bool
    {
        return FilamentDeveloperLoginsPlugin::getById($this->get('panel_id'))->getEnabled();
    }
}
