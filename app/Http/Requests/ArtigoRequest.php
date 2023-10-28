<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtigoRequest extends FormRequest
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
        // Pega o id do item, sendo permitindo criar uma regra de exceção e comparação do id a ser editado
        $id = $this->segment(3);
        return [
            'titulo'        => "required",
            'descricao'     => "required",
            'data'          => "required",
            'conteudo'      => "required",
        ];
    }
}
