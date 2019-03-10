<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
	protected $fillable = ['code', 'name', 'tel', 'login', 'password', 'loginstatus', 'photopath'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasPermission($developer_name) {
        return $this->permissions()->where('developer_name', $developer_name)->exists();
    }

    public function permissions() {
        return $this->belongsToMany(Permission::class);
    }
}
