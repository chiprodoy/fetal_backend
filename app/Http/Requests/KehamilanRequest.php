<?php

namespace App\Http\Requests;

use App\Models\Kehamilan;
use App\Models\RoleName;
use Illuminate\Foundation\Http\FormRequest;

class KehamilanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $kehamilan=Kehamilan::find($this->route('id'));

        if (($this->method() == 'PUT' || $this->method() == 'DESTROY') && !$this->user()->isRole(RoleName::SUPERADMIN)) {
          return $this->user()->id==$kehamilan->user_id;
        }
        return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uuid'=> ['required','numeric'],
            'kehamilan_ke' => ['required','numeric'],
            'hari_pertama_haid' => ['required','date'],
        ];
    }
}
