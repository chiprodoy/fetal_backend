<?php

namespace App\Http\Requests;

use App\Models\Kehamilan;
use App\Models\RoleName;
use Illuminate\Foundation\Http\FormRequest;

class HistoryKehamilanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return (Kehamilan::where('uuid',$this->route('uuidKehamilan'))->where('user_id',$this->user()->id)->count() > 0);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jumlah_gerakan_janin' => ['required','numeric'],
            'waktu_pengukuran' => ['required','date'],
            'lama_waktu_pengukuran' => ['required','numeric'],

        ];
    }
}
