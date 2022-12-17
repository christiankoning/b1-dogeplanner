<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:126',
            'email' => 'required|unique:users|email',
            'telephone' => 'required',
            'street_name' => 'required',
            'house_number' => 'required|max:5',
            'postal_code' => 'required|max:6',
            'newPassword' => 'required|min:8|same:passwordRepeat',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Naam is verplicht',
            'name.min' => 'Naam moet in ieder geval uit :min karakters bestaan',
            'name.max' => 'Naam mag niet uit meer dan :max karakters bestaan',
            'email.required' => 'Email is verplicht',
            'email.unique' => 'Email is al in gebruik',
            'email.email' => 'Email moet een geldige email zijn',
            'telephone.required' => 'Telefoonnummer is verplicht',
            'street_name.required' => 'Straatnaam is verplicht',
            'house_number.required' => 'Huisnummer is verplicht',
            'house_number.max' => 'Huisnummer mag niet uit meer dan :max karakters bestaan',
            'postal_code.required' => 'Postcode is verplicht',
            'postal_code.max' => 'Postcode mag niet uit meer dan :max karakters bestaan',
            'newPassword.required' => 'Wachtwoord is verplicht',
            'newPassword.min' => 'Wachtwoord moet in ieder geval uit :min karakters bestaan',
            'newPassword.same' => 'Wachtwoorden zijn niet hetzelfde'
        ];
    }
}
