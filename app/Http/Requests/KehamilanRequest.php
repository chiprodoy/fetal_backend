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
        if($this->method() == 'POST'){
            return true;
        }
        else if (($this->method() == 'PUT' || $this->method() == 'DESTROY') && !$this->user()->isRole(RoleName::SUPERADMIN)) {
            return (Kehamilan::where('uuid',$this->route('uidKehamilan'))->where('user_id',$this->user()->id)->count() > 0);
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
//            'uuid'=> ['required'],
            'kehamilan_ke' => ['required','numeric'],
            'hari_pertama_haid' => ['required','date'],
        ];
    }
}
