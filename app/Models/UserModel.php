<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }

    protected $table = 'm_users';
    protected $primaryKey = 'user_id';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

}

// class UserModel extends Model implements Authenticatable
// {
//     use HasFactory;

//     protected $table = 'm_users';       // Mendefinisikan nama tabel yang digunakan oleh model ini
//     protected $primaryKey = 'user_id';  // Mendefinisikan primary key dari tabel yang digunakan

//     //@var array
//     protected $fillable = ['level_id', 'username', 'nama', 'password'];
//     //protected $fillable = ['level_id', 'username', 'nama'];

//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }

//     public function getAuthIdentifierName()
//     {
//         return 'user_id';
//     }

//     public function getAuthIdentifier()
//     {
//         return $this->user_id;
//     }

//     public function getAuthPassword()
//     {
//         return $this->password;
//     }

//     public function getRememberToken()
//     {
//         return $this->remember_token;
//     }

//     public function setRememberToken($value)
//     {
//         $this->remember_token = $value;
//     }

//     public function getRememberTokenName()
//     {
//         return 'remember_token';
//     }

// }
