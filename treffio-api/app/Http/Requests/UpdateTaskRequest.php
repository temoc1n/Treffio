<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        $method = $this->method();

        if($method == 'PUT') {
            return [
                'name' => ['sometimes', 'required'],
                'description' => ['sometimes', 'required'],
                'deadline' => ['sometimes', 'required'],
                'done' => ['sometimes', 'required', Rule::in([0,1])]
            ];
        } else {
            return "Use PUT to update the tasks";
        }

    }
}
