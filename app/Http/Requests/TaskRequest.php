<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'task' => 'required|string|max:255',
            'description' => 'nullable|string'
        ];
    }
}
