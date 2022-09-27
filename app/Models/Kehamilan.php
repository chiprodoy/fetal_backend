<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kehamilan extends Model
{
    use HasFactory;

    protected $appends = ['usia_kehamilan'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kehamilan_ke',
        'hari_pertama_haid',
        'uuid',
        'user_id'
    ];

    public static function searchable(){
        return [];
    }

    public static function viewable(){
        return [
            ['field'=>'kehamilan_ke','label'=>'Kehamilan Ke'],
            ['field'=>'hari_pertama_haid','label'=>'Hari Pertama Haid'],
            ['field'=>'usia_kehamilan','label'=>'Usia Kehamilan'],
        ];
    }
  /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id','user_id'
    ];

        /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function setUuidAttribute($value)
    {
        $this->attributes['uuid'] = (string) Str::uuid();
    }

    /**
     * Get Usia Kehamilan.
     *
     * @param  string  $value
     * @return void
     */
    public function getUsiaKehamilanAttribute($value)
    {
        $now  = Carbon::now();
        $end  = Carbon::parse($this->hari_pertama_haid);
        $usiaHari=$now->diffInDays($end);
        $usiaMinggu=floor($usiaHari/7);
        $sisaHari=$usiaHari % 7;
        return $usiaMinggu." Minggu ".$sisaHari." Hari";

    }
    /**
     * Get the user that owns kehamilan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
