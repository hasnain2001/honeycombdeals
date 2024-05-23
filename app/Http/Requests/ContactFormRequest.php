<?php

namespace App\Http\Requests;
namespace App\Http\ContactControllers;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
     
        public function authorized(){
            return true;
        }

     
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
        'email' => 'required|email',
        'website' => 'nullable|url',
        'message' => 'required|min:10',
        ];
    }
}
