<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
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
            'manufacturer' => 'required',
            'model' => 'required',
            'year_of_issue' => 'required',
            'horsepower' => 'required',
            'transmission' => 'required',
            'engine_power' => 'required',
        ];
    }

	public function messages() {
		return [
			'manufacturer.required' => 'Поле производитель является обязательным',
			'model.required' => 'Поле модель является обязательным',
			'year_of_issue.required' => 'Поле год выпуска является обязательным',
            'horsepower.required' => 'Поле лошадиные силы является обязательным',
            'transmission.required' => 'Поле коробка передач является обязательным',
            'engine_power.required' => 'Поле мощность двигателя является обязательным'
		];
	}
}
