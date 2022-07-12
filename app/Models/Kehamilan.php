<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehamilan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kehamilan_ke',
        'hari_pertama_haid',
        'usia_kehamilan',
    ];

    public static function viewable(){
        return [
            ['field'=>'kehamilan_ke','label'=>'Kehamilan Ke'],
            ['field'=>'hari_pertama_haid','label'=>'Hari Pertama Haid'],
            ['field'=>'usia_kehamilan','label'=>'Usia Kehamilan'],
        ];
    }

    /**
     * Get the user that owns kehamilan.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
    }
}
