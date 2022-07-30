<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tempat_lahir',
        'tgl_lahir',
        'pekerjaan',
        'pendidikan',
        'jumlah_anak',
        'uid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set the user's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Set the uid.
     *
     * @param  string  $value
     * @return void
     */
    public function setUidAttribute($value)
    {
        $this->attributes['uid'] = (string) Str::uuid();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getPermission() {
        return $this->roles()->permissions();
    }

    public function isRole($role){
        return ($this->roles()->where('role_name',$role)->count() > 0) ? true : false ;
    }

    /**
     * Get the kehamilan relation
     */
    public function kehamilans()
    {
        return $this->hasMany(Kehamilan::class);
    }

    /**
     * Get the kehamilan relation
     */
    public function historykehamilans()
    {
        return $this->hasManyThrough(HistoryKehamilan::class,Kehamilan::class);
    }
}

class Pendidikan
{
   public const SD='SD';
   public const SMP='SMP';
   public const SMA='SMA';
   public const D3='D3';
   public const S1='S1';
   public const S2='S2';
   public const S3='S3';

}
