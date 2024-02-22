<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required',
            'logo'=> 'max:255',
            'start_project'=> 'required|date',
            'finish_project'=> 'date',
            'in_team'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Il nome deve essere lungo al massimo 50 caratteri',
            'name.unique' => 'E\' presente già un progetto con questo nome',
            'description.required' => 'E\' necessaria una descrizione per tuo progetto',
            'logo.max' => 'L\'URL deve essere di al massimo 255 caratteri',
            'start_project.required' => 'E\' necessaria una data di inizio progetto',
            'start_project.date' => 'La data deve essere in formato numerico Y-M-D',
            'finish_project.date' => 'La data deve essere in formato numerico Y-M-D',
            'in_team.required' => 'E\' necessario specificare se il progetto è stato realizzato in team'
        ];
    }
}
